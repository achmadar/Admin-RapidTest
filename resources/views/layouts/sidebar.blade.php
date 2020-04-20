<div class="sidebar" data-color="red" {{ $hidden ?? '' }}>
  <!--
  Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
  <div class="logo">
    <a href="/home" class="simple-text logo-mini">
      <img src="{{ asset('img/logo.png') }}">
    </a>
    <a href="/home" class="simple-text logo-normal">
      {{ config('app.name', 'Laravel') }}
    </a>
  </div>

  <div class="sidebar-wrapper" id="sidebar-wrapper">

    <ul class="nav">

      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons shopping_shop"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      <li class="@if ($activePage == 'admin') active @endif">
        <a href="{{ route('users.index') }}">
          <i class="now-ui-icons business_badge"></i>
          <p> {{ __("Data Admin") }} </p>
        </a>
      </li>

      <li class="@if ($activePage == 'pasien') active @endif">
        <a href="{{ route('pasien.index') }}">
          <i class="now-ui-icons users_single-02"></i>
          <p> {{ __("Data Pasien") }} </p>
        </a>
      </li>

      <li class="@if ($activePage == 'rumahsakit') active @endif">
        <a href="{{ route('rs.index') }}">
          <i class="now-ui-icons media-2_sound-wave"></i>
          <p>{{ __('List Rumah Sakit') }}</p>
        </a>
      </li>

      <li class="@if ($activePage == 'antrian') active @endif">
        <a href="{{ route('antrian.index') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __("Antrian Rapid Test") }}</p>
        </a>
      </li>     

      <li class="@if ($activePage == 'hasil') active @endif">
        <a href="{{ route('hasil.index') }}">
          <i class="now-ui-icons files_single-copy-04"></i>
          <p>{{ __('Hasil Pemeriksaan') }}</p>
        </a>
      </li>

    </ul>

  </div>

</div>