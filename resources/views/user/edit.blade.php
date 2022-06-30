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
					<h3 class="panel-title">Editar Usuario</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('user.update',$user->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">

							<h4>Nombre</h4>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control input-sm" value="{{$user->name}}">
								</div>
							</div>

							<h4>Email</h4>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control input-sm" value="{{$user->email}}">
								</div>
							</div>

							<h4>Rol</h4>
							
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<input type="text" name="rol" id="rol" class="form-control input-sm" value="{{$user->rol}}">
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('user.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>
