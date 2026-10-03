@extends('layouts.app')

@section('title', 'Languages - SOUND Group')

@section('content')

<section class="page-header">
  <div class="container">
    <h1><i class="fas fa-language red"></i> Languages</h1>
    <p>Browse Music & Videos by Language</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row g-4">

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <div style="font-size:60px;margin-bottom:15px;">🇮🇳</div>
          <h3 style="font-size:1.3rem;">Hindi</h3>
          <p class="artist">1200 Items</p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <div style="font-size:60px;margin-bottom:15px;">🇬🇧</div>
          <h3 style="font-size:1.3rem;">English</h3>
          <p class="artist">900 Items</p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <div style="font-size:60px;margin-bottom:15px;">🇮🇳</div>
          <h3 style="font-size:1.3rem;">Punjabi</h3>
          <p class="artist">600 Items</p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <div style="font-size:60px;margin-bottom:15px;">🇮🇳</div>
          <h3 style="font-size:1.3rem;">Tamil</h3>
          <p class="artist">450 Items</p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <div style="font-size:60px;margin-bottom:15px;">🇵🇰</div>
          <h3 style="font-size:1.3rem;">Urdu</h3>
          <p class="artist">350 Items</p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <div style="font-size:60px;margin-bottom:15px;">🇮🇳</div>
          <h3 style="font-size:1.3rem;">Telugu</h3>
          <p class="artist">300 Items</p>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection