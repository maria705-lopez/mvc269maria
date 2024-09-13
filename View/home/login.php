<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio de sesion</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="Public/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="Public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="Public/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="Public/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="Public/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="Public/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="Public/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="Public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="Public/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="Public/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="Public/image/usuario.png" alt="logo">
                  
                </div>
                <h4>Inicio De Sesion</h4>
                <!-- <h6 class="fw-light">Sign in to continue.</h6>-->
                <form class="pt-3"action="?controller=users&action=validate" id="frm" onsubmit="return false">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="nombreusu" placeholder="Correo">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="contrausu" placeholder="Contraseña">
                  </div>

                  <div class="mt-3 d-grid gap-2">
                   <input class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn" type="submit" onclick="validate()"value="Ingresar" class="boton" >
                </div>


                  <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <div class="mb-2 d-grid gap-2">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="ti-facebook me-2"></i>Connect using facebook </button>
                  </div> -->
                  <div class="text-center mt-4 fw-light"> ¿No Tienes Cuenta Registrate? <a href="?controller=users&action=frmRegistrar" class="text-primary">Registrar</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="Public/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="Public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="Public/assets/js/off-canvas.js"></script>
    <script src="Public/assets/js/template.js"></script>
    <script src="Public/assets/js/settings.js"></script>
    <script src="Public/assets/js/hoverable-collapse.js"></script>
    <script src="Public/assets/js/todolist.js"></script>
    <!-- endinject -->
    <script src="Public/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
