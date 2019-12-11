<?php $this->load->view('konfig/tgl_indo') ?>
<div class="inner-wrapper">
    <section class="content-body">
<!-- Start: body -->
        <header class="page-header">
            <h2>Sejarah Pesan</h2>
            <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                    <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <span><?=$m['nama_surat']?></span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>
    <!-- Start: Page -->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>
                <h2 class="panel-title"><?=$m['nama_surat']?></h2>
                <?php if($this->uri->segment(3) == 12) : ?>
                    <a href='media.php?module=determinasi'><button type='button' class='mb-xs mt-xs mr-xs btn btn-primary'>Order Surat</button></a>
                <?php endif; ?>
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
                        <?php $no=0; foreach ($detailsurat2 as $r) :
                            $no++;
                            $tgl=tgl_indo($r['tgl_setujui']);
                            $tgl_jadi=tgl_indo($r['tgl_jadi']);
                            $tgl_pesan=tgl_indo($r['tgl_pesan']);?>

                            <tr class="gradeX">
                                <td><?=$no?></td>
                                <td><?php echo $r['nim'];
                                    if($r['dikirim']==1){
                                        echo"<br><span class='highlight'>Dikirim</span></span>";
                                    }
                                ?></td>
                                <td><a href='<?= base_url('kontrol/sejarahpermhs/'.$r['nim']); ?>'><?= $r['nama'] ?></td>
                                <td><?=$r['jurusan']?> </td>
                                <td><?=$tgl_pesan?></td>
                                <td><?=$tgl?></td>
                                <td><?=$tgl_jadi?></td>
                                <td>
                                    <?php if($r['status'] == 0) : ?>
                                        Surat baru, silakan diverifikasi <br><a href=<?= base_url('kontrol/lihat_pesanan/'.$r['id_surat']) ?> class='fa fa-eye'> Lihat</a>
                                    <?php elseif($r['status'] == 1) : ?>
                                        Surat sudah diverfikasi, diajukan persetujuan ke pimpinan dan cetak surat.
                                    <?php elseif($r['status'] == 3) : ?>
                                        Surat sudah jadi, bisa diambil mahasiswa
                                    <?php elseif($r['status'] == 4) : ?>
                                        Surat telah diambil mahasiswa bersangkutan
                                    <?php else: ?>
                                    Surat ditolak<br>
                                        <a href=<?= base_url('kontrol/v_penolakan/'.$r['id_jenis_surat'].'/'.$r['id_surat']) ?>>Alasan Penolakan..</a>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($r['status'] == 1) : ?>
                                        <a href='<?= base_url('kontrol/v_acc/'.$r['id_surat'].'/'.$r['id_jenis_surat']) ?>' class='fa fa-pencil-square-o'>ACC</a>
                                        <?php if($r['persetujuan'] != 0) : ?>
                                            <a href='<?= base_url('kontrol/cetak_surat/'.$r['id_surat']) ?>' target="_new" class='fa fa-print'>Cetak </a>
                                            <a href='<?= base_url('kontrol/sudahjadi/'.$r['id_surat'].'/'.$r['id_jenis_surat']) ?>' class='fa fa-check-circle'>Jadi</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($r['id_jenis_surat'] == 20 AND $r['status'] == 0) : ?>
                                        Sedang dalam proses verifikasi Laboratorium terkait.
                                    <?php else : ?>
                                        <?php if($r['status'] == 0) : ?>
                                            <a href="<?= base_url('kontrol/setujui/'.$r['id_surat'].'/'.$r['id_jenis_surat']) ?>" class='fa fa-thumbs-up'> Setuju</a>
                                            <a href="<?= base_url('kontrol/batalkan/'.$r['id_surat'].'/'.$r['id_jenis_surat']) ?>" class='fa fa-times-circle'> Tolak</a>
                                        <?php elseif($r['status'] == 2) : ?>
                                            <a href="<?= base_url('kontrol/setujui/'.$r['id_surat'].'/'.$r['id_jenis_surat']) ?>" class='fa fa-thumbs-up'> Setuju</a>
                                        <?php elseif($r['status'] == 3) : ?>
                                            <a href="<?= base_url('kontrol/telahdiambil/'.$r['id_surat'].'/'.$r['id_jenis_surat']) ?>" class='fa fa-male'> Ambil</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    <!-- End: Page -->
<!-- End: body -->
    </section>
</div>
