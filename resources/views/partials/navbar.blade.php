<nav class="navbar navbar-expand-lg fixed-top custom-navbar">
  <div class="container">
    <a class="navbar-brand logo" href="{{ url('/') }}">
      <i class="fas fa-play-circle"></i> SOUND<span class="red">Group</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('music') ? 'active' : '' }}" href="{{ url('/music') }}">Music</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('videos') ? 'active' : '' }}" href="{{ url('/videos') }}">Videos</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('albums') ? 'active' : '' }}" href="{{ url('/albums') }}">Albums</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('artists') ? 'active' : '' }}" href="{{ url('/artists') }}">Artists</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('genres') ? 'active' : '' }}" href="{{ url('/genres') }}">Genres</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('languages') ? 'active' : '' }}" href="{{ url('/languages') }}">Languages</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a></li>
      </ul>
      <div class="d-flex gap-2">
        <a href="{{ url('/login') }}" class="btn btn-outline-danger btn-sm px-3">Login</a>
        <a href="{{ url('/register') }}" class="btn btn-danger btn-sm px-3">Register</a>
      </div>
    </div>
  </div>
</nav>