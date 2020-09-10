<?php
  include '../Controllers/SQL/consultas_modals_navbarArc_home_submenu.php';
?>


<!-- Modal MENU ARCHIVO-->
<div style="text-align: center;">
<div class="modal fade" id="modal_archivo" tabindex="-1" role="dialog" aria-labelledby="modal_archivoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_archivoLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		MENU A
	  




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal MENU CLIENTES -->
<div class="modal fade" id="modal_clientes" tabindex="-1" role="dialog" aria-labelledby="modal_clientesLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Listado de clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body center">
      <?php
      $a = 0;
      while ($a < count($ArrayClientes)) {
        # code...
      
      ?>
        <div class="row">
          <div class="col">
            <a href="Clientes/<?php echo $a?>.html" type="button" class="btn btn-default">
            <?php echo $ArrayClientes[$a]?>
            </a>
          </div>
        </div>
      <?php
      $a++;
      }
      ?>

        <div class="row">
          <div class="col">
            <a href="Clientes/Formularios/registro.html">
            agregar un nuevo cliente
            </a>            
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>