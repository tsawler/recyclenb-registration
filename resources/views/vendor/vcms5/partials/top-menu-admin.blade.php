<header>
<div class="top-bar container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <div class="pull-left">
                    &nbsp;&nbsp;
                    <a href='/admin/dashboard' style='color: white'>
                        <i class="fa fa-dashboard"></i> Dashboard</a> &nbsp;&nbsp;
                </div>
                <div class="pull-right">
                    <a href='/admin/logout' style='color: white'>
                        <i class="fa fa-close"></i> {!! Lang::get('vcms.logout') !!}</a> &nbsp;&nbsp;
                </div>

            </div>
        </div>
   </div>
</div>
<!-- Header Top Bar End -->
</header>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">vCMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>