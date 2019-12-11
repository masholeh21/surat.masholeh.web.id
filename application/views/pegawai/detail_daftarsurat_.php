<?php $this->load->view('konfig/tgl_indo') ?>
<div class="inner-wrapper">
    <section role="main" class="content-body">
<!-- Start body -->

    <header class="page-header">
        </ol>
        <h2>Sejarah Pesan</h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
            <li>
                <a href="index.html">
                <i class="fa fa-home"></i>
                </a>
            </li>
            <li>
                <span><?= $m['nama_surat'] ?></span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>
            <h2 class='panel-title'><?= $m['nama_surat'] ?></h2>
            <!-- if ($_GET['id'] == 12) {
                echo "<a href='media.php?module=determinasi'><button type='button' class='mb-xs mt-xs mr-xs btn btn-primary'>Order Surat</button></a>";
            } -->
        </header>

        <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-default">
            <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Tanggal Pesan</th>
                <th>Tanggal Verifikasi</th>
                <th>Tanggal Jadi</th>
                <th>Status Surat</th>
                <th>Opsi</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $no = 0;
                foreach ($detailsurat as $r) {
                    $no++;
                    $tgl = tgl_indo($r['tgl_setujui']);
                    $tgl_jadi = tgl_indo($r['tgl_jadi']);
                    $tgl_pesan = tgl_indo($r['tgl_pesan']);?>

                    <tr class="gradeX">
                        <td><?= $no ?></td>
                        <td><?php echo($r['nim']);
                            if ($r['dikirim'] == 1) { ?>
                                <br><span class='highlight'>Dikirim</span></span>
                            <?php
                        } ?>
                        </td>
                        <td><a href='<?= base_url('kontrol/sejarahpermhs/'.$r['nim']); ?>'><?= $r['nama'] ?><a></td>
                        <td><?= $r['jurusan'] ?></td>
                        <td><?= $tgl_pesan ?></td>
                        <td><?= $tgl ?></td>
                        <td><?= $tgl_jadi ?></td>
                        <td>
                            <?php if ($r['status'] == 0) { ?>
                                Surat baru, silakan diverifikasi <br><a href=<?= base_url('kontrol/lihat_pesanan/'.$r['id_surat']) ?> class='fa fa-eye'> Lihat</a>
                            <?php
                            } elseif ($r['status'] == 1) {?>
                                Surat sudah diverfikasi, diajukan persetujuan ke pimpinan dan cetak surat
                            <?php
                            } elseif ($r['status'] == 3) {?>
                                Surat sudah jadi, bisa diambil mahasiswa
                            <?php
                            } elseif ($r['status'] == 4) {?>
                                Surat telah diambil mahasiswa bersangkutan
                            <?php
                            } else {?>
                                Surat ditolak<br>
                                <a href=<?= base_url('kontrol/v_penolakan/20/'.$r['id_surat']) ?>>Alasan Penolakan..</a>
                            <?php
                            }?>
                        </td>
                        <td>
                            <?php if ($r['status'] == 1) {
                                echo "";
                            }?>
                        </td>
                        <td>
                            <?php if ($r['status'] == 0) {?>
                                <a href="<?= base_url('kontrol/setujui/'.$r['id_surat'].'/20') ?>" class='fa fa-thumbs-up'> Verifikasi</a>
                                <a href="<?= base_url('kontrol/batalkan/'.$r['id_surat'].'/20') ?>" class='fa fa-times-circle'> Tolak</a>
                            <?php } elseif ($r['status'] == 2) {?>
                                <a href="<?= base_url('kontrol/setujui/'.$r['id_surat'].'/20') ?>" class='fa fa-thumbs-up'> Verifikasi</a>
                        <?php }?></td>
                    </tr>
                <?php
            } ?>
            </tbody>
        </table>
        </div>
    </section>
    <!-- End: page -->

<!-- End body -->
    </section>
</div>
