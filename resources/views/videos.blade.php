@extends('layouts.app')

@section('title', 'Videos - SOUND Group')

@section('content')

<section class="page-header">
  <div class="container">
    <h1><i class="fas fa-video red"></i> Video Collection</h1>
    <p>Watch Latest Music Videos, Concerts & More</p>
  </div>
</section>

<section class="pb-0">
  <div class="container">
    <div class="filter-bar">
      <input type="text" placeholder="🔍 Search videos...">
      <select>
        <option value="">All Languages</option>
        <option>Hindi</option><option>English</option><option>Punjabi</option><option>Tamil</option>
      </select>
    </div>
  </div>
</section>

<section class="section pt-4">
  <div class="container">
    <div class="row g-4">

      <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card custom-card h-100">
          <div class="card-image ratio ratio-16x9">
            <img src="https://picsum.photos/400/250?random=11" alt="Official Music Video">
            <span class="new-badge">NEW</span>
            <div class="play-overlay"><i class="fas fa-play"></i></div>
            <span class="duration">4:25</span>
          </div>
          <div class="card-body">
            <h3>Official Music Video</h3>
            <p class="artist"><i class="fas fa-user"></i> Taylor Swift</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card custom-card h-100">
          <div class="card-image ratio ratio-16x9">
            <img src="https://picsum.photos/400/250?random=12" alt="Live Concert">
            <span class="new-badge">NEW</span>
            <div class="play-overlay"><i class="fas fa-play"></i></div>
            <span class="duration">3:50</span>
          </div>
          <div class="card-body">
            <h3>Live Concert</h3>
            <p class="artist"><i class="fas fa-user"></i> Coldplay</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card custom-card h-100">
          <div class="card-image ratio ratio-16x9">
            <img src="https://picsum.photos/400/250?random=13" alt="Bollywood Hit">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
            <span class="duration">5:10</span>
          </div>
          <div class="card-body">
            <h3>Bollywood Hit</h3>
            <p class="artist"><i class="fas fa-user"></i> Ranveer Singh</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card custom-card h-100">
          <div class="card-image ratio ratio-16x9">
            <img src="https://picsum.photos/400/250?random=14" alt="Punjabi Song">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
            <span class="duration">3:15</span>
          </div>
          <div class="card-body">
            <h3>Punjabi Song</h3>
            <p class="artist"><i class="fas fa-user"></i> AP Dhillon</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card custom-card h-100">
          <div class="card-image ratio ratio-16x9">
            <img src="https://picsum.photos/400/250?random=15" alt="Tamil Melody">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
            <span class="duration">4:00</span>
          </div>
          <div class="card-body">
            <h3>Tamil Melody</h3>
            <p class="artist"><i class="fas fa-user"></i> Anirudh</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card custom-card h-100">
          <div class="card-image ratio ratio-16x9">
            <img src="https://picsum.photos/400/250?random=16" alt="Hindi Romantic">
            <span class="new-badge">NEW</span>
            <div class="play-overlay"><i class="fas fa-play"></i></div>
            <span class="duration">4:45</span>
          </div>
          <div class="card-body">
            <h3>Hindi Romantic</h3>
            <p class="artist"><i class="fas fa-user"></i> Arijit Singh</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card custom-card h-100">
          <div class="card-image ratio ratio-16x9">
            <img src="https://picsum.photos/400/250?random=17" alt="Punjabi Party">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
            <span class="duration">3:30</span>
          </div>
          <div class="card-body">
            <h3>Punjabi Party</h3>
            <p class="artist"><i class="fas fa-user"></i> Diljit Dosanjh</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="card custom-card h-100">
          <div class="card-image ratio ratio-16x9">
            <img src="https://picsum.photos/400/250?random=18" alt="English Rock">
            <span class="new-badge">NEW</span>
            <div class="play-overlay"><i class="fas fa-play"></i></div>
            <span class="duration">4:20</span>
          </div>
          <div class="card-body">
            <h3>English Rock</h3>
            <p class="artist"><i class="fas fa-user"></i> Imagine Dragons</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection