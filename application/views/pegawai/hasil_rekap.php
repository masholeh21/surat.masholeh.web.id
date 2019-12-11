<div class="inner-wrapper">
    <section class="content-body">

        <h2>Rekap Pemesanan Surat</h2>
        <table>
            <tr><td colspan=7>Rekap surat <b>Jurusan <?= $jur ?></b> antara tanggal<b> <?= $awl ?></b> ke <b><?= $akr ?></b></td></tr>
        </table>

        <?php
            // ke 1
            $nama=$surat1[0]['nama_surat'];
            $jumlah_pesan=$surat1[1];
            $jumlah_setujui=$surat1[2];
            $jumlah_ditolak=$surat1[3];
            $jumlah_jadi=$surat1[4];
            $jumlah_ambil=$surat1[5];
            $belum_proses=$surat1[6];
            // ke 2
            $nama2=$surat2[0]['nama_surat'];
            $jumlah_pesan2=$surat2[1];
            $jumlah_setujui2=$surat2[2];
            $jumlah_ditolak2=$surat2[3];
            $jumlah_jadi2=$surat2[4];
            $jumlah_ambil2=$surat2[5];
            $belum_proses2=$surat2[6];
            // ke3
            $nama3=$surat3[0]['nama_surat'];
            $jumlah_pesan3=$surat3[1];
            $jumlah_setujui3=$surat3[2];
            $jumlah_ditolak3=$surat3[3];
            $jumlah_jadi3=$surat3[4];
            $jumlah_ambil3=$surat3[5];
            $belum_proses3=$surat3[6];
            // ke 4
            $nama4=$surat4[0]['nama_surat'];
            $jumlah_pesan4=$surat4[1];
            $jumlah_setujui4=$surat4[2];
            $jumlah_ditolak4=$surat4[3];
            $jumlah_jadi4=$surat4[4];
            $jumlah_ambil4=$surat4[5];
            $belum_proses4=$surat4[6];
            // ke 5
            $nama5=$surat5[0]['nama_surat'];
            $jumlah_pesan5=$surat5[1];
            $jumlah_setujui5=$surat5[2];
            $jumlah_ditolak5=$surat5[3];
            $jumlah_jadi5=$surat5[4];
            $jumlah_ambil5=$surat5[5];
            $belum_proses5=$surat5[6];
            // ke 6
            $nama6=$surat6[0]['nama_surat'];
            $jumlah_pesan6=$surat6[1];
            $jumlah_setujui6=$surat6[2];
            $jumlah_ditolak6=$surat6[3];
            $jumlah_jadi6=$surat6[4];
            $jumlah_ambil6=$surat6[5];
            $belum_proses6=$surat6[6];
            // ke 7
            $nama7=$surat7[0]['nama_surat'];
            $jumlah_pesan7=$surat7[1];
            $jumlah_setujui7=$surat7[2];
            $jumlah_ditolak7=$surat7[3];
            $jumlah_jadi7=$surat7[4];
            $jumlah_ambil7=$surat7[5];
            $belum_proses7=$surat7[6];
            // ke 8
            $nama8=$surat8[0]['nama_surat'];
            $jumlah_pesan8=$surat8[1];
            $jumlah_setujui8=$surat8[2];
            $jumlah_ditolak8=$surat8[3];
            $jumlah_jadi8=$surat8[4];
            $jumlah_ambil8=$surat8[5];
            $belum_proses8=$surat8[6];
            // ke 9
            $nama9=$surat9[0]['nama_surat'];
            $jumlah_pesan9=$surat9[1];
            $jumlah_setujui9=$surat9[2];
            $jumlah_ditolak9=$surat9[3];
            $jumlah_jadi9=$surat9[4];
            $jumlah_ambil9=$surat9[5];
            $belum_proses9=$surat9[6];
            // ke 10
            $nama10=$surat10[0]['nama_surat'];
            $jumlah_pesan10=$surat10[1];
            $jumlah_setujui10=$surat10[2];
            $jumlah_ditolak10=$surat10[3];
            $jumlah_jadi10=$surat10[4];
            $jumlah_ambil10=$surat10[5];
            $belum_proses10=$surat10[6];
            // ke 11
            $nama11=$surat11[0]['nama_surat'];
            $jumlah_pesan11=$surat11[1];
            $jumlah_setujui11=$surat11[2];
            $jumlah_ditolak11=$surat11[3];
            $jumlah_jadi11=$surat11[4];
            $jumlah_ambil11=$surat11[5];
            $belum_proses11=$surat11[6];
            // ke 12
            $nama12=$surat12[0]['nama_surat'];
            $jumlah_pesan12=$surat12[1];
            $jumlah_setujui12=$surat12[2];
            $jumlah_ditolak12=$surat12[3];
            $jumlah_jadi12=$surat12[4];
            $jumlah_ambil12=$surat12[5];
            $belum_proses12=$surat12[6];
            // ke 13
            $nama13=$surat13[0]['nama_surat'];
            $jumlah_pesan13=$surat13[1];
            $jumlah_setujui13=$surat13[2];
            $jumlah_ditolak13=$surat13[3];
            $jumlah_jadi13=$surat13[4];
            $jumlah_ambil13=$surat13[5];
            $belum_proses13=$surat13[6];
            // ke 14
            $nama14=$surat14[0]['nama_surat'];
            $jumlah_pesan14=$surat14[1];
            $jumlah_setujui14=$surat14[2];
            $jumlah_ditolak14=$surat14[3];
            $jumlah_jadi14=$surat14[4];
            $jumlah_ambil14=$surat14[5];
            $belum_proses14=$surat14[6];
            // ke 15
            $nama15=$surat15[0]['nama_surat'];
            $jumlah_pesan15=$surat15[1];
            $jumlah_setujui15=$surat15[2];
            $jumlah_ditolak15=$surat15[3];
            $jumlah_jadi15=$surat15[4];
            $jumlah_ambil15=$surat15[5];
            $belum_proses15=$surat15[6];
            // ke 16
            $nama16=$surat16[0]['nama_surat'];
            $jumlah_pesan16=$surat16[1];
            $jumlah_setujui16=$surat16[2];
            $jumlah_ditolak16=$surat16[3];
            $jumlah_jadi16=$surat16[4];
            $jumlah_ambil16=$surat16[5];
            $belum_proses16=$surat16[6];
            // ke 17
            $nama17=$surat17[0]['nama_surat'];
            $jumlah_pesan17=$surat17[1];
            $jumlah_setujui17=$surat17[2];
            $jumlah_ditolak17=$surat17[3];
            $jumlah_jadi17=$surat17[4];
            $jumlah_ambil17=$surat17[5];
            $belum_proses17=$surat17[6];
            // ke 18
            $nama18=$surat18[0]['nama_surat'];
            $jumlah_pesan18=$surat18[1];
            $jumlah_setujui18=$surat18[2];
            $jumlah_ditolak18=$surat18[3];
            $jumlah_jadi18=$surat18[4];
            $jumlah_ambil18=$surat18[5];
            $belum_proses18=$surat18[6];
            // ke 19
            $nama19=$surat19[0]['nama_surat'];
            $jumlah_pesan19=$surat19[1];
            $jumlah_setujui19=$surat19[2];
            $jumlah_ditolak19=$surat19[3];
            $jumlah_jadi19=$surat19[4];
            $jumlah_ambil19=$surat19[5];
            $belum_proses19=$surat19[6];
            // ke 20
            $nama20=$surat20[0]['nama_surat'];
            $jumlah_pesan20=$surat20[1];
            $jumlah_setujui20=$surat20[2];
            $jumlah_ditolak20=$surat20[3];
            $jumlah_jadi20=$surat20[4];
            $jumlah_ambil20=$surat20[5];
            $belum_proses20=$surat20[6];
            // ke 21
            $nama21=$surat21[0]['nama_surat'];
            $jumlah_pesan21=$surat21[1];
            $jumlah_setujui21=$surat21[2];
            $jumlah_ditolak21=$surat21[3];
            $jumlah_jadi21=$surat21[4];
            $jumlah_ambil21=$surat21[5];
            $belum_proses21=$surat21[6];
        ?>

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
                <span>Rekap Surat</span></li>
            </ol>

            <a class='sidebar-right-toggle' data-open='sidebar-right'><i class='fa fa-chevron-left'></i></a>
            </div>
        </header>

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
                        <th>TOTAL</th>
                        <th>Proses</th>
                        <th>Disetujui</th>
                        <th>Ditolak</th>
                        <th>Jadi</th>
                        <th>Diambil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/1/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Keterangan Berkelakuan Baik</a></td>
                            <td><b><?= $jumlah_pesan ?></b></td>
                            <td><?= $belum_proses ?></td>
                            <td><?= $jumlah_setujui ?></td>
                            <td><?= $jumlah_ditolak ?></td>
                            <td><?= $jumlah_jadi ?></td>
                            <td><?= $jumlah_ambil ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/2/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Pengantar Pembuatan Paspor</a></td>
                            <td><b><?= $jumlah_pesan2 ?></b></td>
                            <td><?= $belum_proses2 ?></td>
                            <td><?= $jumlah_setujui2 ?></td>
                            <td><?= $jumlah_ditolak2 ?></td>
                            <td><?= $jumlah_jadi2 ?></td>
                            <td><?= $jumlah_ambil2 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/3/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Keterangan Menyelesaikan Studi</a></td>
                            <td><b><?= $jumlah_pesan3 ?></b></td>
                            <td><?= $belum_proses3 ?></td>
                            <td><?= $jumlah_setujui3 ?></td>
                            <td><?= $jumlah_ditolak3 ?></td>
                            <td><?= $jumlah_jadi3 ?></td>
                            <td><?= $jumlah_ambil3 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/4/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Permohonan Pembelian Bahan Penelitian</a></td>
                            <td><b><?= $jumlah_pesan4 ?></b></td>
                            <td><?= $belum_proses4 ?></td>
                            <td><?= $jumlah_setujui4 ?></td>
                            <td><?= $jumlah_ditolak4 ?></td>
                            <td><?= $jumlah_jadi4 ?></td>
                            <td><?= $jumlah_ambil4 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/5/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Permohonan Bantuan Bahan Penelitian</a></td>
                            <td><b><?= $jumlah_pesan5 ?></b></td>
                            <td><?= $belum_proses5 ?></td>
                            <td><?= $jumlah_setujui5 ?></td>
                            <td><?= $jumlah_ditolak5 ?></td>
                            <td><?= $jumlah_jadi5 ?></td>
                            <td><?= $jumlah_ambil5 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/6/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Ijin Observasi</a></td>
                            <td><b><?= $jumlah_pesan6 ?></b></td>
                            <td><?= $belum_proses6 ?></td>
                            <td><?= $jumlah_setujui6 ?></td>
                            <td><?= $jumlah_ditolak6 ?></td>
                            <td><?= $jumlah_jadi6 ?></td>
                            <td><?= $jumlah_ambil6 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/7/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Ijin Studi Pendahuluan</a></td>
                            <td><b><?= $jumlah_pesan7 ?></b></td>
                            <td><?= $belum_proses7 ?></td>
                            <td><?= $jumlah_setujui7 ?></td>
                            <td><?= $jumlah_ditolak7 ?></td>
                            <td><?= $jumlah_jadi7 ?></td>
                            <td><?= $jumlah_ambil7 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/8/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Permohonan Ijin Penelitian</a></td>
                            <td><b><?= $jumlah_pesan8 ?></b></td>
                            <td><?= $belum_proses8 ?></td>
                            <td><?= $jumlah_setujui8 ?></td>
                            <td><?= $jumlah_ditolak8 ?></td>
                            <td><?= $jumlah_jadi8 ?></td>
                            <td><?= $jumlah_ambil8 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/9/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Permohonan Ethical Clearance</a></td>
                            <td><b><?= $jumlah_pesan9 ?></b></td>
                            <td><?= $belum_proses9 ?></td>
                            <td><?= $jumlah_setujui9 ?></td>
                            <td><?= $jumlah_ditolak9 ?></td>
                            <td><?= $jumlah_jadi9 ?></td>
                            <td><?= $jumlah_ambil9 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/10/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Pengantar Tugas Akhir</a></td>
                            <td><b><?= $jumlah_pesan10 ?></b></td>
                            <td><?= $belum_proses10 ?></td>
                            <td><?= $jumlah_setujui10 ?></td>
                            <td><?= $jumlah_ditolak10 ?></td>
                            <td><?= $jumlah_jadi10 ?></td>
                            <td><?= $jumlah_ambil10 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/11/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Ijin Peminjaman Laboratorium</a></td>
                            <td><b><?= $jumlah_pesan11 ?></b></td>
                            <td><?= $belum_proses11 ?></td>
                            <td><?= $jumlah_setujui11 ?></td>
                            <td><?= $jumlah_ditolak11 ?></td>
                            <td><?= $jumlah_jadi11 ?></td>
                            <td><?= $jumlah_ambil11 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/13/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Keterangan Aktif Kuliah</a></td>
                            <td><b><?= $jumlah_pesan13 ?></b></td>
                            <td><?= $belum_proses13 ?></td>
                            <td><?= $jumlah_setujui13 ?></td>
                            <td><?= $jumlah_ditolak13 ?></td>
                            <td><?= $jumlah_jadi13 ?></td>
                            <td><?= $jumlah_ambil13 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/14/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Permohonan Ijin Praktik Kerja Lapangan</a></td>
                            <td><b><?= $jumlah_pesan14 ?></b></td>
                            <td><?= $belum_proses14 ?></td>
                            <td><?= $jumlah_setujui14 ?></td>
                            <td><?= $jumlah_ditolak14 ?></td>
                            <td><?= $jumlah_jadi14 ?></td>
                            <td><?= $jumlah_ambil14 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/15/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Keterangan Beasiswa</a></td>
                            <td><b><?= $jumlah_pesan15 ?></b></td>
                            <td><?= $belum_proses15 ?></td>
                            <td><?= $jumlah_setujui15 ?></td>
                            <td><?= $jumlah_ditolak15 ?></td>
                            <td><?= $jumlah_jadi15 ?></td>
                            <td><?= $jumlah_ambil15 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/16/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Keterangan Akreditasi</a></td>
                            <td><b><?= $jumlah_pesan16 ?></b></td>
                            <td><?= $belum_proses16 ?></td>
                            <td><?= $jumlah_setujui16 ?></td>
                            <td><?= $jumlah_ditolak16 ?></td>
                            <td><?= $jumlah_jadi16 ?></td>
                            <td><?= $jumlah_ambil16 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/17/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Ijin Tugas Mata Kuliah</a></td>
                            <td><b><?= $jumlah_pesan17 ?></b></td>
                            <td><?= $belum_proses17 ?></td>
                            <td><?= $jumlah_setujui17 ?></td>
                            <td><?= $jumlah_ditolak17 ?></td>
                            <td><?= $jumlah_jadi17 ?></td>
                            <td><?= $jumlah_ambil17 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/18/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Pengantar Praktik Kerja Lapangan</a></td>
                            <td><b><?= $jumlah_pesan18 ?></b></td>
                            <td><?= $belum_proses18 ?></td>
                            <td><?= $jumlah_setujui18 ?></td>
                            <td><?= $jumlah_ditolak18 ?></td>
                            <td><?= $jumlah_jadi18 ?></td>
                            <td><?= $jumlah_ambil18 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/19/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Pengunduran Diri Praktik Kerja Lapangan</a></td>
                            <td><b><?= $jumlah_pesan19 ?></b></td>
                            <td><?= $belum_proses19 ?></td>
                            <td><?= $jumlah_setujui19 ?></td>
                            <td><?= $jumlah_ditolak19 ?></td>
                            <td><?= $jumlah_jadi19 ?></td>
                            <td><?= $jumlah_ambil19 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/20/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Keterangan Asisten Praktikum</a></td>
                            <td><b><?= $jumlah_pesan20 ?></b></td>
                            <td><?= $belum_proses20 ?></td>
                            <td><?= $jumlah_setujui20 ?></td>
                            <td><?= $jumlah_ditolak20 ?></td>
                            <td><?= $jumlah_jadi20 ?></td>
                            <td><?= $jumlah_ambil20 ?></td>
                        </tr>

                        <tr class=gradeX>
                            <!-- <td><a href=?module=rekapsurat&act=detail_rekap&id=1&a=$tanggal_awal&k=$tanggal_akhir&j=$nama[id]&z=$nama[nama_surat]>Surat Keterangan Berkelakuan Baik</a></td> -->
                            <td><a href="<?= base_url('kontrol/detail_rekap/21/'.$t_awal.'/'.$t_akhir.'/'.$jur) ?>">Surat Permohonan Ijin Determinasi</a></td>
                            <td><b><?= $jumlah_pesan21 ?></b></td>
                            <td><?= $belum_proses21 ?></td>
                            <td><?= $jumlah_setujui21 ?></td>
                            <td><?= $jumlah_ditolak21 ?></td>
                            <td><?= $jumlah_jadi21 ?></td>
                            <td><?= $jumlah_ambil21 ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </section>
</div>
