<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}/admin" class="brand-link">
        <img src="{{url('/')}}/assets/admin/dist/img/AdminLTELogo.png"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="{{url('/')}}/admin" class="nav-link">
                        <i class="fab fa-adn" style="font-size: 25px;"></i>
                        <p>
                            Anasayfa
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                     <a href="{{url('/')}}/admin/" class="nav-link">
                         <i class="fas fa-book" style="font-size: 25px;"></i>
                        <p>
                            Ürün İşlemleri
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block;">
                        <li class="nav-item">
                            <a href="{{url('/')}}/admin/urunler" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kitap Listesi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{url('/')}}/admin/mesajlar" class="nav-link">
                        <i class="far fa-comments" style="font-size: 25px;"></i>
                        <p>
                            Müşteri Mesajları
                        </p>
                    </a>
                </li>
                
                <li class="nav-item has-treeview">
                    <a href="{{url('/')}}/admin/settings" class="nav-link">
                        <i class="fas fa-cogs" style="font-size: 25px;"></i>
                        <p>
                            Ayarlar
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
