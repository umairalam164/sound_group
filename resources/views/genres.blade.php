@extends('layouts.app')

@section('title', 'Genres - SOUND Group')

@section('content')

<section class="page-header">
  <div class="container">
    <h1><i class="fas fa-guitar red"></i> Music Genres</h1>
    <p>Browse By Genre</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row g-4">

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <i class="fas fa-microphone" style="font-size:50px;color:#ff4081;margin-bottom:15px;"></i>
          <h3 style="font-size:1.2rem;">Pop</h3>
          <p class="artist">120 Songs</p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <i class="fas fa-guitar" style="font-size:50px;color:#ff0000;margin-bottom:15px;"></i>
          <h3 style="font-size:1.2rem;">Rock</h3>
          <p class="artist">85 Songs</p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <i class="fas fa-music" style="font-size:50px;color:#9c27b0;margin-bottom:15px;"></i>
          <h3 style="font-size:1.2rem;">Classical</h3>
          <p class="artist">60 Songs</p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <i class="fas fa-headphones" style="font-size:50px;color:#ff9800;margin-bottom:15px;"></i>
          <h3 style="font-size:1.2rem;">Hip-Hop</h3>
          <p class="artist">95 Songs</p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <i class="fas fa-film" style="font-size:50px;color:#2196f3;margin-bottom:15px;"></i>
          <h3 style="font-size:1.2rem;">Bollywood</h3>
          <p class="artist">200 Songs</p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <i class="fas fa-drum" style="font-size:50px;color:#4caf50;margin-bottom:15px;"></i>
          <h3 style="font-size:1.2rem;">Punjabi</h3>
          <p class="artist">150 Songs</p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <i class="fas fa-saxophone" style="font-size:50px;color:#795548;margin-bottom:15px;"></i>
          <h3 style="font-size:1.2rem;">Jazz</h3>
          <p class="artist">45 Songs</p>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center" style="padding:30px;">
          <i class="fas fa-wave-square" style="font-size:50px;color:#00bcd4;margin-bottom:15px;"></i>
          <h3 style="font-size:1.2rem;">Electronic</h3>
          <p class="artist">70 Songs</p>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection