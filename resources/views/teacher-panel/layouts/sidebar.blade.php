<!-- Sidebar Navigation-->
<nav id="sidebar" class="navbar-dark bg-dark">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="images/admin.png" class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Shivam Singla</h1>
        <p>Teacher</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
      <li class="nav-item active"><a href="{{ url('profile') }}"><i class="bi bi-house-door"></i>Profile</a></li>
      <li><a href="{{ url('course') }}"><i class="bi bi-book"></i>Create Courses</a></li>
      <li><a href="{{ url('performance') }}"><i class="bi bi-building"></i>Student Performance</a></li>
      <li><a href="{{ url('assignment') }}"><i class="bi bi-person"></i>Assignment Review</a></li>
      <li><a href="{{ url('batch') }}"><i class="bi bi-person-check"></i>Batches</a></li>
      <li><a href="{{ url('lecture') }}"><i class="bi bi-chat"></i>Lecture Summary</a></li>
      <li><a href="{{ url('attendance') }}"><i class="bi bi-file-earmark-text"></i>Attendance</a></li>
  </ul>
</nav>
  <!-- Sidebar Navigation end-->