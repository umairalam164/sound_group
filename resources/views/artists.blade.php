@extends('layouts.app')

@section('title', 'Artists - SOUND Group')

@section('content')

<section class="page-header">
  <div class="container">
    <h1><i class="fas fa-users red"></i> Artists</h1>
    <p>Meet Your Favorite Artists</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row g-4">

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center">
          <div class="card-image" style="border-radius:50%;overflow:hidden;margin:20px auto 0;width:150px;height:150px;">
            <img src="https://i.pravatar.cc/300?img=1" alt="Arijit Singh">
          </div>
          <div class="card-body">
            <h3>Arijit Singh</h3>
            <p class="artist"><i class="fas fa-music"></i> Bollywood</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center">
          <div class="card-image" style="border-radius:50%;overflow:hidden;margin:20px auto 0;width:150px;height:150px;">
            <img src="https://i.pravatar.cc/300?img=5" alt="Neha Kakkar">
          </div>
          <div class="card-body">
            <h3>Neha Kakkar</h3>
            <p class="artist"><i class="fas fa-music"></i> Pop</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center">
          <div class="card-image" style="border-radius:50%;overflow:hidden;margin:20px auto 0;width:150px;height:150px;">
            <img src="https://i.pravatar.cc/300?img=12" alt="Diljit Dosanjh">
          </div>
          <div class="card-body">
            <h3>Diljit Dosanjh</h3>
            <p class="artist"><i class="fas fa-music"></i> Punjabi</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center">
          <div class="card-image" style="border-radius:50%;overflow:hidden;margin:20px auto 0;width:150px;height:150px;">
            <img src="https://i.pravatar.cc/300?img=15" alt="A.R. Rahman">
          </div>
          <div class="card-body">
            <h3>A.R. Rahman</h3>
            <p class="artist"><i class="fas fa-music"></i> Classical</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center">
          <div class="card-image" style="border-radius:50%;overflow:hidden;margin:20px auto 0;width:150px;height:150px;">
            <img src="https://i.pravatar.cc/300?img=20" alt="Taylor Swift">
          </div>
          <div class="card-body">
            <h3>Taylor Swift</h3>
            <p class="artist"><i class="fas fa-music"></i> Pop</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center">
          <div class="card-image" style="border-radius:50%;overflow:hidden;margin:20px auto 0;width:150px;height:150px;">
            <img src="https://i.pravatar.cc/300?img=22" alt="Ed Sheeran">
          </div>
          <div class="card-body">
            <h3>Ed Sheeran</h3>
            <p class="artist"><i class="fas fa-music"></i> Pop</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center">
          <div class="card-image" style="border-radius:50%;overflow:hidden;margin:20px auto 0;width:150px;height:150px;">
            <img src="https://i.pravatar.cc/300?img=25" alt="Atif Aslam">
          </div>
          <div class="card-body">
            <h3>Atif Aslam</h3>
            <p class="artist"><i class="fas fa-music"></i> Urdu</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card custom-card h-100 text-center">
          <div class="card-image" style="border-radius:50%;overflow:hidden;margin:20px auto 0;width:150px;height:150px;">
            <img src="https://i.pravatar.cc/300?img=30" alt="Badshah">
          </div>
          <div class="card-body">
            <h3>Badshah</h3>
            <p class="artist"><i class="fas fa-music"></i> Hip-Hop</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection