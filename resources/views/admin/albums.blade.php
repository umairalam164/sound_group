@extends('layouts.admin')

@section('title', 'Manage Albums - Admin')

@section('content')

<div class="admin-page-header">
  <div>
    <h1><i class="fas fa-compact-disc red"></i> Manage Albums</h1>
    <p>Add, edit, or delete albums from your library.</p>
  </div>
  <button class="btn-add"><i class="fas fa-plus"></i> Add New Album</button>
</div>

<div class="data-table table-responsive">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Album Name</th>
        <th>Artist</th>
        <th>Total Songs</th>
        <th>Year</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>Love Songs</td>
        <td>Various Artists</td>
        <td>12</td>
        <td>2024</td>
        <td><span class="badge badge-success">Published</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>002</td>
        <td>Party Hits</td>
        <td>Various Artists</td>
        <td>15</td>
        <td>2024</td>
        <td><span class="badge badge-success">Published</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>003</td>
        <td>Rock Classics</td>
        <td>Various Artists</td>
        <td>10</td>
        <td>2023</td>
        <td><span class="badge badge-warning">Pending</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>004</td>
        <td>Punjabi Vibes</td>
        <td>Various Artists</td>
        <td>14</td>
        <td>2024</td>
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