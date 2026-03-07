@extends('layouts.app')

@section('content')
<div class="py-vh-4 w-100 overflow-hidden bg-gray-100">
  <div class="container">
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Αρχική</a></li>
        <li class="breadcrumb-item"><a href="{{ route('ase.index') }}">ASE Makine</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $product['name'] }}</li>
      </ol>
    </nav>

    <div class="row mb-5">
      <div class="col-lg-5 mb-4 mb-lg-0">
        @if($product['image'] ?? null)
          <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="img-fluid rounded">
        @else
          <div class="bg-dark text-light rounded d-flex align-items-center justify-content-center overflow-hidden" style="min-height: 320px;">
            <div class="text-center p-4">
              <span class="display-4 opacity-50">ASE</span>
              <p class="small mb-0 mt-2">Εικόνα προϊόντος από κατάλογο</p>
              <p class="small">Εκτελέστε: php artisan ase:extract-catalog-images</p>
            </div>
          </div>
        @endif
      </div>
      <div class="col-lg-7">
        <h1 class="display-6 fw-bold">{{ $product['name'] }}</h1>
        @if(!empty($product['category_label']))
          <p class="text-muted small mb-3">{{ $product['category_label'] }}</p>
        @endif
        @if(!empty($product['description']))
          <div class="mb-4">
            @foreach($product['description'] as $para)
              <p class="mb-2">{{ $para }}</p>
            @endforeach
          </div>
        @endif
      </div>
    </div>

    @if(!empty($product['specs']))
    <section class="mb-5">
      <h2 class="h5 text-uppercase border-bottom pb-2 mb-3">Τεχνικά δεδομένα</h2>
      <div class="table-responsive">
        <table class="table table-bordered bg-white">
          <tbody>
            @foreach($product['specs'] as $label => $value)
            <tr>
              <th class="bg-light text-nowrap" style="width: 40%;">{{ $label }}</th>
              <td>{{ $value }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <p class="small text-secondary mt-2">* Ανάλογα με την ταχύτητα του κινητήρα, την ποιότητα του κονιάματος, τη σύνθεση και την υφή, τον τύπο και την κατάσταση της αντλίας, διάμετρο σωλήνα, ύψος μεταφοράς.</p>
    </section>
    @endif

    @if(!empty($product['applications']))
    <section class="mb-5">
      <h2 class="h5 text-uppercase border-bottom pb-2 mb-3">Πεδία εφαρμογής</h2>
      <p class="text-secondary small mb-3">Για όλα τα αντλήσιμα κονιάματα και εφαρμογές, όπως:</p>
      <ul class="list-unstyled row g-2">
        @foreach($product['applications'] as $item)
        <li class="col-md-6 col-lg-4">
          <span class="text-primary me-2">•</span>{{ $item }}
        </li>
        @endforeach
      </ul>
    </section>
    @endif

    @if(!empty($product['equipment']))
    <section class="mb-5">
      <h2 class="h5 text-uppercase border-bottom pb-2 mb-3">Βασικός εξοπλισμός</h2>
      <ul class="list-group list-group-flush">
        @foreach($product['equipment'] as $item)
        <li class="list-group-item ps-0 py-2 border-0">{{ $item }}</li>
        @endforeach
      </ul>
    </section>
    @endif

    @if(empty($product['specs']) && empty($product['applications']) && empty($product['equipment']) && count($product['description'] ?? []) <= 1)
    <p class="text-secondary">Για πλήρη τεχνικά χαρακτηριστικά, εξοπλισμό και πεδία εφαρμογής, επικοινωνήστε μαζί μας.</p>
    @endif

    @if($catalogPdf && file_exists(public_path('docs/' . $catalogPdf)))
    <p class="mt-3 small">
      <a href="{{ asset('docs/' . $catalogPdf) }}" class="link-secondary" download>Λήψη πλήρους καταλόγου (PDF)</a>
    </p>
    @endif

    <div class="mt-5 pt-3 border-top">
      <a href="{{ route('ase.index') }}" class="btn btn-outline-secondary me-2">← Όλα τα προϊόντα ASE</a>
      <a href="{{ route('home') }}#contact" class="btn btn-warning">Επικοινωνία</a>
    </div>
  </div>
</div>
@endsection
