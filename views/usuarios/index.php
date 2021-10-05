 <div class="main">
   <main>
     <div class="card">
       <h2 class="card-title">Listado de usuarios</h2>
       <?php include_once path('/views/layout/message.php'); ?>
       <div class="actions-table">
         <a class="btn btn-primary" href="<?php echo url('/nuevo-usuario') ?>">Nuevo usuario</a>
         <form class="filter">
           <div class="input-group">
             <label for="">Buscar</label>
             <input type="text" id="buscar" name="buscar" value="<?php echo $filter ?>"
               placeholder="Buscar usuario">
           </div>
           <button type="submit" class="btn btn-primary">Buscar</button>
         </form>
       </div>
       <table>
         <thead>
           <tr>
             <th>#</th>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Email</th>
           </tr>
         </thead>
         <tbody>
           <?php foreach($usuarios as $usuario){ ?>
           <tr onclick="showUsuario(<?php echo $usuario['id'] ?>)">
             <td class="w-100"><span class="table-label">#</span><?php echo $usuario['id'] ?></td>
             <td class="w-100"><span class="table-label">Nombre: </span><?php echo $usuario['nombre'] ?></td>
             <td class="w-100"><span class="table-label">Apellido:</span><?php echo $usuario['apellido'] ?></td>
             <td class="w-100"><span class="table-label">Email:</span><?php echo $usuario['email'] ?></td>
           </tr>
           <?php } ?>
         </tbody>
       </table>
     </div>
   </main>
 </div>
 <script type="text/javascript">
   function showUsuario(id) {
     let url = '<?php echo url('/ver-usuario'); ?>'
     window.location.href = `${url}?id=${id}`
   }
 </script>