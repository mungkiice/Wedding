<section class="menu cid-rf6tx9RW2P" once="menu" id="menu2-0">
  <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
    <div class="menu-logo">
      <div class="navbar-brand">
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav-dropdown navbar-nav-top-padding" data-app-modern-menu="true"><li class="nav-item">
        <a class="nav-link link text-black display-7" href="/">
        Beranda</a>
      </li>
      @if(Auth::check())
      <li class="nav-item">
        <a class="nav-link link text-black display-7" href="/reservation" target="_blank">Reservasi</a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link link text-black display-7" href="/vendors">Vendor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link text-black display-7" href="/aboutus">Tentang Kami</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link text-black display-7" href="/services">Layanan</a>
      </li>
      @if(Auth::check())
      <li class="nav-item">
        <a class="nav-link link text-black display-7" href="/profile">Profil Saya</a>
      </li>
      @endif
    </ul>
    <div class="navbar-buttons mbr-section-btn">
      @if(Auth::guest())
      <a class="btn btn-sm btn-danger display-7" href="/login">Masuk</a>
      @else
      <a class="btn btn-sm btn-danger display-7" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Keluar</a>
      <form id="logout-form" action="/logout" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      @endif
    </div>
  </div>
</nav>
</section>