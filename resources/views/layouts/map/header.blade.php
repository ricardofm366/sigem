<header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">☰</button>
        <ul class="nav navbar-nav">
            <!--
            <li class="nav-item px-3">
                <a class="nav-link" href="#"><i class="fa fa-file-pdf-o"></i></a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Settings</a>
            </li> -->
        </ul>
        <ul class="nav navbar-nav ml-auto">
            
            <li class="nav-item d-md-down-none">
                <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="pdfButton"><i class="fa fa-file-pdf-o"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <!--<img src="Content/img/avatars/6.jpg" class="img-avatar">-->
                    <span class="d-md-down-none">admin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href=" {{ url('employee-management') }} "><i class="fa fa-lock"></i> Control Panel</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Salir</a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler aside-menu-toggler" type="button">☰</button>
    </header>