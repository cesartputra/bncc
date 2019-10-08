@extends("guest_view/layout")
@section("judul","Register")
@section("content")
	
	<form class="form-horizontal" method="post" action="{{url('/proses-register')}}">
		{{csrf_field()}}
		<fieldset>

		<!-- Form Name -->
		<legend>Form Registrasi</legend>

		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $err)
						<li>{{$err}}</li>
					@endforeach
				</ul>
			</div>
		@endif

		@if(Session::has("sukses"))
			<div class="alert alert-success">
				{{Session::get("sukses")}}
			</div>
		@endif

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txt_email">Email</label>  
		  <div class="col-md-4">
		  <input id="txt_email" name="txt_email" type="text" placeholder="Email" class="form-control input-md" value="{{old('txt_email')}}">
		    
		  </div>
		</div>

		<!-- Password input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txt_password">Password</label>
		  <div class="col-md-4">
		    <input id="txt_password" name="txt_password" type="password" placeholder="Password" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Password input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txt_ulangi">Ulangi Password</label>
		  <div class="col-md-4">
		    <input id="txt_ulangi" name="txt_ulangi" type="password" placeholder="Ulangi Password" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for=""></label>
		  <div class="col-md-4">
		    <button id="" name="" class="btn btn-primary">Register</button>
		  </div>
		</div>

		</fieldset>
	</form>

	
@endsection