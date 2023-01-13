<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(''); ?>style/img/logo SI.png">

  <title>Login Administrator</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(''); ?>admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(''); ?>admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color:  #00004d;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->


            <div class="col-lg-18">
              <div class="p-5">
                <div class="text-center">
                  <img src="<?php echo base_url(''); ?>style/img/logi SI.png" width=150px alt="" class="animated infinite bounce">
                  <img src="<?php echo base_url(''); ?>style/img/logo.jpg" width=300px alt="">
                  <h1 class="h4 text-darkgreen mb-4"><strong>HANYA ADMINISTRATOR</strong></h1>
                </div>

                <p><?php echo $this->session->flashdata('msg'); ?></p>

                <form action="<?php echo site_url() . 'admin/login/auth' ?>" method="post">
                  <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Username" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-block btn-flat" style="background-color:  #00004d;">Login</button>
                  <hr>
                </form>

              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(''); ?>admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(''); ?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(''); ?>admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(''); ?>admin/js/sb-admin-2.min.js"></script>

</body>

</html>