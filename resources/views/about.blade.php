@extends('layouts.app')

@section('title', 'About - SOUND Group')

@section('content')

<section class="page-header">
  <div class="container">
    <h1>About <span class="red">SOUND Group</span></h1>
    <p>Learn more about our platform</p>
  </div>
</section>

<section class="section">
  <div class="container about-info text-center">
    <p class="mx-auto">SOUND Group is a leading entertainment platform that hosts a vast collection of regional and English songs, videos, and albums. Our mission is to bring quality entertainment to every user across the globe with an easy-to-use interface and rich content library.</p>
    <div class="row g-4 mt-5">
      <div class="col-md-4"><div class="stat"><i class="fas fa-music" style="font-size:40px;color:var(--red);margin-bottom:15px;"></i><h3>5000+</h3><p>Songs</p></div></div>
      <div class="col-md-4"><div class="stat"><i class="fas fa-video" style="font-size:40px;color:var(--red);margin-bottom:15px;"></i><h3>2000+</h3><p>Videos</p></div></div>
      <div class="col-md-4"><div class="stat"><i class="fas fa-users" style="font-size:40px;color:var(--red);margin-bottom:15px;"></i><h3>500+</h3><p>Artists</p></div></div>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container">
    <div class="section-header text-center">
      <h2>What We <span class="red">Offer</span></h2>
      <p style="color:var(--gray);max-width:600px;margin:0 auto;">Discover the features that make SOUND Group your go-to entertainment destination.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="feature-box">
          <i class="fas fa-music"></i>
          <h4>Vast Music Library</h4>
          <p>Thousands of songs across multiple genres, languages, and eras — from classical to the latest hits.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-box">
          <i class="fas fa-video"></i>
          <h4>HD Video Collection</h4>
          <p>Watch official music videos, live concerts, and exclusive performances in stunning quality.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-box">
          <i class="fas fa-star"></i>
          <h4>Rate & Review</h4>
          <p>Share your thoughts and rate your favorite songs and videos. Help others discover great content.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-box">
          <i class="fas fa-globe"></i>
          <h4>Regional & English</h4>
          <p>Enjoy content in Hindi, English, Punjabi, Tamil, Urdu, and many more regional languages.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header text-center">
      <h2>Our <span class="red">Story</span></h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="info-block">
          <h3><i class="fas fa-lightbulb red me-2"></i> How It Started</h3>
          <p>SOUND Group was founded with a simple idea: make entertainment accessible to everyone. We noticed that regional music and videos were often overlooked by major platforms, and we wanted to change that.</p>
        </div>
        <div class="info-block">
          <h3><i class="fas fa-rocket red me-2"></i> Our Growth</h3>
          <p>Over the years, we have expanded our library to include content in more than 10 languages, partnered with hundreds of artists and labels, and built a vibrant community of music lovers.</p>
        </div>
        <div class="info-block">
          <h3><i class="fas fa-heart red me-2"></i> Our Commitment</h3>
          <p>We are committed to supporting artists and creators by providing a fair and transparent platform for their work. Every feature we build is designed with our users and creators in mind.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container">
    <div class="section-header text-center">
      <h2>Platform <span class="red">Features</span></h2>
    </div>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="info-block">
          <h3><i class="fas fa-user-shield red me-2"></i> Administrator Role</h3>
          <ul>
            <li>Manage music, videos, and albums</li>
            <li>Add, edit, and delete content</li>
            <li>Approve or reject user submissions</li>
            <li>View platform statistics and reports</li>
            <li>Manage users and their permissions</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-block">
          <h3><i class="fas fa-user red me-2"></i> User Role</h3>
          <ul>
            <li>Browse music and videos by category</li>
            <li>Search and filter by genre, language, year</li>
            <li>Rate and review content</li>
            <li>Create and manage personal playlists</li>
            <li>Discover new and trending content</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header text-center">
      <h2>Get In <span class="red">Touch</span></h2>
      <p style="color:var(--gray);">Have questions? We'd love to hear from you.</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="stat text-center">
          <i class="fas fa-envelope" style="font-size:35px;color:var(--red);margin-bottom:15px;"></i>
          <h4 style="font-size:1.1rem;">Email Us</h4>
          <p>info@soundgroup.com</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stat text-center">
          <i class="fas fa-phone" style="font-size:35px;color:var(--red);margin-bottom:15px;"></i>
          <h4 style="font-size:1.1rem;">Call Us</h4>
          <p>+91 123 456 7890</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="stat text-center">
          <i class="fas fa-map-marker-alt" style="font-size:35px;color:var(--red);margin-bottom:15px;"></i>
          <h4 style="font-size:1.1rem;">Visit Us</h4>
          <p>Mumbai, India</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection