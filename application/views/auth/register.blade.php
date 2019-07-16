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
        <h1 class="registrasi-title"> Registrasi</h1>
      </div>
      <div class="login-box">
			
			@php
				$attributes = array('class' => 'login-form');
				echo form_open('registrasi', $attributes);
			@endphp
				<h3 class="login-head">
				<i class="fa fa-lg fa-fw fa-user"></i>Registrasi
				</h3>

				<div class="form-row">
					<div class="col form-group">
						<label>Nama Tim</label>
						{!! form_error('nama_tim') !!}   
					  	<input type="text" class="form-control {{ has_error('nama_tim') }}" placeholder="Nama Tim" name="nama_tim" value="<?php echo set_value('nama_tim'); ?>">
					</div> 
				</div>
				<div class="form-row">
					<div class="col form-group">
						<label>Nama Captain</label>  
						{!! form_error('nama_captain') !!}  
					  	<input type="text" class="form-control {{ has_error('nama_captain') }}" placeholder="Nama Captain" name="nama_captain" value="<?php echo set_value('nama_captain'); ?>">
					</div> 
				</div>
				<div class="form-row">
					<div class="col form-group">
						<label>Nama Anggota 1</label>
						{!! form_error('anggota1') !!}    
					  	<input type="text" class="form-control {{ has_error('anggota1') }}" placeholder="Nama Anggota 1" name="anggota1" value="<?php echo set_value('anggota1'); ?>">
					</div> 
				</div>
				<div class="form-row">
					<div class="col form-group">
						<label>Nama Anggota 2</label> 
						{!! form_error('anggota2') !!}   
					  	<input type="text" class="form-control {{ has_error('anggota2') }}" placeholder="Nama Anggota 2" name="anggota2" value="<?php echo set_value('anggota2'); ?>">
					</div> 
				</div>
				
				<div class="form-group">
					<label>Kategori Lomba</label>
					{!! form_error('kategori_lomba') !!} 
					<select class="form-control select {{ has_error('kategori_lomba') }}" name="kategori_lomba">
						<option>Pilih Kategori</option>
						@foreach ($kategori_lomba as $kategori)
							<option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
						@endforeach
					</select>
					
				</div> 
				<div id="judul_aplikasi" class="form-group" style="display: none;">
					<label>Judul Aplikasi/Film</label>
					{!! form_error('judul_aplikasi') !!}
					<input class="form-control {{ has_error('judul_aplikasi') }}" type="text" name="judul_aplikasi">
				</div>
				
				<div class="form-group">	
					<label>Email</label>
					{!! form_error('email') !!}    
				  	<input type="email" class="form-control {{ has_error('email') }}" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>">
				</div>
				<div class="form-row">
					<div class="col form-group">
						<label>No Telpon</label> 
						{!! form_error('no_telp') !!}   
					  	<input type="text" class="form-control {{ has_error('anggota2') }}" placeholder="No Telpon" name="no_telp" value="<?php echo set_value('no_telp'); ?>">
					</div> 
				</div>

				<div class="form-group">
					<label>Password</label>
					{!! form_error('password') !!} 
				    <input class="form-control {{ has_error('password') }}" type="password" name="password">
				</div>
				<div class="form-group">
					<label>Ulangi Password</label>
					{!! form_error('passconf') !!} 
				    <input class="form-control {{ has_error('passconf') }}" type="password" name="passconf">
				</div> 
			    <div class="form-group">
			        <button type="submit" class="btn btn-secondary btn-block"> Register  </button>
			    </div>      
			                                           
			</form>
			</article> <!-- card-body end .// -->
			<div class="border-top card-body text-center"> 
				Sudah punya akun ?
				<a href="{{ base_url('login') }}">Login</a></div>
			</div>
			</section>
	<script type="text/javascript" src="{{ base_url('assets/js/jquery-3.2.1.slim.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ base_url('assets/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript">
		$(".select").change(function(){
			if (this.value != 1){
				$("#judul_aplikasi").show();
			}else{
				$("#judul_aplikasi").hide();
			}
		});
	</script>
	@include('partials.scripts')
</body>
</html>