<?php
require 'includes/admin_data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <!-- Bootstrap CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Animate CSS-->
  <link href="css/animate.css" rel="stylesheet" type="text/css">

  <!-- Fontawesome CSS-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <!-- Main CSS-->
  <link rel="stylesheet" href="css/style.css">
  <!-- Main CSS-->
  <link rel="stylesheet" href="css/admin.css">

  <style>

  </style>
</head>

<body id="contact">

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Project SAFe®</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="logout.php">Sign out</a>
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
                <li class="nav-item"> <a href="admin/create_course.html"><i class="fa fa-plus" aria-hidden="true"></i> Create Course</a> </li>
                <li class="nav-item"> <a href="admin/manage_courses.html"><i class="fa fa-sliders" aria-hidden="true"></i> Manage Courses</a> </li>
              </ul>
            </li>
            <li class="nav-item"> <a href="admin/user.html"><i class="fa fa-users" aria-hidden="true"></i> Users</a> </li>

            <li class="nav-item"><a href="admin/profile.html"><i class="fa fa-male" aria-hidden="true"></i> Manage Profile</a> </li>
            <li class="nav-item"> <a href="create_schedule.html"><i class="fa fa-calendar" aria-hidden="true"></i> Create Schedule</a> </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="list-unstyled SAFe®">
            <li class=""> <a href="logout.php" class="download"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a> </li>
          </ul>
        </div>
      </nav>





      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Welcome <?php echo $username ?></h1>
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



        <div class="container">
          <div class="content">
            <div class="header"> Main content goes here </div>
          </div>

          <article class="main">


          </article>


          <footer>

            &copy; 2030 Minimalistic Website &nbsp;<span class="separator">|</span> Design by <a href="#">Me</a>


          </footer>



        </div>
      </main>
    </div>
  </div>





  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>