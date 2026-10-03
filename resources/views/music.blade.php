@extends('layouts.app')

@section('title', 'Music - SOUND Group')

@section('content')

<section class="page-header">
  <div class="container">
    <h1><i class="fas fa-music red"></i> Music Collection</h1>
    <p>Explore Regional & English Songs</p>
  </div>
</section>

<section class="pb-0">
  <div class="container">
    <div class="filter-bar">
      <input type="text" placeholder="🔍 Search songs...">
      <select>
        <option value="">All Genres</option>
        <option>Pop</option><option>Rock</option><option>Classical</option>
        <option>Hip-Hop</option><option>Bollywood</option><option>Punjabi</option>
      </select>
      <select>
        <option value="">All Languages</option>
        <option>Hindi</option><option>English</option>
        <option>Punjabi</option><option>Tamil</option><option>Urdu</option>
      </select>
      <select>
        <option value="">All Years</option>
        <option>2024</option><option>2023</option><option>2022</option><option>2021</option>
      </select>
    </div>
  </div>
</section>

<section class="section pt-4">
  <div class="container">
    <div class="row g-4">

      <div class="col-6 col-md-4 col-lg-3 col-xl-2">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=1" alt="Melody of Love">
            <span class="new-badge">NEW</span>
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Melody of Love</h3>
            <p class="artist"><i class="fas fa-user"></i> Arijit Singh</p>
            <div class="rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
              <span>4.5</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3 col-xl-2">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=2" alt="Summer Beats">
            <span class="new-badge">NEW</span>
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Summer Beats</h3>
            <p class="artist"><i class="fas fa-user"></i> Neha Kakkar</p>
            <div class="rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              <span>5.0</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3 col-xl-2">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=3" alt="Rock Anthem">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Rock Anthem</h3>
            <p class="artist"><i class="fas fa-user"></i> Imagine Dragons</p>
            <div class="rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
              <span>4.0</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3 col-xl-2">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=4" alt="Desi Vibes">
            <span class="new-badge">NEW</span>
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Desi Vibes</h3>
            <p class="artist"><i class="fas fa-user"></i> Diljit Dosanjh</p>
            <div class="rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              <span>5.0</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3 col-xl-2">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=5" alt="Classical Touch">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Classical Touch</h3>
            <p class="artist"><i class="fas fa-user"></i> A.R. Rahman</p>
            <div class="rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              <span>5.0</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3 col-xl-2">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=6" alt="Hip Hop Nation">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Hip Hop Nation</h3>
            <p class="artist"><i class="fas fa-user"></i> Badshah</p>
            <div class="rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
              <span>4.0</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3 col-xl-2">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=7" alt="Love Ballad">
            <span class="new-badge">NEW</span>
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Love Ballad</h3>
            <p class="artist"><i class="fas fa-user"></i> Atif Aslam</p>
            <div class="rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              <span>5.0</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3 col-xl-2">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=8" alt="Party Song">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Party Song</h3>
            <p class="artist"><i class="fas fa-user"></i> Yo Yo Honey Singh</p>
            <div class="rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
              <span>4.0</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3 col-xl-2">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=9" alt="Soulful Melody">
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>Soulful Melody</h3>
            <p class="artist"><i class="fas fa-user"></i> Shreya Ghoshal</p>
            <div class="rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              <span>5.0</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3 col-xl-2">
        <div class="card custom-card h-100">
          <div class="card-image">
            <img src="https://picsum.photos/300/300?random=10" alt="English Pop Hit">
            <span class="new-badge">NEW</span>
            <div class="play-overlay"><i class="fas fa-play"></i></div>
          </div>
          <div class="card-body">
            <h3>English Pop Hit</h3>
            <p class="artist"><i class="fas fa-user"></i> Ed Sheeran</p>
            <div class="rating">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              <span>5.0</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection