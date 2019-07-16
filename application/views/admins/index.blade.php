@extends('partials.app')
@section('title', 'ICT-Admin | Dashboard')
@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Pembayaran</h3>
           
            <table class="table table-stripped table-responsive" id="user">
              <thead>
                <th>No</th>
                <th>Email</th>
                <th>Ketua</th>
                <th>Kategori Lomba</th>
                <th>Judul Aplikasi</th>
                <th>Nama Tim</th>
                <th>No Telp</th>
                <th>Anggota</th>
                
              </thead>
              <tbody>
                @forelse ($pendaftaran as $user)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->nama }}</td>
                  <td>{{ $user->nama_kategori }}</td>
                  <td>{{ $user->judul_aplikasi }}</td>
                  <td>{{ $user->nama_tim }}</td>
                  <td>{{ $user->no_telp }}</td>
                  <td>
                    <ul>
                      <li>{{ $user->anggota_1 }}</li>
                      <li>{{ $user->anggota_2 }}</li>
                    </ul>
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