<!-- Sidebar Toggle-->
<button class="btn btn-sm tombol-menu" id="sidebarToggle"><i class="fas fa-bars"></i></button>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="image mt-3 mx-auto">
                        <img src="<?= base_url('public/img/jamaluddin.jpg') ?>" alt="" width="50" class="rounded-circle img-thumbnail img-fluid">
                    </div>
                    <div class="row mt-2 mx-auto">
                        <div class="col-4">
                            <a href="" class="text-center"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div class="col-4">
                            <a href="">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </div>
                    </div>

                    <a class="nav-link" href="<?= base_url('home') ?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-fw fa-house"></i></div>
                        Home
                    </a>
                    <a class="nav-link" href="<?= base_url('about') ?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-fw fa-circle-info"></i></div>
                        About Me
                    </a>
                    <a class="nav-link" href="<?= base_url('skills') ?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-fw fa-gears"></i></div>
                        Skills
                    </a>
                    <a class="nav-link" href="<?= base_url('portfolio') ?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-fw fa-folder-open"></i></div>
                        Portfolio
                    </a>

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Welcome to:</div>
                My Portfolio
            </div>
        </nav>
    </div>