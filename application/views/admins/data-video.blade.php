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
            <h3 class="tile-title">Proposal</h3>
          <table class="table table-hovered table-responsive" id="user">
            <thead>
              <th>No</th>
              <th>Nama tim</th>
              <th>Judul aplikasi</th>
              <th>Kategori Lomba</th>
              <th>Link Video</th>
            </thead>
            <tbody>
              @foreach ($video as $data)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $data->nama_tim }}</td>
                  <td>{{ $data->judul_aplikasi }}</td>
                  <td>{{ $data->nama_kategori }}</td>
                  <td><a target="_blank" href="{{ $data->link_video }}">{{ $data->link_video }}</a></td>
                </tr>    
              @endforeach
            </tbody>
          </table>
        </div>
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