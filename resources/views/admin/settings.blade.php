@extends('layouts.admin')

@section('title', 'Settings - Admin')

@section('content')

<div class="admin-page-header">
  <div>
    <h1><i class="fas fa-cog red"></i> Settings</h1>
    <p>Manage your website configuration.</p>
  </div>
</div>

<div class="row g-4">
  <div class="col-lg-6">
    <div class="info-block">
      <h3><i class="fas fa-globe red me-2"></i> General Settings</h3>
      <div class="form-group">
        <label>Site Name</label>
        <input type="text" value="SOUND Group" style="width:100%;padding:12px;background:#0f0f0f;border:1px solid rgba(255,255,255,.1);border-radius:8px;color:#fff;">
      </div>
      <div class="form-group" style="margin-top:15px;">
        <label>Site Tagline</label>
        <input type="text" value="Your Ultimate Entertainment Hub" style="width:100%;padding:12px;background:#0f0f0f;border:1px solid rgba(255,255,255,.1);border-radius:8px;color:#fff;">
      </div>
      <button class="btn-add" style="margin-top:20px;"><i class="fas fa-save"></i> Save Changes</button>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="info-block">
      <h3><i class="fas fa-shield-alt red me-2"></i> Security</h3>
      <div class="form-group">
        <label>Admin Email</label>
        <input type="email" value="admin@soundgroup.com" style="width:100%;padding:12px;background:#0f0f0f;border:1px solid rgba(255,255,255,.1);border-radius:8px;color:#fff;">
      </div>
      <div class="form-group" style="margin-top:15px;">
        <label>Change Password</label>
        <input type="password" placeholder="••••••••" style="width:100%;padding:12px;background:#0f0f0f;border:1px solid rgba(255,255,255,.1);border-radius:8px;color:#fff;">
      </div>
      <button class="btn-add" style="margin-top:20px;"><i class="fas fa-save"></i> Update Password</button>
    </div>
  </div>
</div>

@endsection