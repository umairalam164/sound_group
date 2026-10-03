@extends('layouts.admin')

@section('title', 'Manage Artists - Admin')

@section('content')

<div class="admin-page-header">
  <div>
    <h1><i class="fas fa-user-tie red"></i> Manage Artists</h1>
    <p>Add, edit, or delete artists from your platform.</p>
  </div>
  <button class="btn-add"><i class="fas fa-plus"></i> Add New Artist</button>
</div>

<div class="data-table table-responsive">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Genre</th>
        <th>Total Songs</th>
        <th>Total Albums</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>Arijit Singh</td>
        <td>Bollywood</td>
        <td>320</td>
        <td>45</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>002</td>
        <td>Neha Kakkar</td>
        <td>Pop</td>
        <td>280</td>
        <td>38</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>003</td>
        <td>Diljit Dosanjh</td>
        <td>Punjabi</td>
        <td>250</td>
        <td>30</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>004</td>
        <td>A.R. Rahman</td>
        <td>Classical</td>
        <td>400</td>
        <td>60</td>
        <td><span class="badge badge-warning">Pending</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

@endsection