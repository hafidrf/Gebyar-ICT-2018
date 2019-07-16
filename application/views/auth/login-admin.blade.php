<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{ base_url('assets/css/bootstrap.min.css') }}">
</head>
<body>
<div class="d-flex justify-content-center">

		<div class="col-md-6">
			@php $CI = &get_instance(); @endphp

              @if ($CI->session->flashdata('error'))
                <div class="alert alert-danger" role="alert">
                  {!! $CI->session->flashdata('error') !!}
                </div>
              @endif
              
			<div class="card">
			<header class="card-header">
				
				<h4 class="card-title mt-2">Login</h4>
			</header>
			<article class="card-body">
			
			@php
				echo form_open('ict-login');
			@endphp
				
				<div class="form-group">	
					<label>Email</label>
					{!! form_error('email') !!}    
				  	<input type="email" class="form-control {{ has_error('email') }}" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>">
				</div>

				<div class="form-group">
					<label>Password</label>
					{!! form_error('password') !!} 
				    <input class="form-control {{ has_error('password') }}" type="password" name="password">
				</div>
				
			    <div class="form-group">
			        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
			    </div>      
			                                           
			</form>
			</article> <!-- card-body end .// -->
			<div class="border-top card-body text-center">Belum punya akun? <a href="{{ base_url('registrasi') }}">Daftar</a></div>
			</div> <!-- card.// -->
		</div> <!-- col.//-->

	</div>
</body>
</html>