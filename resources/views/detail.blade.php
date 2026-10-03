@extends('layouts.app')

@section('title', 'Now Playing - SOUND Group')

@section('content')

<section class="detail-hero">
  <div class="container">
    <div class="row g-4">

      <!-- LEFT: Player + Info + Reviews -->
      <div class="col-lg-8">

        <!-- Media Player -->
        <div class="video-player">
          <video controls autoplay muted poster="https://picsum.photos/1280/720?random=1">
            <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>

        <!-- Title -->
        <h1 class="detail-title">Melody of Love</h1>

        <!-- Meta Row -->
        <div class="detail-meta">
          <span><i class="fas fa-user"></i> Arijit Singh</span>
          <span><i class="fas fa-music"></i> Bollywood</span>
          <span><i class="fas fa-language"></i> Hindi</span>
          <span><i class="fas fa-calendar"></i> 2024</span>
          <span><i class="fas fa-clock"></i> 4:25</span>
          <span><i class="fas fa-star" style="color:#ffc107;"></i> 4.5 (128 reviews)</span>
        </div>

        <!-- Description -->
        <div class="info-card">
          <h4><i class="fas fa-info-circle"></i> Description</h4>
          <p>Melody of Love is a soulful romantic track sung by Arijit Singh. Released in 2024, this song blends classical Indian melodies with modern production. The song explores themes of love, longing, and connection, and has quickly become a fan favorite across streaming platforms.</p>
        </div>

        <!-- Review Form -->
        <div class="review-form-box">
          <h3><i class="fas fa-pen"></i> Write a Review</h3>
          <form method="POST" action="#">
            @csrf
            <div class="form-group">
              <label style="color:var(--gray);font-size:14px;margin-bottom:8px;display:block;">Your Rating</label>
              <div class="star-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
            <div class="form-group" style="margin-bottom:20px;">
              <label style="color:var(--gray);font-size:14px;margin-bottom:8px;display:block;">Your Review</label>
              <textarea class="form-control-custom" rows="4" placeholder="Share your thoughts about this content..." required></textarea>
            </div>
            <button type="submit" class="btn-submit" style="width:auto;padding:12px 35px;">
              <i class="fas fa-paper-plane me-2"></i> Submit Review
            </button>
          </form>
        </div>

        <!-- Existing Reviews -->
        <div style="margin-top:40px;">
          <h3 style="margin-bottom:25px;font-size:1.4rem;">
            <i class="fas fa-comments red"></i> User Reviews (128)
          </h3>

          <div class="review-item">
            <div class="review-header">
              <span class="reviewer-name">Rahul Sharma</span>
              <span class="review-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </span>
            </div>
            <p>Beautiful song! Arijit Singh's voice is magical. I've been listening to it on repeat for a week.</p>
            <span class="review-date">2 days ago</span>
          </div>

          <div class="review-item">
            <div class="review-header">
              <span class="reviewer-name">Priya Verma</span>
              <span class="review-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
              </span>
            </div>
            <p>Great melody but the lyrics could have been better. Still, a solid track for romantic evenings.</p>
            <span class="review-date">5 days ago</span>
          </div>

          <div class="review-item">
            <div class="review-header">
              <span class="reviewer-name">Amit Kumar</span>
              <span class="review-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </span>
            </div>
            <p>Masterpiece! This is what modern Bollywood music should sound like. Highly recommended.</p>
            <span class="review-date">1 week ago</span>
          </div>

        </div>
      </div>

      <!-- RIGHT: Sidebar Info -->
      <div class="col-lg-4">
        <div class="info-card" style="top:100px;">
          <h4><i class="fas fa-info"></i> Details</h4>

          <div class="detail-sidebar-item">
            <span class="label">Title</span>
            <span class="value">Melody of Love</span>
          </div>
          <div class="detail-sidebar-item">
            <span class="label">Artist</span>
            <span class="value">Arijit Singh</span>
          </div>
          <div class="detail-sidebar-item">
            <span class="label">Album</span>
            <span class="value">Love Songs</span>
          </div>
          <div class="detail-sidebar-item">
            <span class="label">Genre</span>
            <span class="value">Bollywood</span>
          </div>
          <div class="detail-sidebar-item">
            <span class="label">Language</span>
            <span class="value">Hindi</span>
          </div>
          <div class="detail-sidebar-item">
            <span class="label">Year</span>
            <span class="value">2024</span>
          </div>
          <div class="detail-sidebar-item">
            <span class="label">Duration</span>
            <span class="value">4:25</span>
          </div>
          <div class="detail-sidebar-item">
            <span class="label">Rating</span>
            <span class="value" style="color:#ffc107;">★ 4.5 / 5</span>
          </div>
        </div>

        <!-- Related -->
        <div class="info-card" style="margin-top:20px;">
          <h4><i class="fas fa-list"></i> Related</h4>

          <div style="display:flex;gap:12px;margin-bottom:15px;cursor:pointer;">
            <img src="https://picsum.photos/80/80?random=2" style="width:60px;height:60px;border-radius:10px;object-fit:cover;">
            <div>
              <div style="font-size:14px;font-weight:600;">Summer Beats</div>
              <div style="font-size:12px;color:var(--gray);">Neha Kakkar</div>
            </div>
          </div>

          <div style="display:flex;gap:12px;margin-bottom:15px;cursor:pointer;">
            <img src="https://picsum.photos/80/80?random=4" style="width:60px;height:60px;border-radius:10px;object-fit:cover;">
            <div>
              <div style="font-size:14px;font-weight:600;">Desi Vibes</div>
              <div style="font-size:12px;color:var(--gray);">Diljit Dosanjh</div>
            </div>
          </div>

          <div style="display:flex;gap:12px;cursor:pointer;">
            <img src="https://picsum.photos/80/80?random=7" style="width:60px;height:60px;border-radius:10px;object-fit:cover;">
            <div>
              <div style="font-size:14px;font-weight:600;">Love Ballad</div>
              <div style="font-size:12px;color:var(--gray);">Atif Aslam</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection