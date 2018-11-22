
<div class="col-lg-12 mt-2 ">
	<div class="card">
		<div class="card-header"><h3 class="header-title text-primary">Generaci&oacute;n de datos fuente SUNAT</h3></div>
		<div class="card-body">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active show" id="ae-tab" data-toggle="tab" href="#home" role="tab" aria-controls="ae" aria-selected="true"><i class="ti-download"></i>&nbsp;Archivo Fuente</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="fu-tab" data-toggle="tab" href="#FrmUsuario" role="tab" aria-controls="fu" aria-selected="false"><i class="ti-download"></i>&nbsp;FrmUsuario</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="fa-tab" data-toggle="tab" href="#FrmActividad" role="tab" aria-controls="fa" aria-selected="false"><i class="ti-download"></i>&nbsp;FrmActividad</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="mp-tab" data-toggle="tab" href="#MP" role="tab" aria-controls="mp" aria-selected="false">MP</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="mci-tab" data-toggle="tab" href="#MCI" role="tab" aria-controls="mci" aria-selected="false">MCI</a>
				</li>
			</ul>
			<div class="tab-content mt-3" id="myTabContent">
				<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="ae-tab">
					<div class="col-12 mt-2">
						<div class="card border">
							<div class="card-body">
								<h3 class="header-title text-primary">Paso 1</h3>
								<hr />
								<label for="titulo">Generaci&oacute;n de archivos: Frm_FuenteSunat</label>
								<form>
									<div class="form-group">
										<label for="sel1"><strong>1. Seleccionar Nivel:</strong></label>
										<select class="custom-select" id="cboNivel1"> 
											<option value='ae' selected">Actividad Econ&oacute;mica</option>
											<option value='si'>Sector Institucional</option>
										</select>
									</div>
									<div class="form-group">
										<label for="sel1"><strong>2. Seleccionar a&nacute;o:</strong></label>
										<select class="custom-select" id="cboNivel1"> 
											<option value='ae' selected">2016</option>
											<option value='si'></option>
										</select>
									</div>
									<div class="form-group">
										<label for="sel1"><strong>3. Modos de producci&oacute;n:</strong></label>
										<div class="p-3 mb-2 border" id="rb_group">
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
												<label class="custom-control-label" for="customRadioInline1">Modo1_C</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
												<label class="custom-control-label" for="customRadioInline2">Modo1_NC</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input" disabled>
												<label class="custom-control-label" for="customRadioInline2">Modo1_N</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="sel1"><strong>4. Seleccionar listado de actividades:</strong></label>
										<select multiple class="form-control" id="cboItems" name="cboItems">
										</select>
									</div>
									<hr />
									<button type="submit" class="btn btn-primary mt-2 pr-4 pl-4"><i class="ti-loop"></i>&nbsp;Generar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="FrmUsuario" role="tabpanel" aria-labelledby="fu-tab">
					<p>Comming Soon!</p>
				</div>
				<div class="tab-pane fade" id="FrmActividad" role="tabpanel" aria-labelledby="fa-tab"">
					<p>Comming Soon!</p>
				</div>
				<div class="tab-pane fade" id="MP" role="tabpanel" aria-labelledby=""mp-tab">
					<p>Comming Soon!</p>
				</div>
				<div class="tab-pane fade" id="MCI" role="tabpanel" aria-labelledby="mci-tab">
					<p>Comming Soon!</p>
				</div>
			</div>
		</div>
	</div>
</div>
