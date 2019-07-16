<!DOCTYPE html>
<html lang="en">
	<head>
	<title>@yield('title', 'ICT')</title>

	  	@include('partials.header')

	</head>
<body>

			@php $CI = &get_instance(); @endphp

              @if ($CI->session->flashdata('error'))
                <div class="alert alert-danger" role="alert">
                  {!! $CI->session->flashdata('error') !!}
                </div>
              @endif
              
	<section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1> Login</h1>
      </div>
      <div class="login-box">
			
			@php
				$attributes = array('class' => 'login-form');
				echo form_open('login', $attributes);
			@endphp
				<h3 class="login-head">
				<i class="fa fa-lg fa-fw fa-user"></i>Login
				</h3>
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
			        <button type="submit" class="btn btn-secondary btn-block"> Login  </button>
			    </div>  
			    <div class="form-group">
			    	Belum punya akun ?
			    	<a href="{{ base_url('registrasi') }}">
				    	Daftar
			    	</a>
			    </div>    
			                                           
			</form>
			</article> <!-- card-body end .// -->
			
			</section>
		</div> 

	</div>
	@include('partials.scripts')
</body>
</html>