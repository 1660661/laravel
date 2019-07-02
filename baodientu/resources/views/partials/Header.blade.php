 <!-- ##### Header Area Start ##### -->
 <header class="header-area">

<!-- Top Header Area -->
<div class="top-header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-header-content d-flex align-items-center justify-content-between">
                    <!-- Logo -->
                    <div class="logo" style="height:107px;width:233px;">
                        <a href="/baodientu/home"><img src="{{ URL::asset('/public/img/logoTin!Nguoi.png')}}" alt=""></a>
                    </div>

                    <!-- Login Search Area -->
                    <div class="login-search-area d-flex align-items-center">
                        <!-- Search Form -->
                        <div class="search-form">
                            <form action="/search" method="GET">
                                <input type="Search" name="Search" class="form-control" placeholder="Tìm kiếm">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navbar Area -->
<div class="newspaper-main-menu" id="stickyMenu" style="height: 80px;">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="newspaperNav">

                <!-- Logo -->
                <div class="logo">
                    <a href="#"><img src="{{ URL::asset('/public/img/logoTin!Nguoi.png')}}" alt=""></a>
                </div>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="/baodientu/home">Trang chủ</a></li>
                            @foreach($chuyenmuc as $cm)
                               <li><a href='/baodientu/chuyenmuc/{{$cm->id}}'>{{$cm->TenChuyenMuc}}</a>
                              <ul class='navbar-nav dropdown'>
                               @foreach($chuyenmuccon as $cmc)
                                   @if($cmc['Id_ChuyenMuc']==$cm['id'])
                                    <li><a href='/baodientu/chuyenmuccon/{{$cm->id}}'>{{$cmc->TenChuyenMucCon}}</a></li>
                                    @endif
                                    @endforeach
                               </ul>
                            @endforeach
                            
                                
                            </li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
                <!-- Login Search Area -->
                <div class="login-search-area d-flex align-items-center">
                    <form id="frmLogout" action="/account/logout" method="POST"></form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- Hi, <strong>authUser.HoTen</strong> -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/account/profile">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    Thông tin tài khoản
                                </a>


                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/baiviet/write">
                                    <i class="fa fa-table" aria-hidden="true"></i>
                                    Bài Viết đã đăng
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/baiviet/write/add">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    Thêm Bài Viết
                                </a>
    
                                 <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/admin">
                                    <i class="fa fa-table" aria-hidden="true"></i>
                                     Admin
                                </a>                                
                 
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/baiviet/editor">
                                    <i class="fa fa-table" aria-hidden="true"></i>
                                    Duyệt bài
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/baiviet/editor/history">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    Lịch sử
                                </a>
                   
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript: $('#frmLogout').submit();">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    Đăng Xuất
                                </a>
                            </div>
                        </li>
                    </ul>
            
                    <!-- Login -->
                    <div class="row login" style="width:260px;">
                        <a href="/account/login" class="col-5">Đăng Nhập</a>
                        <a href="/account/register" class="col-7">Tạo Tài Khoản</a>
                    </div>
            
                </div>
                <!-- End Login Search Area -->
            </nav>
        </div>
    </div>
</div>
</header>
<!-- ##### Header Area End ##### -->