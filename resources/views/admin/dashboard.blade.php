@extends('layouts.admin')

@section('title', 'Dashboard - Admin Panel')

@section('content')

<!-- Page Header -->
<div class="admin-page-header">
  <div>
    <h1><i class="fas fa-tachometer-alt red"></i> Dashboard</h1>
    <p>Welcome back, Admin! Here's what's happening today.</p>
  </div>
  <button class="btn-add">
    <i class="fas fa-plus"></i> Add New Content
  </button>
</div>

<!-- Stats -->
<div class="admin-stats">
  <div class="admin-card">
    <i class="fas fa-music"></i>
    <h3>128</h3>
    <p>Total Songs</p>
    <span class="admin-trend up"><i class="fas fa-arrow-up"></i> 12%</span>
  </div>
  <div class="admin-card">
    <i class="fas fa-video"></i>
    <h3>87</h3>
    <p>Total Videos</p>
    <span class="admin-trend up"><i class="fas fa-arrow-up"></i> 8%</span>
  </div>
  <div class="admin-card">
    <i class="fas fa-users"></i>
    <h3>345</h3>
    <p>Total Users</p>
    <span class="admin-trend up"><i class="fas fa-arrow-up"></i> 24%</span>
  </div>
  <div class="admin-card">
    <i class="fas fa-star"></i>
    <h3>1240</h3>
    <p>Total Reviews</p>
    <span class="admin-trend down"><i class="fas fa-arrow-down"></i> 3%</span>
  </div>
</div>

<!-- Manage Content -->
<div class="admin-section-header">
  <h2><i class="fas fa-database red"></i> Recent Content</h2>
  <a href="#" class="admin-view-all">View All <i class="fas fa-arrow-right"></i></a>
</div>

<div class="data-table table-responsive">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Artist</th>
        <th>Type</th>
        <th>Language</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>Melody of Love</td>
        <td>Arijit Singh</td>
        <td>Song</td>
        <td>Hindi</td>
        <td><span class="badge badge-success">Published</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>002</td>
        <td>Summer Beats</td>
        <td>Neha Kakkar</td>
        <td>Song</td>
        <td>Hindi</td>
        <td><span class="badge badge-success">Published</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>003</td>
        <td>Rock Anthem</td>
        <td>Imagine Dragons</td>
        <td>Video</td>
        <td>English</td>
        <td><span class="badge badge-warning">Pending</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>004</td>
        <td>Desi Vibes</td>
        <td>Diljit Dosanjh</td>
        <td>Song</td>
        <td>Punjabi</td>
        <td><span class="badge badge-success">Published</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>005</td>
        <td>Tamil Melody</td>
        <td>Anirudh</td>
        <td>Video</td>
        <td>Tamil</td>
        <td><span class="badge badge-danger">Rejected</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

@endsection