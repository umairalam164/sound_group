@extends('layouts.app')

@section('title', 'Home - SOUND Group')

@section('content')

<section class="hero d-flex align-items-center justify-content-center text-center">
  <div class="container hero-content">
    <h1 class="fade-in">Welcome to <span class="red">SOUND Group</span></h1>
    <p class="fade-in-delay">Your Ultimate Destination for Music & Videos</p>
    <p class="hero-sub fade-in-delay2">Explore Regional & English Songs, Videos, Albums and Artists</p>
    <div class="d-flex flex-wrap gap-3 justify-content-center fade-in-delay2">
      <a href="{{ url('/music') }}" class="btn btn-danger btn-lg rounded-pill px-4"><i class="fas fa-music me-2"></i>Explore Music</a>
      <a href="{{ url('/videos') }}" class="btn btn-outline-light btn-lg rounded-pill px-4"><i class="fas fa-video me-2"></i>Watch Videos</a>
    </div>
  </div>
</section>


<section class="section">
  <div class="container">
    <div class="section-header d-flex justify-content-between align-items-center flex-wrap">
      <h2><i class="fas fa-music red"></i> Latest Music</h2>
      <a href="{{ url('/music') }}" class="view-all">View All <i class="fas fa-arrow-right"></i></a>
    </div>
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

    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container">
    <div class="section-header d-flex justify-content-between align-items-center flex-wrap">
      <h2><i class="fas fa-video red"></i> Latest Videos</h2>
      <a href="{{ url('/videos') }}" class="view-all">View All <i class="fas fa-arrow-right"></i></a>
    </div>
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

    </div>
  </div>
</section>

<!-- ================= NEW ARTIST SHOWCASE SECTION ================= -->
<!-- ================= ARTIST SHOWCASE SECTION ================= -->
<section class="section artist-showcase-section">
  <div class="container">

    <div class="section-header text-center">
      <h2><i class="fas fa-users red"></i> Featured Artists</h2>
      <p style="color:var(--gray);max-width:600px;margin:15px auto 0;">
        Meet the talented artists behind your favorite songs and videos.
      </p>
    </div>

    <div class="row g-4 justify-content-center">

      <!-- Artist 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="artist-showcase-card">

          <div class="artist-showcase-avatar">
            <img src="https://i.pravatar.cc/300?img=1" alt="Arijit Singh">
          </div>

          <h3 class="artist-showcase-name">Arijit Singh</h3>
          <p class="artist-showcase-role">Playback Singer • Bollywood</p>

          <div class="artist-showcase-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>4.8</span>
          </div>

          <p class="artist-showcase-bio">
            India's most soulful playback voice with 500+ hit songs across multiple languages.
          </p>

          <div class="artist-showcase-stats">
            <div class="artist-stat">
              <h4>320+</h4>
              <p>Songs</p>
            </div>
            <div class="artist-stat">
              <h4>45</h4>
              <p>Albums</p>
            </div>
            <div class="artist-stat">
              <h4>12M</h4>
              <p>Listeners</p>
            </div>
          </div>

          <div class="artist-showcase-socials">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>

          <a href="{{ url('/artists') }}" class="artist-showcase-btn">
            View Profile <i class="fas fa-arrow-right"></i>
          </a>

        </div>
      </div>

      <!-- Artist 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="artist-showcase-card">

          <div class="artist-showcase-avatar">
            <img src="https://i.pravatar.cc/300?img=5" alt="Neha Kakkar">
          </div>

          <h3 class="artist-showcase-name">Neha Kakkar</h3>
          <p class="artist-showcase-role">Pop Singer • TV Judge</p>

          <div class="artist-showcase-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span>4.9</span>
          </div>

          <p class="artist-showcase-bio">
            India's most-streamed pop sensation known for her energetic Bollywood & Punjabi hits.
          </p>

          <div class="artist-showcase-stats">
            <div class="artist-stat">
              <h4>280+</h4>
              <p>Songs</p>
            </div>
            <div class="artist-stat">
              <h4>38</h4>
              <p>Albums</p>
            </div>
            <div class="artist-stat">
              <h4>9M</h4>
              <p>Listeners</p>
            </div>
          </div>

          <div class="artist-showcase-socials">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>

          <a href="{{ url('/artists') }}" class="artist-showcase-btn">
            View Profile <i class="fas fa-arrow-right"></i>
          </a>

        </div>
      </div>

      <!-- Artist 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="artist-showcase-card">

          <div class="artist-showcase-avatar">
            <img src="https://i.pravatar.cc/300?img=12" alt="Diljit Dosanjh">
          </div>

          <h3 class="artist-showcase-name">Diljit Dosanjh</h3>
          <p class="artist-showcase-role">Punjabi Singer • Actor</p>

          <div class="artist-showcase-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span>4.9</span>
          </div>

          <p class="artist-showcase-bio">
            Global Punjabi superstar blending traditional folk with modern beats and Bollywood hits.
          </p>

          <div class="artist-showcase-stats">
            <div class="artist-stat">
              <h4>250+</h4>
              <p>Songs</p>
            </div>
            <div class="artist-stat">
              <h4>30</h4>
              <p>Albums</p>
            </div>
            <div class="artist-stat">
              <h4>15M</h4>
              <p>Listeners</p>
            </div>
          </div>

          <div class="artist-showcase-socials">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>

          <a href="{{ url('/artists') }}" class="artist-showcase-btn">
            View Profile <i class="fas fa-arrow-right"></i>
          </a>

        </div>
      </div>

    </div>
  </div>
</section>
<!-- ================= END ARTIST SHOWCASE SECTION ================= -->

@endsection