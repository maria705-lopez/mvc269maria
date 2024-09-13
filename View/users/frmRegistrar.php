<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registrar </title>
    
    <link rel="stylesheet" href="Public/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="Public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="Public/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="Public/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="Public/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="Public/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="Public/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="Public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
   
    <link rel="stylesheet" href="Public/assets/css/style.css">
 
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
                  <img src="Public/image/registro.jpg" alt="logo">
                </div>
                <h4>¿Nuevo aquí?</h4>
                <h6 class="fw-light">Registrarse es fácil. Sólo se necesitan unos pocos pasos</h6>
                <form class="pt-3"action="?controller=users&action=Register" method="post" id="frm" onsubmit="return false" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="name" placeholder="Nombre De Usuario" required>
                   
                    </div>
                  <div class="form-group">
                   <input type="text" class="form-control form-control-lg" id="apellido" placeholder="Apellido De Usuario" required>
                  </div>
                 
                  <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" placeholder="Correo Electronico De Usuario" required>
                  </div>
                  <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" placeholder="Contraseña De Usuario" required>
                </div>
                <div class="form-group">
                <input type="file" class="form-control form-control-lg" id="photo" >
                </div>
                <div class="mt-3 d-grid gap-2">
                   <input type="submit" value="Registrar" onclick="registerUsers()" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">
                    
                  </div>
                  <div class="text-center mt-4 fw-light"> ¿Ya tienes una cuenta? <a href="?controller=home&action=main" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
          
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
            </div>
          </footer>
        
        </div>
       
      </div>
   
    </div>
    
    <script src="Public/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="Public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
   
    <script src="Public/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="Public/assets/vendors/progressbar.js/progressbar.min.js"></script>
    
    <script src="Public/assets/js/off-canvas.js"></script>
    <script src="Public/assets/js/template.js"></script>
    <script src="Public/assets/js/settings.js"></script>
    <script src="Public/assets/js/hoverable-collapse.js"></script>
    <script src="Public/assets/js/todolist.js"></script>
    
    <script src="Public/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="Public/assets/js/dashboard.js"></script>
   

    <script src="Public/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>