    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Admin</a>
      </div>
      <div style="color: white;
      padding: 15px 50px 5px 50px;
      float: right;
      font-size: 16px;"> Last access : 15 November 2018 &nbsp; 
      <a class="btn btn-danger square-btn-adjust" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">Logout</a> 
      <form id="logout-form" action="/logout" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </div>
  </nav>
  <!-- /. NAV TOP  -->
  <nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav" id="main-menu">
        <li class="text-center">
          <img src="{{ asset('img/find_user.png') }}" class="user-image img-responsive"/>
        </li>
        <li>
          <a  href="indexadmin.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard </a>
        </li>
        <li>
          <a  href="vendoradmin.html"><i class="fa fa-desktop fa-3x"></i> Vendor </a>
        </li>
        <li>
          <a  href="managemember.html"><i class="fa fa-edit fa-3x"></i> Manage Member </a>
        </li>
        <li>
          <a  href="servicesadmin.html"><i class="fa fa-bar-chart-o fa-3x"></i> Services </a>
        </li>
        <li>
          <a  href="aboutusadmin.html"><i class="fa fa-sitemap fa-3x"></i> About Us  </a>
        </li>
        <li>
          <a class="active-menu"  href="confirmcalendarevent.html"><i class="fa fa-table fa-3x"></i> Confirm Calendar Event </a>
        </li>
      </ul>
    </div>
  </nav>