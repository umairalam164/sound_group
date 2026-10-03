@extends('layouts.admin')

@section('title', 'Manage Genres - Admin')

@section('content')

<div class="admin-page-header">
  <div>
    <h1><i class="fas fa-guitar red"></i> Manage Genres</h1>
    <p>Add, edit, or delete music genres.</p>
  </div>
  <button class="btn-add"><i class="fas fa-plus"></i> Add New Genre</button>
</div>

<div class="data-table table-responsive">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Genre Name</th>
        <th>Description</th>
        <th>Total Songs</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>Pop</td>
        <td>Popular music genre</td>
        <td>120</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>002</td>
        <td>Rock</td>
        <td>Rock and roll music</td>
        <td>85</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>003</td>
        <td>Classical</td>
        <td>Traditional classical music</td>
        <td>60</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>004</td>
        <td>Hip-Hop</td>
        <td>Urban hip-hop music</td>
        <td>95</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

@endsection