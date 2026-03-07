<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AseController
{
    /**
     * List all ASE products, grouped by category.
     */
    public function index(Request $request): View
    {
        $config = config('ase_products', []);
        $products = $config['products'] ?? [];
        $categories = $config['categories'] ?? [];
        $catalogPdf = $config['catalog_pdf'] ?? null;
        $imagesDir = $config['images_dir'] ?? 'img/ase/pages';
        $slugToPage = $config['slug_to_pdf_page'] ?? [];

        $grouped = [];
        foreach ($products as $product) {
            $cat = $product['category'] ?? 'other';
            if (!isset($grouped[$cat])) {
                $grouped[$cat] = [
                    'label' => $categories[$cat] ?? $cat,
                    'items' => [],
                ];
            }
            $page = $slugToPage[$product['slug'] ?? ''] ?? null;
            $imagePath = null;
            if ($page !== null) {
                $imageName = "page-{$page}.png";
                $fullPath = public_path($imagesDir . '/' . $imageName);
                if (file_exists($fullPath)) {
                    $imagePath = asset($imagesDir . '/' . $imageName);
                }
            }
            $product['image'] = $imagePath;
            $grouped[$cat]['items'][] = $product;
        }

        return view('ase.index', [
            'grouped' => $grouped,
            'catalogPdf' => $catalogPdf,
            'title' => 'ASE Makine — Προϊόντα',
        ]);
    }

    /**
     * Show a single ASE product by slug.
     */
    public function show(Request $request, string $slug): View|\Illuminate\Http\Response
    {
        $config = config('ase_products', []);
        $products = $config['products'] ?? [];
        $categories = $config['categories'] ?? [];
        $catalogPdf = $config['catalog_pdf'] ?? null;
        $imagesDir = $config['images_dir'] ?? 'img/ase/pages';
        $slugToPage = $config['slug_to_pdf_page'] ?? [];

        $product = null;
        foreach ($products as $p) {
            if (($p['slug'] ?? '') === $slug) {
                $product = $p;
                break;
            }
        }

        if (!$product) {
            abort(404);
        }

        $product['category_label'] = $categories[$product['category'] ?? ''] ?? $product['category'] ?? '';

        $content = config('ase_content', [])[$slug] ?? [];
        $product['description'] = $content['description'] ?? [];
        $product['specs'] = $content['specs'] ?? [];
        $product['applications'] = $content['applications'] ?? [];
        $product['equipment'] = $content['equipment'] ?? [];
        if (empty($product['description']) && !empty($product['short'])) {
            $product['description'] = [$product['short']];
        }

        $page = $slugToPage[$slug] ?? null;
        $imagePath = null;
        if ($page !== null) {
            $imageName = "page-{$page}.png";
            $fullPath = public_path($imagesDir . '/' . $imageName);
            if (file_exists($fullPath)) {
                $imagePath = asset($imagesDir . '/' . $imageName);
            }
        }
        $product['image'] = $imagePath;

        return view('ase.show', [
            'product' => $product,
            'catalogPdf' => $catalogPdf,
            'title' => $product['name'] . ' — ASE Makine',
        ]);
    }
}
