<!-- Sidebar Navigation-->
<nav id="sidebar" class="navbar-dark bg-dark">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="images/admin.png" class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Dushyant Kashyap</h1>
        <p>Admin</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
      <li class="nav-item active"><a href="{{ url('/admin-dashboard') }}"><i class="bi bi-house-door"></i>Dashboard</a></li>
      <li><a href="{{ url('course') }}"><i class="bi bi-book"></i>Courses</a></li>
      <li><a href="{{ url('students') }}"><i class="bi bi-person"></i>Students</a></li>
      <li><a href="{{ url('teachers') }}"><i class="bi bi-person-check"></i>Teachers</a></li>
      <li><a href="{{ url('chat') }}"><i class="bi bi-chat"></i>Chat</a></li>
      <li><a href="{{ url('report') }}"><i class="bi bi-file-earmark-text"></i>Reports</a></li>
  </ul>
  
</nav>
  <!-- Sidebar Navigation end-->