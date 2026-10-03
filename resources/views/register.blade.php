@extends('layouts.app')

@section('title', 'Register - SOUND Group')

@section('content')

<div class="auth-container">
  <div class="auth-box">
    <h2><i class="fas fa-user-plus red"></i> Register</h2>
    <form method="POST" action="{{ url('/register') }}">
      @csrf
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="name" placeholder="John Doe" required>
      </div>
      <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email" placeholder="you@example.com" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Create password" required>
      </div>
      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" placeholder="Confirm password" required>
      </div>
      <button type="submit" class="btn-submit">Create Account</button>
      <p class="auth-link">Already registered? <a href="{{ url('/login') }}">Login</a></p>
    </form>
  </div>
</div>

@endsection