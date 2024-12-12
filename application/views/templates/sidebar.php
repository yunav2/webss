<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard'); ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TOKO ONLINE</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KATEGORI
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('kategori/Elektronik'); ?>">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Elektronik</span>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('kategori/PakaianPria'); ?>">
                    <i class="fas fa-fw fa-tshirt"></i>
                    <span>Pakaian Pria</span>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('kategori/PakaianWanita'); ?>">
                    <i class="fas fa-fw fa-tshirt"></i>
                    <span>Pakaian Wanita</span>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('kategori/PakaianAnak'); ?>">
                    <i class="fas fa-fw fa-tshirt"></i>
                    <span>Pakaian Anak</span>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('kategori/PeralatanOlahraga'); ?>">
                    <i class="fas fa-fw fa-futbol"></i>
                    <span>Peralatan Olahraga</span>
                </a>
            </li>
             <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-tshirt"></i>
                    <span>Peralatan Olahraga</span>
                </a>
            </li> -->
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        </li>

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php $cart = 'Keranjang Belanja : '.$this->cart->total_items().'items'?>

                                    <?php echo anchor('dashboard/detailCart', $cart) ?>
                                </li>
                            </ul>
                        </div>

                        <div class="topbar-divider d-none d-sm-block"></div>

                                <ul class="na navbar-nav navbar-right">
                                    <?php if($this->session->userdata('username')) {?>
                                        <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?> </div></li>
                                        <li class="ml-2"><?php echo anchor('auth/logout', 'Logout')  ?></li>
                                        <?php } else { ?>
                                            <li><?php echo anchor('auth/login', 'Login'); ?></li>
                                            <?php }?>
                                        </ul>
                        </div>
    </nav>
    <!-- End of Topbar -->
    
    