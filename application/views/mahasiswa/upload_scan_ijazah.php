<div class="inner-wrapper">
    <section role="main" class="content-body">

        <header class='page-header'>
            <h2>Sejarah Pesan</h2>

            <div class='right-wrapper pull-right'>
                <ol class='breadcrumbs'>
                <li>
                    <a href='index.html'>
                    <i class='fa fa-home'></i>
                    </a>
                </li>
                <li><span>Sejarah Pesan</span></li>
                <li><span>Upload Ijazah</span></li>
                </ol>

                <a class='sidebar-right-toggle' data-open='sidebar-right'><i class='fa fa-chevron-left'></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class='panel'>
            <div class='col-xs-12'>
                <section class='panel'>
                <?= $this->session->flashdata('message'); ?>
                    <?= form_open_multipart('kontrol/upload_ijazah/'.$this->uri->segment('3')) ?>
                        <header class='panel-heading'>
                            <div class='panel-actions'>
                            <a href='#' class='fa fa-caret-down'></a>
                            <a href='#' class='fa fa-times'></a>
                            </div>

                            <h2 class='panel-title'>Upload Ijazah</h2>
                        </header>
                        <div class='panel-body'>
                            <div class='form-group'>
                                <label class='col-md-3 control-label'>Scan Ijazah</label>
                                <div class='col-md-6'>
                                    <div class='fileupload fileupload-new' data-provides='fileupload'>
                                        <div class='input-append'>
                                            <div class='uneditable-input'>
                                                <i class='fa fa-file fileupload-exists'></i>
                                                <span class='fileupload-preview'></span>
                                            </div>
                                            <span class='btn btn-default btn-file'>
                                                <input type='file' name='files' required />
                                                <input type='submit' value='Upload Scan' name='submit'>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </section>
    </section>
</div>
