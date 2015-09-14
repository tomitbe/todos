@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Registreer</h1></div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="modal error">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/register">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<!--
						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>
						-->
						<p>
							<label for="email">E-Mail</label>
							<input type="email" name="email" value="{{ old('email') }}">
						</p>
						<p>
							<label for="password">Password</label><br>
							<input name="password" id="password" type="password">
						</p>
						<p>
							<label for="password">Password</label><br>
							<input name="password_confirmation" id="password_confirmation" type="password">
						</p>


					<p><button type="submit" class="btn btn-primary">
							Registreer
						</button></p>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
