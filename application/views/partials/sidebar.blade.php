    <aside class="app-sidebar">
      <div class="app-sidebar__user">
      <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
        @php $CI = &get_instance(); @endphp
      
          <p class="app-sidebar__user-name">{{ $CI->session->userdata('nama') }}</p>
         
        </div>
      </div>
      <ul class="app-menu">
        
        <li>
        @if ($CI->session->userdata('logged_in') == 'user')        
          <a class="app-menu__item " href="{{ base_url('user/dashboard') }}">
        @else
          <a class="app-menu__item " href="{{ base_url('admin/dashboard') }}">
        @endif
          <i class="app-menu__icon fa fa-dashboard"></i>
          <span class="app-menu__label">Dashboard</span></a>
        </li>

        @if ($CI->session->userdata('logged_in') == 'admin')
        <li>
          <a class="app-menu__item" href="{{ base_url('admin/data-pembayaran') }}">
          <i class="app-menu__icon fa fa-user"></i>
          <span class="app-menu__label">Konfirmasi Pembayaran</span></a>
        </li>

        <li>
          <a class="app-menu__item" href="{{ base_url('admin/data-proposal') }}">
          <i class="app-menu__icon fa fa-book"></i>
          <span class="app-menu__label">Proposal</span></a>
        </li>

        <li>
          <a class="app-menu__item" href="{{ base_url('admin/data-video') }}">
          <i class="app-menu__icon fa fa-book"></i>
          <span class="app-menu__label">Video Teasure</span></a>
        </li>
        @endif
       
        @if ($CI->session->userdata('logged_in') == 'user')
         
        <li>     
          <a class="app-menu__item" href="{{ base_url('user/unggah-proposal') }}">
         <i class="app-menu__icon fa fa-upload"></i>
          <span class="app-menu__label">Unggah Proposal</span></a>
        </li>

        <li>     
          <a class="app-menu__item" href="{{ base_url('user/unggah-video') }}">
         <i class="app-menu__icon fa fa-upload"></i>
          <span class="app-menu__label">Video Teaser</span></a>
        </li>

        <li>     
          <a class="app-menu__item" href="{{ base_url('pengumuman-kelolosan-cdc.pdf') }}">
         <i class="app-menu__icon fa fa-upload"></i>
          <span class="app-menu__label">Pengumuman CDC</span></a>
        </li>
         
        @else

        @endif
      </ul>
    </aside>