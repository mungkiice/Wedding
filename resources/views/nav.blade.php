<section class="menu cid-r9tYpzg34C" once="menu" id="menu2-0" data-rv-view="395" background-color="black">
  <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color" style="background-color:black">
    <div class="menu-logo">
      <div class="navbar-brand">
        <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="/">SIDORABI WEDDING ORGANIZER</a></span>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
        <li class="nav-item dropdown open">
          <a class="nav-link link dropdown-toggle text-white display-4" href="index.html" data-toggle="dropdown-submenu" aria-expanded="true">Beranda</a>
          <div class="dropdown-menu">
            <a class="dropdown-item text-black display-4" href="/#features18-5">Galeri</a>
            <a class="dropdown-item text-black display-4" href="/#header12-6">Vendor</a>
            <!-- <a class="dropdown-item text-black display-4" href="/#gallery2-b">Promo Vendor</a> -->
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link link text-white display-4" href="/services">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link text-white display-4" href="/aboutus">Tentang Kami</a>
        </li>
        @if(Auth::check())
        <li class="nav-item">
          <a class="nav-link link text-white display-4" href="/reservation">Reservasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link text-white display-4" href="/profile">Profil Saya</a>
        </li>
        @if(Auth::user()->reservations()->where('status', 'perencanaan')->get()->isNotEmpty())
        <li class="nav-item">
          <a class="nav-link link text-white display-4" href="/user/cart">List Vendor Saya</a>
        </li>
        @endif
        @endif
      </ul>
      <div class="navbar-buttons mbr-section-btn">
        @if(Auth::guest())
        <a class="btn btn-sm btn-success display-4" href="/login">Masuk</a>
        @else
        <a class="btn btn-sm btn-success display-4" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Keluar</a>
        <form id="logout-form" action="/logout" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
        @endif
      </div>
    </div>
  </nav>
</section>