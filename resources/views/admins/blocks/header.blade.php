<!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> -->

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('admins.')}}">Little-Little</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="?controller=profileMember" >
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Thông tin
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Cài đặt
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?controller=logoutAdmin">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Đăng xuất
                        </a>
                    </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="{{route('admins.')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Trang Chủ
                    </a>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        KHÁCH HÀNG
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapse1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admins.customers.lists')}}">Danh Sách</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        LIÊN HỆ
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapse2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admins.contacts.lists')}}">Danh Sách</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        ĐƠN MUA VÉ
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapse3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admins.orders.lists')}}">Danh Sách</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        LOẠI VÉ
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapse4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admins.ticket_types.lists')}}">Danh sách loại vé</a>
                            <a class="nav-link" href="{{route('admins.ticket_types.add')}}">Thêm</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse4">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        SỰ KIỆN
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapse5" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admins.events.lists')}}">Danh sách sự kiện</a>
                            <a class="nav-link" href="{{route('admins.events.add')}}">Thêm</a>
                        </nav>
                    </div>
                </div>
            </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">


