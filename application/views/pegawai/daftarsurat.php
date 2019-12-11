<style>
	.float-right {
		float: right;
	}

	.float-left {
		float: left;
	}
</style>

<div class="inner-wrapper">
	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Daftar Pesanan Surat</h2>

			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Daftar Surat</span></li>
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

				<h2 class="panel-title">Daftar Jenis Surat</h2>
			</header>
				<?php
				if ($jurusan['nama_instansi'] == 'Koordinator Lab D3 Analis Kimia' or
					$jurusan['nama_instansi'] == 'Koordinator Lab Statistika' or
					$jurusan['nama_instansi'] == 'Koordinator Lab Kimia' or
					$jurusan['nama_instansi'] == 'Koordinator Lab Farmasi' or
					$jurusan['nama_instansi'] == 'Koordinator Lab Pendidikan Kimia' or
					$jurusan['nama_instansi'] == 'Koordinator Lab Apoteker') {
					?>
					<div class="col-md-4 col-xl-6">
						<section class="panel">
							<div class="panel-body bg-quartenary">
								<div class="widget-summary">
									<div class="widget-summary-col widget-summary-col-icon">
										<div class="summary-icon">
											<i class="fa fa-envelope-o"></i>
										</div>
									</div>
									<div class="widget-summary-col">
										<div class="summary">
											<h4 class="title"> Asisten Praktikum </h4>
											<div class="info">
												<strong class="amount">
												<?= $surat20[0];  ?></strong>
											</div>
										</div>
										<div class="summary-footer">
											<a href="<?= base_url('kontrol/detail_daftarsurat_/' . $surat20[1]['id_jenis_surat']) ?>">(Lihat Surat)</a>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
					<?php
				} else {
				?>
					<div class="panel-body">
						<div class="col-md-12 col-lg-12 col-xl-4">
							<h5 class="text-semibold text-dark text-uppercase mb-md mt-lg"></h5>
							<div class="row">
								<div class="col-md-4 col-xl-6">
									<section class="panel">
										<div class="panel-body bg-tertiary">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon">
														<i class="fa fa-envelope-o"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title"> Ket. Akreditasi </h4>
														<div class="info">
															<strong class="amount"><?=$surat16[0]?></strong>
														</div>
													</div>
													<div class="summary-footer">
													<a href="<?= base_url('kontrol/set_margin/16') ?>" class="float-left">(Set Margin)</a>
														<a href="<?= base_url('kontrol/detail_daftarsurat/16') ?>">(Lihat Surat)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>

								<div class="col-md-4 col-xl-6">
									<section class="panel">
										<div class="panel-body bg-tertiary">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon">
														<i class="fa fa-envelope-o"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title"> Ket. Berkelakuan Baik </h4>
														<div class="info">
															<strong class="amount"><?=$surat1[0]?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a href="<?= base_url('kontrol/set_margin/1') ?>" class="float-left">(Set Margin)</a>
														<a href="<?= base_url('kontrol/detail_daftarsurat/1') ?>">(Lihat Surat)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-4 col-xl-6">
									<section class="panel">
										<div class="panel-body bg-primary">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon">
														<i class="fa fa-envelope-o"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title"> Aktif Kuliah </h4>
														<div class="info">
															<strong class="amount"><?=$surat13[0]?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a href="<?= base_url('kontrol/set_margin/13') ?>" class="float-left">(Set Margin)</a>
														<a href="<?= base_url('kontrol/detail_daftarsurat/13') ?>">(Lihat Surat)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-4 col-xl-6">
									<section class="panel">
										<div class="panel-body bg-primary">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon">
														<i class="fa fa-envelope-o"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">	Keterangan Beasiswa	</h4>
														<div class="info">
															<strong class="amount"><?=$surat15[0]?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a href="<?= base_url('kontrol/set_margin/15') ?>" class="float-left">(Set Margin)</a>
														<a href="<?= base_url('kontrol/detail_daftarsurat/15') ?>">(Lihat Surat)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
                                <div class="col-md-4 col-xl-6">
									<section class="panel">
										<div class="panel-body bg-tertiary">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon">
														<i class="fa fa-envelope-o"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title"> Pengajuan Paspor </h4>
														<div class="info">
															<strong class="amount"><?=$surat2[0]?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a href="<?= base_url('kontrol/set_margin/2') ?>" class="float-left">(Set Margin)</a>
														<a href="<?= base_url('kontrol/detail_daftarsurat/2') ?>">(Lihat Surat)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
                                <div class="col-md-4 col-xl-6">
									<section class="panel">
										<div class="panel-body bg-tertiary">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon">
														<i class="fa fa-envelope-o"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title"> Ket. Menyelesaikan Studi </h4>
														<div class="info">
															<strong class="amount"><?=$surat3[0]?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a href="<?= base_url('kontrol/set_margin/3') ?>" class="float-left">(Set Margin)</a>
														<a href="<?= base_url('kontrol/detail_daftarsurat/3') ?>">(Lihat Surat)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
					<?php
				} ?>
		</section>
	</section>
</div>
