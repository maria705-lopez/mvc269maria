<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="pt-3"action="?controller=users&action=editar" method="post" id="frm" onsubmit="return false" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="name" placeholder="Nombre De Usuario" required
                    value="<?php echo $this->users["us_first_name"];?>">
                   
                    </div>
                  <div class="form-group">
                   <input type="text" class="form-control form-control-lg" id="apellido" placeholder="Apellido De Usuario" required
                   value="<?php echo $this->users["us_last_name"];?>">
                  </div>
                 
                  <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" placeholder="Correo Electronico De Usuario"required
                  value="<?php echo $this->users["us_email"];?>">
                  </div>
                 
                <div class="form-group">
                <input type="file" class="form-control form-control-lg" id="photo">
                </div>
                <div class="mt-3 d-grid gap-2">
                   <input type="submit" value="Editar" onclick="EditarUsers()" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">
                    
                  </div>
                  
                  <input type="hidden" name="uid" id="uid" value="<?php echo $this->users["us_uid"];?>">
                </form>
            </div>
        </div>
    </div>
</div>     
