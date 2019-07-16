@extends('partials.app')
@section('title', 'ICT-Admin | Dashboard')
@section('content')
      <div class="row">
        <div class="col-md-12">
        @php
          $CI = &get_instance();
        @endphp
        @if ($CI->session->flashdata())
                <div class="alert alert-{{ $CI->session->flashdata('btn') }}" role="alert">
                  {!! $CI->session->flashdata('message') !!}
                </div>
              @endif
          <div class="tile">
            <h3 class="tile-title">Pembayaran</h3>
           
            <table class="table table-hovered table-responsive" id="user">
              <thead>
                <th>No</th>
             
                <th>Ketua</th>
                <th>Kategori Lomba</th>
                <th>Judul</th>
                <th>Nama Tim</th>
                <th>No. Hp</th>
                <th>Status Pembayaran</th>
                <th>Bukti Transfer</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                @forelse ($pembayaran as $user)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  
                  <td>{{ $user->nama }}</td>
                  <td>{{ $user->nama_kategori }}</td>
                  <td>{{ $user->judul_aplikasi }}</td>
                  <td>{{ $user->nama_tim }}</td>
                  <td>{{ $user->no_telp }}</td>
                  <td>
                    @if ($user->status == 0)
                      Belum terkonfirmasi
                    @else
                      Terkonfirmasi
                    @endif
                  </td>
                  <td> 
                    <a target="_blank" href="{{ base_url('uploads/pembayaran/').$user->bukti_transfer }}">Lihat</a> 
                  </td>
                  <td>
                    @if ($user->status == 0)
                      <a href="{{ base_url('admin/konfirmasi-pembayaran/').$user->id_pembayaran }}">
                        Konformasi
                      </a>
                    @else
                      <a href="{{ base_url('admin/batal-konfirmasi-pembayaran/').$user->id_pembayaran }}">
                        Batalkan Konformasi
                      </a>
                    @endif
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="7"> Belum ada peserta terdaftar</td>
                </tr>
                @endforelse

              </tbody>
            </table>
          </div>
        </div>
      </div>
    
@endsection
@section('js')
    <script src="{{ base_url('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ base_url('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#user').DataTable();
      } );
    </script>
@endsection