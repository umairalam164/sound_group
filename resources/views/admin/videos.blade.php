@extends('layouts.admin')

@section('title', 'Manage Videos - Admin')

@section('content')

<div class="admin-page-header">
  <div>
    <h1><i class="fas fa-video red"></i> Manage Videos</h1>
    <p>Add, edit, or delete videos from your library.</p>
  </div>
  <button class="btn-add"><i class="fas fa-plus"></i> Add New Video</button>
</div>

<div class="data-table table-responsive">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Artist</th>
        <th>Language</th>
        <th>Duration</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>Official Music Video</td>
        <td>Taylor Swift</td>
        <td>English</td>
        <td>4:25</td>
        <td><span class="badge badge-success">Published</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>002</td>
        <td>Live Concert</td>
        <td>Coldplay</td>
        <td>English</td>
        <td>3:50</td>
        <td><span class="badge badge-success">Published</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>003</td>
        <td>Bollywood Hit</td>
        <td>Ranveer Singh</td>
        <td>Hindi</td>
        <td>5:10</td>
        <td><span class="badge badge-warning">Pending</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>004</td>
        <td>Punjabi Song</td>
        <td>AP Dhillon</td>
        <td>Punjabi</td>
        <td>3:15</td>
        <td><span class="badge badge-success">Published</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

@endsection