<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nueva Renta</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('renta.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<h4>ID Película</h4>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="number" name="pelicula_id" id="pelicula_id" class="form-control input-sm" placeholder="Película">
									</div>
								</div>
								<h4>Confirme su ID de usuario</h4>
                                <div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="number" name="user_id" id="user_id" class="form-control input-sm" placeholder="User">
									</div>
								</div>
								<h4>Fecha de registro</h4>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="date" name="f_registro" id="f_registro" class="form-control input-sm" placeholder="Fecha de Registro">
									</div>
								</div>
							</div>
							<div class="row">
								<h4>Fecha de entrega</h4>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="date" name="f_entrega" id="f_entrega" class="form-control input-sm" placeholder="Fecha de Entrega">
									</div>
								</div>
								<h4>Fecha de devolución</h4>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<input type="date" name="f_devolucion" id="f_devolucion" class="form-control input-sm" placeholder="Fecha de Devolución">
									</div>
								</div>
							</div>
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('renta.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>
