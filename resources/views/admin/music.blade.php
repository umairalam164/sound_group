@extends('layouts.admin')

@section('title', 'Manage Music - Admin')

@section('content')

<div class="admin-page-header">
  <div>
    <h1><i class="fas fa-music red"></i> Manage Music</h1>
    <p>Add, edit, or delete songs from your library.</p>
  </div>
  <button class="btn-add"><i class="fas fa-plus"></i> Add New Song</button>
</div>

<div class="data-table table-responsive">
  <table>
    <thead>
      <tr>
        <th>ID</th><th>Title</th><th>Artist</th><th>Genre</th>
        <th>Language</th><th>Year</th><th>Status</th><th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td><td>Melody of Love</td><td>Arijit Singh</td>
        <td>Bollywood</td><td>Hindi</td><td>2024</td>
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