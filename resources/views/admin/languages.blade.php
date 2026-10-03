@extends('layouts.admin')

@section('title', 'Manage Languages - Admin')

@section('content')

<div class="admin-page-header">
  <div>
    <h1><i class="fas fa-language red"></i> Manage Languages</h1>
    <p>Add, edit, or delete languages.</p>
  </div>
  <button class="btn-add"><i class="fas fa-plus"></i> Add New Language</button>
</div>

<div class="data-table table-responsive">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Language</th>
        <th>Code</th>
        <th>Total Songs</th>
        <th>Total Videos</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>001</td>
        <td>Hindi</td>
        <td>HI</td>
        <td>1200</td>
        <td>450</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>002</td>
        <td>English</td>
        <td>EN</td>
        <td>900</td>
        <td>380</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>003</td>
        <td>Punjabi</td>
        <td>PA</td>
        <td>600</td>
        <td>210</td>
        <td><span class="badge badge-success">Active</span></td>
        <td>
          <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
          <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>004</td>
        <td>Tamil</td>
        <td>TA</td>
        <td>450</td>
        <td>180</td>
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