<aside class="admin-sidebar" id="adminSidebar">

  <!-- Dashboard -->
  <div class="admin-sidebar-group">
    <a href="{{ url('/admin/dashboard') }}"
       class="admin-sidebar-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
      <i class="fas fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </div>

  <!-- Content Management -->
  <div class="admin-sidebar-group">
    <h5 class="admin-sidebar-title">Content</h5>

    <a href="{{ url('/admin/music') }}"
       class="admin-sidebar-link {{ request()->is('admin/music') ? 'active' : '' }}">
      <i class="fas fa-music"></i>
      <span>Manage Music</span>
    </a>

    <a href="{{ url('/admin/videos') }}"
       class="admin-sidebar-link {{ request()->is('admin/videos') ? 'active' : '' }}">
      <i class="fas fa-video"></i>
      <span>Manage Videos</span>
    </a>

    <a href="{{ url('/admin/albums') }}"
       class="admin-sidebar-link {{ request()->is('admin/albums') ? 'active' : '' }}">
      <i class="fas fa-compact-disc"></i>
      <span>Manage Albums</span>
    </a>
  </div>

  <!-- Categories -->
  <div class="admin-sidebar-group">
    <h5 class="admin-sidebar-title">Categories</h5>

    <a href="{{ url('/admin/artists') }}"
       class="admin-sidebar-link {{ request()->is('admin/artists') ? 'active' : '' }}">
      <i class="fas fa-user-tie"></i>
      <span>Artists</span>
    </a>

    <a href="{{ url('/admin/genres') }}"
       class="admin-sidebar-link {{ request()->is('admin/genres') ? 'active' : '' }}">
      <i class="fas fa-guitar"></i>
      <span>Genres</span>
    </a>

    <a href="{{ url('/admin/languages') }}"
       class="admin-sidebar-link {{ request()->is('admin/languages') ? 'active' : '' }}">
      <i class="fas fa-language"></i>
      <span>Languages</span>
    </a>
  </div>

  <!-- Users -->
  <div class="admin-sidebar-group">
    <h5 class="admin-sidebar-title">Users</h5>

    <a href="{{ url('/admin/users') }}"
       class="admin-sidebar-link {{ request()->is('admin/users') ? 'active' : '' }}">
      <i class="fas fa-users"></i>
      <span>All Users</span>
    </a>

    <a href="{{ url('/admin/reviews') }}"
       class="admin-sidebar-link {{ request()->is('admin/reviews') ? 'active' : '' }}">
      <i class="fas fa-star"></i>
      <span>Reviews</span>
    </a>
  </div>

  <!-- System -->
  <div class="admin-sidebar-group">
    <h5 class="admin-sidebar-title">System</h5>

    <a href="{{ url('/admin/settings') }}"
       class="admin-sidebar-link {{ request()->is('admin/settings') ? 'active' : '' }}">
      <i class="fas fa-cog"></i>
      <span>Settings</span>
    </a>

    <a href="{{ url('/') }}" class="admin-sidebar-link">
      <i class="fas fa-external-link-alt"></i>
      <span>View Website</span>
    </a>
  </div>

</aside>