<?php $this->load->view('konfig/tgl_indo') ?>
<div class="inner-wrapper">
    <section class="content-body">

        <header class='page-header'>
            <h2>Rekap Surat</h2>

            <div class='right-wrapper pull-right'>
            <ol class='breadcrumbs'>
                <li>
                <a href='index.html'>
                    <i class='fa fa-home'></i>
                </a>
                </li>
                <li>
                <span>Rekap Surat / Detail Rekap</span>
                </li>

            </ol>

            <a class='sidebar-right-toggle' data-open='sidebar-right'><i class='fa fa-chevron-left'></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class='panel'>
        <header class='panel-heading'>
            <div class='panel-actions'>
            <a href='#' class='fa fa-caret-down'></a>
            <a href='#' class='fa fa-times'></a>
            </div>

            <h2 class=panel-title>Rekap Surat</h2>

        </header>

        <div class='panel-body'>
            <table class='table table-bordered table-striped mb-none' id='datatable-default'>
                <thead>
                    <tr>
                    <th>Jenis Surat</th>
                    <th>Jurusan</th>
                    <th>Tanggal Pesan</th>
                    <th>Tanggal Verifikasi</th>
                    <th>Tanggal Jadi</th>
                    <th>Tanggal Ambil</th>
                    <th>Status Surat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $r) :
                        $tgl_pesan=tgl_indo($r['tgl_pesan']);
                        $tgl=tgl_indo($r['tgl_setujui']);
                        $tgl_jadi=tgl_indo($r['tgl_jadi']);
                        $tgl_ambil=tgl_indo($r['tgl_ambil']);
                        ?>
                        <?php if($r['status']==2) : $l="Ditolak";
                          elseif($r['status']==1) : $l="Diterima";
                          elseif($r['status']==3) : $l="Diterima/Jadi";
                          elseif($r['status']==4) : $l="Sudah Diambil";
                          else : $l="Sedang Diproses";?>
                        <?php endif; ?>
                            <tr class="gradeX">
                                <td><?= $r['nama_surat'] ?></td>
                                <td><?= $r['jurusan'] ?></td>
                                <td><?= $tgl_pesan ?></td>
                                <td><?= $tgl ?></td>
                                <td><?= $tgl_jadi ?></td>
                                <td><?= $tgl_ambil ?></td>
                                <td><?= $l ?></td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
                </thead>
            </table>
        </div>
    </section>
</div>
