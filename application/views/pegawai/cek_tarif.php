<div class="inner-wrapper">
    <section class="content-body">
        <header class='page-header'>
            <h2>Cek Tarif</h2>

            <div class='right-wrapper pull-right'>
                <ol class='breadcrumbs'>
                <li>
                    <a href='index.html'>
                    <i class='fa fa-home'></i>
                    </a>
                </li>
                <li><span>Cek Tarif</span></li>
                </ol>

                <a class='sidebar-right-toggle' data-open='sidebar-right'><i class='fa fa-chevron-left'></i></a>
            </div>
        </header>

        <section class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo base_url('user/cost'); ?>" method="GET">
                            <h6 class="title-bar"><i class="fa fa-caret-square-o-right"></i> KOTA ASAL</h6><hr />
                            <div class="form-group">
                                <label for="originprovince">Provinsi</label>
                                <select class="form-control" name="originprovince" id="originprovince" required="" onchange="showOrig(this.value)">
                                    <option value="">- Provinsi -</option>
                                <?php foreach ($province->rajaongkir->results as $prov) { ?>
                                    <option value="<?php echo $prov->province_id; ?>"><?php echo $prov->province; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="origincity">Kota</label>
                                <select class="form-control" name="origincity" id="origincity" required>
                                    <option value="">- Pilih Kota -</option>
                                    <?php foreach ($city->rajaongkir->results as $origincity) { ?>
                                    <option value="<?php echo $origincity->city_id; ?>"><?php echo $origincity->city; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <h6 class="title-bar"><i class="fa fa-caret-square-o-right"></i> KOTA TUJUAN</h6><hr />
                            <div class="form-group">
                                <label for="destinationprovince">Provinsi</label>
                                <select class="form-control" name="destinationprovince" id="destinationprovince" required="" onchange="showDest(this.value)">
                                    <option value="">- Provinsi -</option>
                                <?php foreach ($province->rajaongkir->results as $dest) { ?>
                                    <option value="<?php echo $dest->province_id; ?>"><?php echo $dest->province; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="destinationcity">Kota</label>
                                <select class="form-control" name="destinationcity" id="destinationcity" required>
                                    <option value="">- Pilih Kota -</option>
                                </select>
                            </div>
                            <br />
                            <div class="form-group">
                                <label for="courier">Kurir</label>
                                <select class="form-control" name="courier" id="courier" required="">
                                    <option value="">- Pilih Kurir -</option>
                                    <option value="jne">JNE</option>
                                    <option value="tiki">TIKI</option>
                                    <option value="pos">Pos Indonesia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="weight">Berat (Kg)</label>
                                <input class="form-control" type="number" name="weight" id="weight" required="">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success btn-sm" type="submit" value="CEK ONGKIR">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>
