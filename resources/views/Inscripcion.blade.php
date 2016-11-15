@extends('layout')

	@section('header')
		Inscripción
	@stop

	@section('PageTitle')
		Formato de Inscripción
	@stop

	@section('InitialMessage')
		Curso Planeación y Diseño de Instalaciones Hospitalarias
	@stop

	@section('SectionHeading')
		Información Personal
	@stop

	@section('FormContent')
		<div id="app">
			<form id="myForm" name=myForm" method="POST" action="/Submit" class="form-horizontal" data-toggle="validator">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="panel panel-default">
					<ul class="list-group">
						<li class="list-group-item">
							<div class="checkbox">
								<label><input type="checkbox" name="Socio" onclick="showMe('div1','div2')">Pertenezco al Colegio de Ingenieros Biomédicos de México como socio activo</label>
							</div>
						</li>
					</ul>
				</div>

				<div style="display: none;" id="div1">
					<div class="form-group">
    				<label class="control-label col-sm-2" for="NumSocio">Número de socio:</label>
    				<div class="col-sm-10">
      					<input name="NumSocio" class="form-control" id="NumSocio" placeholder="Escriba su número de socio">
    				</div>
    				</div>
  				</div> 

 				<div class="form-group has-feedback">
    				<label class="control-label col-sm-2" for="Nombre">Nombre:</label>
    				<div class="col-sm-10">
      					<input name="Nombre" class="form-control" id="Nombre" placeholder="Escriba su nombre" required>
      					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    					<div class="help-block with-errors"></div>
    				</div>
  				</div> 

  				<div class="form-group has-feedback">
    				<label class="control-label col-sm-2" for="ApPat">Apellido Paterno:</label>
    				<div class="col-sm-10">
      					<input name="ApPat" class="form-control" id="ApPat" placeholder="Escriba su apellido paterno" required>
      					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    					<div class="help-block with-errors"></div>
    				</div>
  				</div>

  				<div class="form-group has-feedback">
    				<label class="control-label col-sm-2" for="ApMat">Apellido Materno:</label>
    				<div class="col-sm-10">
      					<input name="ApMat" class="form-control" id="ApMat" placeholder="Escriba su apellido materno" required>
      					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    					<div class="help-block with-errors"></div>
    				</div>
  				</div>

  				<div class="form-group has-feedback">
    				<label class="control-label col-sm-2" for="FechaNacimiento">Fecha de nacimiento:</label>
    				<div class="col-sm-10">
      					<input name="FechaNacimiento" class="form-control" type="date" id="FechaNacimiento" required>
      					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    					<div class="help-block with-errors"></div>
    				</div>
  				</div>

  				<div class="form-group has-feedback">
    				<label class="control-label col-sm-2" for="Genero">Género:</label>
	   				<div class="col-sm-10">
						<div class="btn-group" data-toggle="buttons">
  							<label class="btn btn-default">
    							<input type="radio" name="Genero" id="Masculino" value="Masculino" required> Masculino
  							</label>
  							<label class="btn btn-default">
    							<input type="radio" name="Genero" id="Femenino" value="Femenino" required> Femenino
  							</label>
						</div>
						<div class="help-block">Eliga una opción</div>
					</div>
				</div>

  				<div class="form-group has-feedback">
    				<label class="control-label col-sm-2" for="Nacionalidad">Nacionalidad:</label>
    				<div class="col-sm-10">
      					<input name="Nacionalidad" class="form-control" id="Nacionalidad" placeholder="Escriba su nacionalidad" required>
      					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    					<div class="help-block with-errors"></div>
    				</div>
  				</div>

  				<div class="form-group has-feedback">
    				<label class="control-label col-sm-2" for="CP">Código Postal:</label>
    				<div class="col-sm-10">
      					<input name="CP" class="form-control" id="CP" placeholder="XXXXX" type="number" data-minlength="5" required>
      					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    					<div class="help-block">Escriba únicamente los 6 dígitos correspondientes a su código postal</div>
    				</div>
  				</div>

  				<div class="form-group has-feedback">
    				<label class="control-label col-sm-2" for="Grado_Academico">Grado académico:</label>
	   				<div class="col-sm-10">
						<div class="btn-group" data-toggle="buttons">
  							<label class="btn btn-default">
    							<input type="radio" name="Grado_Academico" id="Licenciatura" value="Licenciatura" required> Licenciatura
  							</label>
  							<label class="btn btn-default">
    							<input type="radio" name="Grado_Academico" id="Especialidad" value="Especialidad" required> Especialidad
  							</label>
  							<label class="btn btn-default">
    							<input type="radio" name="Grado_Academico" id="Maestria" value="Maestria" required> Maestría
  							</label>
  							<label class="btn btn-default">
    							<input type="radio" name="Grado_Academico" id="Doctorado" value="Doctorado" required> Doctorado
  							</label>
						</div>
						<div class="help-block">Eliga una opción</div>
					</div>
				</div>

  				<div class="form-group has-feedback">
    				<label class="control-label col-sm-2" for="Institucion">Institución donde labora:</label>
    				<div class="col-sm-10">
      					<input name="Institucion" class="form-control" id="Institucion" placeholder="Escriba el nombre completo de la Institución en donde labora">
      					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    					<div class="help-block with-errors"></div>
    				</div>
  				</div>

  				<div class="form-group has-feedback">
    				<label class="control-label col-sm-2" for="Cargo">Cargo:</label>
    				<div class="col-sm-10">
      					<input name="Cargo" class="form-control" id="Cargo" placeholder="Cargo que desempeña en dicha institución">
      					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    					<div class="help-block with-errors"></div>
    				</div>
  				</div>

  				<div class="form-group has-feedback">
    				<label class="control-label col-sm-2" for="Cel">Teléfono celular:</label>
    				<div class="col-sm-10">
      					<input name="Cel" class="form-control" id="Cel" type="number" data-minlength="10" placeholder="Teléfono de contacto">
      					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    					<div class="help-block">Escriba únicamente los 10 dígitos correspondientes a su teléfono celular</div>
    				</div>
  				</div>

  				<div class="form-group has-feedback">
    				<label class="control-label col-sm-2" for="Email">Correo electrónico:</label>
    				<div class="col-sm-10">
      					<input name="Email" class="form-control" id="Email" placeholder="juan@lopez.com" type="email" required>
      					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    					<div class="help-block with-errors"></div>
    				</div>
  				</div>

  				<div style="padding:10px">
							<div class="checkbox">
								<label><input type="checkbox" name="Info_Fiscal" data-toggle="required" onclick="showMe('div1','div2')">Requiero que se emita una factura</label>
							</div>
				</div>

				<div style="display: none;" id="div2">
    				<h1>Datos Fiscales para facturación</h1>

						<div class="form-group has-feedback">
			    			<label class="control-label col-sm-2" for="Nombre_RS">Nombre/Razón social:</label>
			    			<div class="col-sm-10">
			      				<input name="Nombre_RS" class="form-control" id="Nombre_RS" placeholder="Nombre o razón social" data-validate="true">
			    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    							<div class="help-block with-errors"></div>
			    			</div>
			  			</div>

			  			<div class="form-group has-feedback">
			    			<label class="control-label col-sm-2" for="RFC">RFC:</label>
			    			<div class="col-sm-10">
			      				<input name="RFC" class="form-control" id="RFC" placeholder="RFC  del receptor de la factura">
			      				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    							<div class="help-block with-errors"></div>
			    			</div>
			  			</div>

			  			<div class="form-group has-feedback">
			    			<label class="control-label col-sm-2" for="Calle">Calle:</label>
			    			<div class="col-sm-10">
			      				<input name="Calle" class="form-control" id="Calle" placeholder="Calle del domicilio fiscal">
			      				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    							<div class="help-block with-errors"></div>
			    			</div>
			  			</div>

			  			<div class="form-group has-feedback">
			    			<label class="control-label col-sm-2" for="Num_ext">Número exterior:</label>
			    			<div class="col-sm-10">
			      				<input name="Num_ext" class="form-control" id="Num_ext" placeholder="Ej. 5" type="number" data-minlength="1">
			      				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    							<div class="help-block">En caso de no contar con número exterior colocar el número 0 (cero)</div>
			    			</div>
			  			</div>

						<div class="form-group has-feedback">
			    			<label class="control-label col-sm-2" for="Num_int">Número interior:</label>
			    			<div class="col-sm-10">
			      				<input name="Num_int" class="form-control" id="Num_int" placeholder="Ej. 7">
			      				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    							<div class="help-block with-errors"></div>
			    			</div>
			  			</div>

			  			<div class="form-group has-feedback">
			    			<label class="control-label col-sm-2" for="Colonia">Colonia:</label>
			    			<div class="col-sm-10">
			      				<input name="Colonia" class="form-control" id="Colonia" placeholder="Colonia del domicilio fiscal">
			      				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    							<div class="help-block with-errors"></div>
			    			</div>
			  			</div>

			  			<div class="form-group has-feedback">
			    			<label class="control-label col-sm-2" for="Municipio">Municipio:</label>
			    			<div class="col-sm-10">
			      				<input name="Municipio" class="form-control" id="Municipio" placeholder="Delegación o Municipio">
			      				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    							<div class="help-block with-errors"></div>
			    			</div>
			  			</div>

			  			<div class="form-group has-feedback">
			    			<label class="control-label col-sm-2" for="Estado">Estado:</label>
			    			<div class="col-sm-10">
			      				<input name="Estado" class="form-control" id="Estado" placeholder="Ej. Ciudad de México">
			      				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    							<div class="help-block with-errors"></div>
			    			</div>
			  			</div>

			  			<div class="form-group has-feedback">
			    			<label class="control-label col-sm-2" for="CP_fiscal">Código postal:</label>
			    			<div class="col-sm-10">
			      				<input name="CP_fiscal" class="form-control" id="CP_fiscal" placeholder="Ej. 06400" type="number" data-minlength="5">
			      				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    							<div class="help-block">Escriba únicamente los 6 dígitos correspondientes a su código postal</div>
			    			</div>
			  			</div>

			  			<div class="form-group has-feedback">
			    			<label class="control-label col-sm-2" for="Email_fiscal">Correo electrónico:</label>
			    			<div class="col-sm-10">
			      				<input name="Email_fiscal" class="form-control" id="Email_fiscal" type="email" placeholder="juan@lopez.com">
			      				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    							<div class="help-block with-errors"></div>
			    			</div>
			  			</div>
  				</div>

      			<div class="form-group">
      				<div style="padding:15px">
      					<button type="submit" class="btn btn-primary">Mandar respuestas</button>
      				</div>
      			</div>

      		</form>
		</div>

		<!-- JQUERY Date picker  -->
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<!-- Bootstrap validator  -->
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.js" integrity="sha256-qJy3834dnJCEAijqRODkalUs4FxmXpTPeyeYebtg4j8=" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js" integrity="sha256-IxYUmOOk74FUrcx5FEMOHVmTJDb7ZAwnC/ivo/OQGxg=" crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<script>
		    $(document).ready(function () {
		        $().button('toggle');
		    });

		    $(document).ready(function () {
		        $('#myForm').validator();
		    });
		</script>

		<script>
		function showMe(box1,box2){
        
	        var chboxs1 = document.getElementsByName("Socio");
	        var chboxs2 = document.getElementsByName("Info_Fiscal");
	        var vis1 = "none";
	        var vis2 = "none";

	        for(var i=0;i<chboxs1.length;i++) { 
	            if(chboxs1[i].checked){
            		vis1 = "block";
                break;
            	}
        	}
        	for(var i=0;i<chboxs2.length;i++) { 
	            if(chboxs2[i].checked){
            		vis2 = "block";
            		$('#myForm').validator('update');
                break;
            	}
        	}
        document.getElementById(box1).style.display = vis1;
        document.getElementById(box2).style.display = vis2;
    	}

    	$('[data-toggle="required"]').on('change', function (e) {
  			var $target = $(e.target)
    		$("input[id=Nombre_RS]").attr('required', e.target.checked).removeData('bs.validator.errors')
    		$("input[id=RFC]").attr('required', e.target.checked).removeData('bs.validator.errors')
    		$("input[id=Calle]").attr('required', e.target.checked).removeData('bs.validator.errors')
    		$("input[id=Num_ext]").attr('required', e.target.checked).removeData('bs.validator.errors')
    		//$("input[id=Num_int]").attr('required', e.target.checked).removeData('bs.validator.errors')
    		$("input[id=Colonia]").attr('required', e.target.checked).removeData('bs.validator.errors')
    		$("input[id=Municipio]").attr('required', e.target.checked).removeData('bs.validator.errors')
    		$("input[id=Estado]").attr('required', e.target.checked).removeData('bs.validator.errors')
    		$("input[id=CP_fiscal]").attr('required', e.target.checked).removeData('bs.validator.errors')
    		$("input[id=Email_fiscal]").attr('required', e.target.checked).removeData('bs.validator.errors')

    		!e.target.checked && $("input[id=Nombre_RS]").trigger('input')
    		!e.target.checked && $("input[id=RFC]").trigger('input')
    		!e.target.checked && $("input[id=Calle]").trigger('input')
    		!e.target.checked && $("input[id=Num_ext]").trigger('input')
    		//!e.target.checked && $("input[id=Num_int]").trigger('input')
    		!e.target.checked && $("input[id=Colonia]").trigger('input')
    		!e.target.checked && $("input[id=Municipio]").trigger('input')
    		!e.target.checked && $("input[id=Estado]").trigger('input')
    		!e.target.checked && $("input[id=CP_fiscal]").trigger('input')
    		!e.target.checked && $("input[id=Email_fiscal]").trigger('input')

	})


    	</script>


    @stop