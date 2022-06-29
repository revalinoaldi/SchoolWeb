 <!-- /.navbar-top-links -->

 <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?= base_url('mapel') ?>"><i class="fa fa-table"></i> Kurikulum</a>

                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?= base_url('guru') ?>"><i class="fa fa-users"></i> Guru</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseSiswa"
                aria-expanded="true" aria-controls="collapseSiswa">
                <i class="fa fa-graduation-cap"></i>
                <span>Siswa</span>
                <i class="navbar-right fa fa-angle-right" ></i>
            </a>
            <ul class="nav-item ">
                <li class="nav-item"> 
                    <a class="nav-link" href="<?= base_url('kelas1') ?>">
                        Kelas 1
                    </a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="<?= base_url('kelas2') ?>">Kelas 2
                    </a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="<?= base_url('kelas3') ?>">Kelas 3
                    </a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="<?= base_url('kelas4') ?>">Kelas 4
                    </a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="<?= base_url('kelas5') ?>">Kelas 5
                    </a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="<?= base_url('kelas6') ?>">Kelas 6
                    </a>
                </li>

            </ul>
                                <!-- <div id="collapseSiswa" class="collapse show" aria-labelledby="headingSiswa"
                                    data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <a class="collapse-item" href="<?= base_url('kelas1') ?>">Kelas 1
                                        </a><br>
                                        <a class="collapse-item" href="<?= base_url('kelas2') ?>">Kelas 2
                                        </a><br>
                                        <a class="collapse-item active" href="<?= base_url('kelas3') ?>">Kelas 3
                                        </a><br>
                                        <a class="collapse-item" href="<?= base_url('kelas4') ?>">Kelas 4
                                        </a><br>
                                        <a class="collapse-item" href="<?= base_url('kelas5') ?>">Kelas 5
                                        </a><br>
                                        <a class="collapse-item" href="<?= base_url('kelas6') ?>">Kelas 6
                                        </a><br>
                                    </div>
                                </div> -->
                            </li>

                            <li>
                                <a href="<?= base_url('pengumuman') ?>"><i class="fa fa-bell fa-fw"></i> Pengumuman</a>
                            </li>

                            <li>
                                <a href="<?= base_url('berita') ?>"><i class="fa fa-newspaper-o fa-fw"></i> Berita</a>
                            </li>

                            <li>
                                <a href="<?= base_url('fasilitas') ?>"><i class="fa fa-university"></i> Fasilitas</a>
                            </li>

                            <li>
                                <a href="<?= base_url('gallery') ?>"><i class="fa fa-image fa-fw"></i> Gallery</a>
                            </li>

                            <li>
                                <a href="<?= base_url('admin/pendaftaran') ?>"><i class="fa fa-file-archive-o fa-fw"></i> Pendaftaran</a>
                            </li>

                            <li>
                                <a href="<?= base_url('admin/setting') ?>"><i class="fa fa-gear fa-fw"></i> Setting</a>
                            </li>

                            <li class="active">
                                <a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header"><?= $title2 ?></h2>


