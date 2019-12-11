<div class="inner-wrapper">
    <section role="main" class="content-body">
        <header class="page-header">
			<h2>Set Margin</h2>
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Daftar Surat</span></li>
					<li><span>Set Margin</span></li>
				</ol>

				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
			</div>
        </header>

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
					<a href="#" class="fa fa-caret-down"></a>
					<a href="#" class="fa fa-times"></a>
				</div>

				<h2 class="panel-title">Set Margin <?= $margin['nama_surat'] ?></h2>
            </header>

            <div class="panel-body">
                <form action="<?= base_url('kontrol/setmargin/'.$margin['id_jenis_surat']) ?>" method="post">
                    <div class='form-group col-sm-6'>
                        <label class='col-sm-4 control-label'>Margin Top (cm)<span class='required'></span></label>
                        <div class='col-sm-8'>
                            <input type='number' min="0" step=".1" name='top' class='form-control' value='<?= $margin['margin_top'] ?>' required/>
                        </div>
                    </div>

                    <div class='form-group col-sm-6'>
                        <label class='col-sm-4 control-label'>Margin Left (cm)<span class='required'></span></label>
                        <div class='col-sm-8'>
                            <input type='number' min="0" step=".1" name='left' class='form-control' value='<?= $margin['margin_left'] ?>' required/>
                        </div>
                    </div>

                    <div class='form-group col-sm-6'>
                        <label class='col-sm-4 control-label'>Margin Bottom (cm)<span class='required'></span></label>
                        <div class='col-sm-8'>
                            <input type='number' min="0" step=".1" name='bottom' class='form-control' value='<?= $margin['margin_bottom'] ?>' required/>
                        </div>
                    </div>

                    <div class='form-group col-sm-6'>
                        <label class='col-sm-4 control-label'>Margin Right (cm)<span class='required'></span></label>
                        <div class='col-sm-8'>
                            <input type='number' min="0" step=".1" name='right' class='form-control' value='<?= $margin['margin_right'] ?>' required/>
                        </div>
                    </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <button class="btn btn-primary">Set Margin</button>
                    </div>
                </div>
            </div>
                </form>
        </section>

    </section>
</div>
