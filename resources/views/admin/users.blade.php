@extends('layouts.admin')

@section('title', 'Manage Users - Admin')

@section('content')

<div class="admin-page-header">
  <div>
    <h1><i class="fas fa-users red"></i> Manage Users</h1>
    <p>View, edit, or remove registered users.</p>
  </div>
  <button class="btn-add"><i class="fas fa-plus"></i> Add New User</button>
</div>

<div class="data-table table-responsive">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Joined</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>Rahul Sharma</td>
        <td>rahul@example.com</td>
        <td>User</td>
        <td>2024-01-15</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>002</td>
        <td>Priya Verma</td>
        <td>priya@example.com</td>
        <td>User</td>
        <td>2024-02-20</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>003</td>
        <td>Amit Kumar</td>
        <td>amit@example.com</td>
        <td>Admin</td>
        <td>2024-03-10</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>004</td>
        <td>Sneha Patel</td>
        <td>sneha@example.com</td>
        <td>User</td>
        <td>2024-04-05</td>
        <td><span class="badge badge-warning">Suspended</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

@endsection