<h2>ADMINISTRACION DE LOS USUARIOS</h2>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">


                <table class="table">
                    <tr>
                        <th> Usuario </th>
                        <th> Nombre </th>
                        <th> Apellido </th>
                        <th> Editar </th>
                        <th> Eliminar </th>
                    </tr>
                    <?php
                    foreach ($this->users as $user) {
                        $uid = $user['us_uid'];
                        echo "<tr>";
                        echo "<td><img src='Public/image/" . $user['us_photo'] . "'></td>";


                        echo "<td>" . $user['us_first_name'] . "</td>";
                        echo "<td>" . $user['us_last_name'] . "</td>";

                        echo "<td>
                         <a href='?controller=users&action=frmEdit&uid=$uid'class='btn btn-primary'> Editar  </a> </td>";

                        echo "<td> 
                         <a href='javascript:void(0)' data-id = '$uid'
                          class='btn btn-danger'
                          onclick='deleteusers(this)'> Eliminar </a> 
              
                           </td>";


                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>