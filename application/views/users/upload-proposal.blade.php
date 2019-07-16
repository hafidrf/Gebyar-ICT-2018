@extends('partials.app')
@section('title', 'ICT | Dashboard')
@section('content')
	@if ($user->kategori_id != 1)
		@if ($proposal)
			<div class="alert alert-primary">
				Proposal telah terkirim <a href="{{ base_url('uploads/proposal/').$proposal->proposal }}"><i class="fa fa-file-pdf-o"></i> Cek</a>
			</div>
		@else
			@if ($status == 'unconfirmed')
				<div class="alert alert-primary">
					Menunggu konfirmasi pembayaran dari admin
				</div>
			@elseif ($status == 'confirmed')
				<div class="alert alert-danger">
				Download template proposal 
				<a href="{{ base_url('uploads/proposal/template-proposal.docx') }}">
					<i class="fa fa-file-pdf-o"> Download</i>	
				</a>
				</div>
				<div class="tile">
				@php
					echo form_open_multipart(base_url('user/proposal/submit'));
				@endphp
		               
		                <div class="col-sm-12 form-group">
		                  <input type="file" class="form-control" name="pembayaran">
		                  <small class="text-muted">
		                    Unggah proposal
		                  </small>
		                </div>
		                <div class="col-sm-12 form-group">
		                  <button type="submit" class="btn btn-primary">Unggah</button>
		                </div>
		              </form>
		        </div>
			@elseif ($status == 'not-yet-paid')
			<div class="tile">
				<div class="alert alert-warning">
					Harap melakukan pemabayaran dan melakukan konfirmasi
				</div>
				<a class="btn btn-danger" href="{{ base_url('user/konfirmasi-pembayaran') }}">
					Konfirmasi pembayaran
				</a>
			</div>
			@else
				<div class="alert aler-danger">
					Server error, please contact the administrator
				</div>
			@endif
		@endif	
	@else
		<div class="alert alert-primary">
			Peserta lomba drone race tidak perlu upload proposal
		</div>
	@endif
@endsection