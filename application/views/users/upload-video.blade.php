@extends('partials.app')
@section('title', 'ICT | Dashboard')
@section('content')
	@php
		echo form_open(base_url('user/link/submit'))
	@endphp
		<div class="tile">
			<div class="form-row">
					<div class="col form-group">
						<label>Masukkan Link Video</label>  
					  	<input type="text" class="form-control" placeholder="Link Video" name="link_video" value="<?=$user->link_video ?>">
					</div> 
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
          </form>
          </div>
@endsection