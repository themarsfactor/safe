<?php
session_start();
if (isset($_SESSION['username'])) {
  //admin logged in already
  //therefore do not show login page
  header('Location: create_course.php');
  exit();
}
include  "includes/head.inc.php";

?>


<body id="contact">

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Project SAFe®</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column mx-auto">
            <li class="nav-item active"> <a class=" active" href="#"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a> </li>
            <li class="nav-item"> <a href="#courseSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-book" aria-hidden="true"></i> Course Control</a>
              <ul class="collapse list-unstyled" id="courseSubmenu">
                <li class="nav-item"> <a href="create_course.html"><i class="fa fa-plus" aria-hidden="true"></i> Create Course</a> </li>
                <li class="nav-item"> <a href="manage_courses.html"><i class="fa fa-sliders" aria-hidden="true"></i> Manage Courses</a> </li>
              </ul>
            </li>
            <li class="nav-item"> <a href="user.html"><i class="fa fa-users" aria-hidden="true"></i> Users</a> </li>

            <li class="nav-item"><a href="profile.html"><i class="fa fa-male" aria-hidden="true"></i> Manage Profile</a> </li>
            <li class="nav-item"> <a href="create_schedule.html"><i class="fa fa-calendar" aria-hidden="true"></i> Create Schedule</a> </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="list-unstyled SAFe®">
            <li class=""> <a href="#" class="download"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a> </li>
          </ul>
        </div>
      </nav>





      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>

        <div class="box-header">Create Course</div>
        <div class="formthree ptb-100">
          <div class="contain-fluid">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <form method="POST">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group"> <label class="sr-only">Course Title</label>
                        <input type="text" class="form-control" required="" name="courseName" placeholder="Course Title Here">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group"> <label class="sr-only">Course Code</label>
                        <input type="email" class="form-control" required="" name="courseCode" placeholder="Course Code">
                      </div>
                    </div>
                  </div>
                  <!--end of /.row-->
                  <div class="form-group"> <label class="sr-only">Course Description</label>
                    <textarea class="form-control" required="" rows="7" name="course_msg" placeholder="Course Description"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Create Course</button>
                </form>
              </div> <!-- /.col-md-8 -->
            </div> <!-- /.row -->
          </div> <!-- /.container -->
        </div>

      </main>
    </div>
  </div>









  <script src="../js/jquery-3.5.1.slim.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/scripts.js"></script>
</body>

</html>