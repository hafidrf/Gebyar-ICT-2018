@extends('partials.app')
@section('title', 'ICT | Dashboard')
@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Konfirmasi Pembayaran</h3>

            
              @php $CI = &get_instance(); @endphp

              @if ($CI->session->flashdata('error'))
                <div class="alert alert-danger" role="alert">
                  {!! $CI->session->flashdata('error') !!}
                </div>
              @endif

              @if ($CI->session->flashdata('sukses'))
                <div class="alert alert-success" role="alert">
                  {!! $CI->session->flashdata('sukses') !!}
                </div>
              @endif
            
            @if ($pembayaran == null)
              <form action="<?= base_url('user/konfirmasi-pembayaran/submit') ?>" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <div class="col-sm-12 form-group">
                  <input type="file" class="form-control" name="pembayaran" accept="image/*">
                  <small class="text-muted">
                    Ukuran gambar maksimal 2 MB.
                  </small>
                </div>
                <div class="col-sm-12 form-group">
                  <button type="submit" class="btn btn-primary">Unggah</button>
                </div>
              </form>
            @elseif ($pembayaran->status == 0)
              <div class="alert alert-success" role="alert">
                Menunggu konfirmasi pembayaran dari admin
              </div>
            @elseif ($pembayaran->status == 1)
              <div class="alert alert-success" role="alert">
                Terima kasih, pembayaran telah dikonfirmasi
              </div>
            @endif
          </div>
        </div>
      </div>
    
@endsection