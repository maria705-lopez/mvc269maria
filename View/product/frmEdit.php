<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="pt-3"action="?controller=product&action=editar" method="post" id="frm" onsubmit="return false" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="name" placeholder="Nombre del producto" required
                    value="<?php echo $this->product["pro_nombre"];?>">
                   
                    </div>
                  <div class="form-group">
                   <input type="text" class="form-control form-control-lg" id="price" placeholder="precio" required
                   value="<?php echo $this->product["pro_precio"];?>">
                  </div>
                 
                  <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="Descripcion" placeholder="Descripcion" required
                  value="<?php echo $this->product["pro_descripcion"];?>">
        
                
                  </div>
                 
                <div class="form-group">
                <input type="file" class="form-control form-control-lg" id="photo">
                </div>
                <div class="mt-3 d-grid gap-2">
                   <input type="submit" value="Editar" onclick="EditarProduct()" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">
                    
                  </div>
                  
                  <input type="hidden" name="uid" id="uid" value="<?php echo $this->product["pro_uid"];?>">
                </form>
            </div>
        </div>
    </div>
</div>     