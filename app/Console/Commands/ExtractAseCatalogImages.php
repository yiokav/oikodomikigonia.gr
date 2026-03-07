<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExtractAseCatalogImages extends Command
{
    protected $signature = 'ase:extract-catalog-images
                            {--pdf= : Path to PDF (default: project root ASE Makine Katalog.pdf)}';

    protected $description = 'Export ASE Makine Katalog PDF pages to PNG images in public/img/ase/pages/ (requires pdftoppm)';

    public function handle(): int
    {
        $pdf = $this->option('pdf') ?? base_path('ASE Makine Katalog.pdf');
        if (!is_file($pdf)) {
            $this->error("PDF not found: {$pdf}");
            return self::FAILURE;
        }

        $outDir = public_path('img/ase/pages');
        if (!is_dir($outDir)) {
            mkdir($outDir, 0755, true);
        }

        $pdftoppm = trim((string) shell_exec('which pdftoppm 2>/dev/null'));
        if ($pdftoppm === '') {
            $this->warn('pdftoppm not found. Install poppler-utils (e.g. apt install poppler-utils) then run again.');
            $this->info("Images will be saved to: {$outDir}");
            return self::FAILURE;
        }

        $this->info('Exporting pages 2–31 (product pages)…');
        $cmd = sprintf(
            'pdftoppm -png -r 150 -f 2 -l 31 %s %s/page 2>&1',
            escapeshellarg($pdf),
            escapeshellarg($outDir)
        );
        exec($cmd, $out, $code);
        if ($code !== 0) {
            $this->error(implode("\n", $out));
            return self::FAILURE;
        }

        $files = glob($outDir . '/page-*.png') ?: [];
        foreach ($files as $path) {
            $base = basename($path);
            if (preg_match('/^page-0*(\d+)\.png$/', $base, $m)) {
                $pdfPage = (int) $m[1];
                if ($pdfPage < 2 || $pdfPage > 31) continue;
                $tempName = "ase-p{$pdfPage}.png";
                $tempPath = dirname($path) . '/' . $tempName;
                rename($path, $tempPath);
            }
        }
        foreach (glob($outDir . '/ase-p*.png') ?: [] as $path) {
            if (preg_match('/ase-p(\d+)\.png/', basename($path), $m)) {
                $n = (int) $m[1];
                if ($n < 2 || $n > 31) continue;
                $finalPath = dirname($path) . '/page-' . $n . '.png';
                rename($path, $finalPath);
            }
        }
        foreach (glob($outDir . '/page-32.png') ?: [] as $path) {
            unlink($path);
        }

        $this->info("Done. Images in {$outDir} (page-2.png … page-31.png).");
        return self::SUCCESS;
    }
}
