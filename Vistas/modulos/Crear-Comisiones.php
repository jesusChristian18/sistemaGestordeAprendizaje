<div class="content-wrapper">
	<section class="content">
		<div class="box">
			<div class="box-body">
				<h2>Horarios de la Materia: </h2>
				<h1><b>CSS</b></h1>
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<button class="btn btn-primary btn-md" data-toggle="modal" data-target="#CrearComision">Crear Horarios</button>
						<h2>Horarios: </h2>
						<table class="table table-bordered table-hover table-striped">
							<thead>
								<tr>
									<th>N°</th>
									<th>Cantidad Max. alumnos</th>
									<th>Dias</th>
									<th>Horarios</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>4</td>
									<td>4</td>
									<td>4</td>
									<td>4</td>
									<td>
										<button class="btn btn-primary">Generar PDF</button>
										<button class="btn btn-danger">Borrar</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>




<div class="modal fade" id="CrearComision" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-primary" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header text-center">
        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Registro de Usuarios</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <form method="post">
      <div class="modal-body">
        
        

  
        <div class="md-form mb-5">
                      <input type="number" id="validationServer013" class="form-control validate" name="numero">
                      <label for="validationServer013" data-error="wrong" data-success="right">Numero</label>
        </div>
        <div class="md-form">
 
                      <input type="number" id="inputValidationEx2" class="form-control validate" name="c_maxima">
                      <label for="inputValidationEx2" data-error="wrong" data-success="right">Cantidad Max. Alumnos</label>
            </div>
            <div class="md-form">
 
                      <input type="text" id="inputValidationEx2" class="form-control validate"  name="dias">
                      <label for="inputValidationEx2" data-error="wrong" data-success="right">Dias</label>
            </div>
            <div class="md-form">
 
                      <input  type="text" id="inputValidationEx2" class="form-control validate" name="horarios">
                      <label for="inputValidationEx2" data-error="wrong" data-success="right">Horarios</label>
            </div>
           
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
          <button type="submit" class="btn btn-primary btn-rounded btn-sm my-0">Crear</button>
          <button type="button" class="btn btn-danger btn-rounded btn-sm my-0" data-dismiss="modal">Salir</button>
      </div>
       
       </form>
    </div>
    <!--/.Content-->
  </div>
</div>