  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/storage/{{auth()->user()->photo}}" class="img-circle" style="width: 50px; height: 50px; object-fit: cover;" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Aktif</a>
        </div>
      </div>
      <hr>
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="/admin/reservation">
            <i class="fa fa-file"></i>
            <span>Reservasi</span>
            @if(App\Reservation::where('status', 'belum dikonfirmasi')->count() > 0)
            <span style="background-color: red; padding: 1px 5px; border-radius: 5px; color: white">{{App\Reservation::where('status', 'belum dikonfirmasi')->count()}}</span>
            @endif
          </a>
        </li>
        <li>
          <a href="/admin/vendor">
            <i class="fa fa-home"></i>
            <span>Vendor</span>
          </a>
        </li>
        <li>
          <a href="/admin/gallery">
            <i class="fa fa-image"></i>
            <span>Galeri</span>
          </a>
        </li>
        <li>
          <a href="/admin/service">
            <i class="fa fa-edit"></i> <span>Layanan</span>
          </a>
        </li>
        <li>
          <a href="/admin/promo">
            <i class="fa fa-image"></i> <span>Promo</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>