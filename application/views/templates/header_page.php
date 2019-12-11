<!-- start: header -->
<header class="header">
    <div class="logo-container">
        <a href="https://fit.uii.ac.id/" class="logo">
            <img src="<?php echo base_url('assets/img/uii.png') ?>" height="35" alt="FTI UII" />
        </a>
        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class="header-right">
        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <!-- <?php
                        if ($_SESSION['status_login'] == 'aktif') {
                            echo "<img src=\"$_SESSION[profile]\" class='img-circle' />";
                        }
                        ?> -->

                </figure>
                <div class="profile-info">
                    <span class="name"><?= $user['nama'] ?></span>
                    <?php if ($akses == 1) { ?>
                            <span><font color="white"><?= $user['jurusan'] ?></font></span>
                    <?php
                } else { ?>
                            <span><font color="white"><?= $jurusan['nama_instansi'] ?></font></span>
                    <?php
                } ?>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <a role='menuitem' tabindex='-1' href='<?= base_url('kontrol/profil') ?>'><i class='fa fa-user'></i> My Profile</a>
                        <!-- <a href="#"><i class="fa fa-user"></i>My Profile</a> -->
                    </li>
                    <li>
                        <!-- <a role="menuitem" tabindex="-1" href="../login_google/logout.php"><i class="fa fa-power-off"></i> Logout</a> -->
                        <a href="<?= base_url('auth/logout') ?>"><i class="fa fa-power-off"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
<!-- end: header -->
