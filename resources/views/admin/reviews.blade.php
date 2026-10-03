@extends('layouts.admin')

@section('title', 'Manage Reviews - Admin')

@section('content')

<div class="admin-page-header">
  <div>
    <h1><i class="fas fa-star red"></i> Manage Reviews</h1>
    <p>Moderate user reviews and ratings.</p>
  </div>
</div>

<div class="data-table table-responsive">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>User</th>
        <th>Content</th>
        <th>Rating</th>
        <th>Review</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>Rahul Sharma</td>
        <td>Melody of Love</td>
        <td><span style="color:#ffc107;">★★★★★</span></td>
        <td>Beautiful song! Arijit's voice is magical.</td>
        <td><span class="badge badge-success">Approved</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>002</td>
        <td>Priya Verma</td>
        <td>Summer Beats</td>
        <td><span style="color:#ffc107;">★★★★☆</span></td>
        <td>Great melody but lyrics could be better.</td>
        <td><span class="badge badge-success">Approved</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>003</td>
        <td>Amit Kumar</td>
        <td>Rock Anthem</td>
        <td><span style="color:#ffc107;">★★★★★</span></td>
        <td>Masterpiece! Highly recommended.</td>
        <td><span class="badge badge-warning">Pending</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>004</td>
        <td>Sneha Patel</td>
        <td>Desi Vibes</td>
        <td><span style="color:#ffc107;">★★★☆☆</span></td>
        <td>Average track, expected more from Diljit.</td>
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