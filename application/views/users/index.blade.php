@extends('partials.app')
@section('title', 'ICT | Dashboard')
@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Pembayaran</h3>
            @if (empty($data->status) || $data->status == 0)
              <div class="alert alert-info">
              Pembayaran lomba bisa di transfer ke rekening di bawah ini
              <ul>
                <!--<li>Bank BCA 8935014596 an: Hafid Rizqifaluthi</li>-->
                <li>Bank BRI 3183-01-031108-53-9  an :Iffatul Izzah </li>
                <li>Atau bisa langsung menghubungi panitia </li>
              </ul>
              </div>
              <a href="{{ base_url('user/konfirmasi-pembayaran') }}" class="btn btn-sm btn-danger mb-2">Konfirmasi Pembayaran</a>
            @else
              <div class="alert alert-info" role="alert">
                Pembayaran telah dikonfirmasi
              </div>
            @endif
            <table class="table table-stripped table-responsive">
              <thead>
                <th>Ketua</th>
                <th>Kategori Lomba</th>
                <th>Judul</th>
                <th>Tim</th>
                <th>Anggota</th>
                <th>Link Video Teaser</th>
                <th>Status Pembayaran</th>
              </thead>
              <tbody>
                <tr>
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->nama_kategori }}</td>
                  <td>{{ $data->judul_aplikasi }}</td>
                  <td>{{ $data->nama_tim }}</td>
                  <td>
                    <li>{{ $data->anggota_1 }}</li>
                    <li>{{ $data->anggota_2 }}</li>
                  </td>
                  <td>{{ $data->link_video }}</td>
                  <td>
                    @if (isset($data->status))
                      {{ $data->status == 0 ? 'menunggu konfirmasi admin' : 'telah dibayar' }}
                    @else
                      menunggu pembayaran
                    @endif
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
@endsection