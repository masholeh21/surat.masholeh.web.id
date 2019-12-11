<div class="inner-wrapper">
    <section class="content-body">
        <header class="page-header">
            <h2>Data Master Dosen</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Data Master</span></li>
                    <li><span>Data Master Dosen</span></li>
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

                <h2 class="panel-title">Daftar Dosen FMIPA</h2>
            </header>

            <div class="panel-body">
                <a href="<?= base_url('kontrol/excel_dosen') ?>"><button type="button" class="mb-xs mt-xs mr-xs btn btn-success">Excel Dosen</button></a>
                <a href="<?= base_url('kontrol/tambah_dosen') ?>"><button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Tambah Dosen</button></a>
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Unit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;

                        foreach ($data as $r)
                        {?>
                            <tr class='gradeX'>
                                <td><?=$r['nip']?></td>
                                <td><?=$r['nama']?></td>
                                <td><?=$r['jabatan']?></td>
                                <td class='actions'><a href='<?= base_url('kontrol/detail_dosen/'.$r['nip'])?>'><i class='fa fa-list-alt'> Detail</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </section>
</div>
