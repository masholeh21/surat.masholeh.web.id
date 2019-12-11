<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

        <div class="sidebar-header">
        <div class="sidebar-title">
            <img src="<?php echo base_url('assets/img/Untitled.png') ?>" height="35" alt="FMIPA UII" />
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
        </div>

        <div class="nano">
            <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                <li class="">
                    <a href="<?php echo base_url('kontrol') ?>">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Home</span>
                    </a>
                </li>
                <?php
                if($akses == 2) {
                    if ($jurusan['id'] == '2317' || $jurusan['id'] == '6117' || $jurusan['id'] == '6127'  || $jurusan['id'] == '6137' || $jurusan['id'] == '6147'  || $jurusan['id'] == '6157') {?>
                        <li>
                        <a href="<?= base_url('kontrol/daftarsurat') ?>">

                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>Daftar Surat Dipesan</span>
                        </a>
                        </li>
                        <li class="nav-parent">
                            <a>
                            <i class="fa fa-database" aria-hidden="true"></i>
                            <span>Data Master</span>
                            </a>
                            <ul class="nav nav-children">

                            <li>
                                <a href="<?= base_url('kontrol/master_mahasiswa') ?>">Master Data Mahasiswa</a>
                            </li>
                            </ul>
                        </li>
                    <?php
                    } else {
                        if($jurusan['nama_instansi'] == "Dekanat"){?>
                            <li>
                                <a href="<?= base_url('kontrol/rekapsurat') ?>">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <span>Rekap Surat</span>
                                </a>
                            </li>
                        <?php
                        }else{?>
                            <li>
                                <a href="<?php echo base_url('kontrol/daftarsurat') ?>">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>Daftar Surat Dipesan</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('kontrol/rekapsurat') ?>">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <span>Rekap Surat</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('kontrol/pengaturan') ?>">

                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span>Pengaturan</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                <i class="fa fa-database" aria-hidden="true"></i>
                                <span>Data Master</span>
                                </a>
                                <ul class="nav nav-children">

                                <li>
                                    <a href="<?= base_url('kontrol/masterjurusan') ?>">Master Data Unit</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('kontrol/master_dosen') ?>">Master Data Dosen</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('kontrol/master_pegawai') ?>">Master Data Pegawai</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('kontrol/master_mahasiswa') ?>">Master Data Mahasiswa</a>
                                </li>
                                </ul>
                            </li>
                        <?php
                        } ?>

                    <?php
                    }
                    ?>
                <?php
                } elseif($akses == 1){?>
                    <li>
                    <a href="<?= base_url('kontrol/pesan_surat1') ?>">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>Pesan Surat</span>
                    </a>
                    </li>
                    <li class="">
                    <a href="<?= base_url('kontrol/sejarahpesan') ?>">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span>Sejarah Pesan</span>
                    </a>
                    </li>
                <?php
                }?>
                </ul>
            </nav>
            </div>
        </div>
    </aside>
<!-- end: sidebar -->
