@extends('layouts.app')

@section('title', 'Login - SOUND Group')

@section('content')

<div class="auth-container">
  <div class="auth-box">
    <h2><i class="fas fa-sign-in-alt red"></i> Login</h2>
    <form method="POST" action="{{ url('/login') }}">
      @csrf
      <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email" placeholder="you@example.com" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password" required>
      </div>
      <div class="form-group">
        <label>Login As</label>
        <select name="role">
          <option value="user">User</option>
          <option value="admin">Administrator</option>
        </select>
      </div>
      <button type="submit" class="btn-submit">Login</button>
      <p class="auth-link">Don't have an account? <a href="{{ url('/register') }}">Register</a></p>
    </form>
  </div>
</div>

@endsection