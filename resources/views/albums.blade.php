@extends('layouts.app')

@section('title', 'Albums - SOUND Group')

@section('content')

<section class="page-header">
  <div class="container">
    <h1><i class="fas fa-compact-disc red"></i> Albums</h1>
    <p>Browse Music Albums Collection</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row g-4">

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=21" alt="Love Songs">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Love Songs</h3>
            <p class="artist"><i class="fas fa-user"></i> Various Artists</p>
            <p class="artist"><i class="fas fa-music"></i> 12 Songs</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=22" alt="Party Hits">
            <span class="new-badge">NEW</span>
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Party Hits</h3>
            <p class="artist"><i class="fas fa-user"></i> Various Artists</p>
            <p class="artist"><i class="fas fa-music"></i> 15 Songs</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=23" alt="Rock Classics">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Rock Classics</h3>
            <p class="artist"><i class="fas fa-user"></i> Various Artists</p>
            <p class="artist"><i class="fas fa-music"></i> 10 Songs</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=24" alt="Punjabi Vibes">
            <span class="new-badge">NEW</span>
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Punjabi Vibes</h3>
            <p class="artist"><i class="fas fa-user"></i> Various Artists</p>
            <p class="artist"><i class="fas fa-music"></i> 14 Songs</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=25" alt="Bollywood Best">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Bollywood Best</h3>
            <p class="artist"><i class="fas fa-user"></i> Various Artists</p>
            <p class="artist"><i class="fas fa-music"></i> 20 Songs</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=26" alt="Classical Moods">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Classical Moods</h3>
            <p class="artist"><i class="fas fa-user"></i> Various Artists</p>
            <p class="artist"><i class="fas fa-music"></i> 8 Songs</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=27" alt="Pop Stars">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Pop Stars</h3>
            <p class="artist"><i class="fas fa-user"></i> Various Artists</p>
            <p class="artist"><i class="fas fa-music"></i> 18 Songs</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=28" alt="Hip Hop Zone">
            <span class="new-badge">NEW</span>
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Hip Hop Zone</h3>
            <p class="artist"><i class="fas fa-user"></i> Various Artists</p>
            <p class="artist"><i class="fas fa-music"></i> 16 Songs</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection