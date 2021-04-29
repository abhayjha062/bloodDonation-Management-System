<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Blood donation Admin Page</title>
</head>
<body>
    <!-- Vertical navbar -->
    <div class="vertical-nav bg-white" id="sidebar">
       <div class="py-4 px-3 mb-4 bg-light">
       <div class="media d-flex align-items-center"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
       <div class="media-body">
        <h4 class="m-0">Abhay Jha</h4>
        <p class="font-weight-light text-muted mb-0">Web developer</p>
       </div>
       </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Admin Pannel</p>

    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
      <a href="index.php" class="nav-link text-dark font-italic bg-light">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Home
      </a>
      </li>
      <li class="nav-item">
       <a href="admin/viewUser.php" class="nav-link text-dark font-italic">
       <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
        Manager User
       </a>
      </li>
      <li class="nav-item">
       <a href="#" class="nav-link text-dark font-italic">
        <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
        User Request
       </a>
      </li>
      <li class="nav-item">
       <a href="#" class="nav-link text-dark font-italic">
        <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
        Admin User
       </a>
      </li>
    </ul>  
    </div>
    <!-- End vertical navbar -->


    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

    <!-- Demo content -->
    <div class="row text-white">
    <div class="col-lg-9">
      
    </div>
    </div>

    </div>
    <!-- End demo content -->

    <script>
       $(function() {
          // Sidebar toggle behavior
          $('#sidebarCollapse').on('click', function() {
          $('#sidebar, #content').toggleClass('active');
          });
        });
    </script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
