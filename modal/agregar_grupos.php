<div class="modal fade" id="nuevoGrupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-cm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class='fa fa-file'></i> Nuevo grupo</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div> 
        <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_grupos" name="guardar_grupos">
			<div id="resultados_ajax"></div>
			 	<label>Nombre del grupo</label>
			  <div class="input-group mb-3">

                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="fa fa-users"></span></span>
                  </div>
                  <input type="text" class="form-control" name="grupo" placeholder="Nombre del grupo">
                </div>
                <label>Programa</label>
			  <div class="input-group mb-3">
			  	 <select class="form-control" name="programa" required>
                      <option value="0">--Seleccione programa--</option>
                      <?php
										$grup=mysqli_query($con,"select * from programas");
										while ($rw=mysqli_fetch_array($grup)){
											$id=$rw["id"];
											$programa=$rw["programa"];
											?>
											<option value="<?php echo $id?>"><?php echo $programa?></option>
											<?php
										}
									?>
                    </select>
                </div>
            </div>

		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		  </div>
    </div>
  </div>
</div>