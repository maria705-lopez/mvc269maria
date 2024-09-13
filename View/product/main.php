<h2>ADMINISTRACION PRODUCTOS</h2>

<a class='btn btn-primary ' href="?controller=product&action=frmRegistrar">Registrar</a> <br> <br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">


                <table class="table">
                    <tr>
                        <th>foto</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripcion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <?php
                    foreach ($this->product as $product) {
                        $uid = $product['pro_uid'];
                        echo "<tr>";
                        echo "<td><img src='Public/image/" . $product['pro_photo'] . "'></td>";


                        echo "<td>" . $product['pro_nombre'] . "</td>";
                        echo "<td>" . $product['pro_precio'] . "</td>";
                        echo "<td>" . $product['pro_descripcion'] . "</td>";

                        echo "<td>
                       <a href='?controller=product&action=frmEdit&uid=$uid'class='btn btn-primary'> Editar  </a> </td>";

                       echo "<td> 
                       <a href='javascript:void(0)' data-id = '$uid'
                        class='btn btn-danger'
                        onclick='deleteproduct(this)'> Eliminar </a> 
            
                         </td>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>