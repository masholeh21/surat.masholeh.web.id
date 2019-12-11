<?php $this->load->view('konfig/tgl_indo') ?>
<div class="inner-wrapper">
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Sejarah Pesan</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Sejarah Pesan</span></li>
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
                <?= $this->session->flashdata('message'); ?>
                <h2 class="panel-title"></h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Surat</th>
                            <th>Tanggal Pesan</th>
                            <th>Status</th>
                            <th style="width: 100px;">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                            foreach ($surat as $r)
                            {
                                $no++;
                                $tgl=tgl_indo($r['tgl_pesan']);

                                echo"<tr class='gradeX'>
                                    <td class='center hidden-phone'>$no</td>
                                    <td>$r[nama_surat]</td>
                                    <td>$tgl</td>
                                    <td>";
                                            if($r['status']=='0')
                            {
                                echo"Sedang dalam proses verifikasi";
                                                if($r['id_jenis_surat']=='3' AND $r['scan']=='')
                                                {
                                                    echo", silahkan unggah scan ijazah untuk dapat diproses pemesanan";
                                                }
                                                if($r['dikirim']=='1' AND $r['tarif']=='')
                                                {
                                                    echo"<br><b>Biaya pengiriman akan segera diinfo Admin</b>";
                                                }
                                                elseif($r['dikirim']=='1' AND $r['tarif']!='')
                                                {
                                                    if($r['scan_bayar']!='')
                                                    {
                                                        echo" Surat akan segera diproses";
                                                    }
                                                    else
                                                    {
                                                        echo"<br><b>Biaya pengiriman adalah Rp. $r[tarif].</b> Silahkan lampirkan bukti pembayaran";
                                                    }
                                                }
                            }
                            elseif($r['status']=='1')
                            {
                                echo"Surat telah diverifikasi dan dalam proses ACC pimpinan";
                            }
                            elseif($r['status']=='3')
                            {
                                                if($r['dikirim']=='1')
                                                {
                                                    echo"Surat sudah jadi, segera dikirim melalui jasa ekspedisi";
                                                }
                                                else
                                                {
                                                    echo"Surat sudah jadi, silahkan diambil";
                                                }

                            }
                            elseif($r['status']=='4')
                            {
                                                if($r['dikirim']=='1')
                                                {
                                                    $tgl_ambil=tgl_indo($r['tgl_ambil']);
                                    echo"Surat sudah dikirim pada tanggal <b>$tgl_ambil</b>";
                                                }
                                                else
                                                {
                                                    $tgl_ambil=tgl_indo($r['tgl_ambil']);
                                    echo"Surat sudah diambil pada tanggal <b>$tgl_ambil</b>";
                                                }

                            }
                            else
                            {
                                echo"Ditolak,<b> $r[penolakan]</b><br>
                                <a href='pesan_surat1'>Pesan Ulang</a>";
                            }
                                    echo"</td>
                                    <td class='center hidden-phone'>";
                                    if($r['status']=='0')
                                    {
                                            echo"<button class='mb-xs mt-xs mr-xs btn btn-danger' data-href='#'
                                            data-toggle='modal' data-target='#confirm-delete'>Batalkan</button>

                                            <div class='modal fade' id='confirm-delete' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                                <div class='modal-dialog'>
                                                    <div class='modal-content'>
                                                        <div class='modal-body'>
                                                            Apakah Anda Yakin Membatalkan Pesanan Surat?
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <form method='post' action='hapuskeranjang'>
                                                                <input type='hidden' name='id_surat' value='$r[id_surat]'></input>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
                                                                <button type='submit' class='btn btn-danger btn-ok'>Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>";

                                    if($r['id_jenis_surat']=='3')
                                    {
                                        if($r['scan']=='')
                                        {
                                            echo"<a href='v_upload_ijazah/$r[id_surat]' class='mb-xs mt-xs mr-xs btn btn-warning'>Upload Scan Ijazah</a>";
                                        }
                                        elseif($r['scan']!='')
                                        {
                                            echo"<a href='v_upload_ijazah/$r[id_surat]' class='mb-xs mt-xs mr-xs btn btn-warning'>Perbarui Upload Scan Ijazah</a>";
                                        }

                                    }
                                    if($r['dikirim']=='1' AND $r['tarif']!='')
                                    {
                                        if($r['scan_bayar']=='')
                                        {
                                            echo"<a href='v_upload_bayar/$r[id_surat]' class='mb-xs mt-xs mr-xs btn btn-warning'>Upload Bukti Bayar</a></td>";
                                        }
                                        elseif($r['scan_bayar']!='')
                                        {
                                            echo"<a href='v_upload_bayar/$r[id_surat]' class='mb-xs mt-xs mr-xs btn btn-warning'>Perbarui Bukti Bayar</a></td>";
                                        }
                                    }
                                }
                                echo"</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </section>
</div>
