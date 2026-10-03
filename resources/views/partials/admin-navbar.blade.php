<nav class="admin-navbar">
  <div class="admin-navbar-inner">

    <a href="{{ url('/admin/dashboard') }}" class="admin-brand">
      <i class="fas fa-play-circle"></i>
      SOUND<span class="red">Group</span>
      <span class="admin-tag">Admin</span>
    </a>

    <div class="admin-navbar-right">
      <button class="admin-icon-btn" title="Notifications">
        <i class="fas fa-bell"></i>
        <span class="admin-notif-dot"></span>
      </button>
      <button class="admin-icon-btn" title="Messages">
        <i class="fas fa-envelope"></i>
      </button>
      <div class="admin-user">
        <img src="https://i.pravatar.cc/100?img=68" alt="Admin">
        <span>Admin</span>
      </div>
      <a href="{{ url('/login') }}" class="admin-logout-btn">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </div>

  </div>
</nav>