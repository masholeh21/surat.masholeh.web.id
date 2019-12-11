<div class="inner-wrapper">
    <section class="content-body">
        <header class='page-header'>
            <h2>Data Master Mahasiswa</h2>

            <div class='right-wrapper pull-right'>
                <ol class='breadcrumbs'>
                <li>
                    <a href='index.html'>
                    <i class='fa fa-home'></i>
                    </a>
                </li>
                <li><span>Master Mahasiswa / Import Excel</span></li>
                </ol>

                <a class='sidebar-right-toggle' data-open='sidebar-right'><i class='fa fa-chevron-left'></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class='panel'>

            <div class='row'>
            <div class='col-xs-12'>
                <section class='panel'>
                <header class='panel-heading'>
                    <div class='panel-actions'>
                    <a href='#' class='fa fa-caret-down'></a>
                    <a href='#' class='fa fa-times'></a>
                    </div>

                    <h2 class='panel-title'>Import Excel</h2>
                </header>
                <div class='panel-body'>

                <form method='POST' name='myForm' action='<?= base_url('kontrol/excelmhs') ?>' onSubmit='return validateForm()' enctype='multipart/form-data'>

                    <div class='form-group'>
                    <label class='col-sm-3 control-label'>File Excel<span class='required'></span></label>
                    <div class='col-sm-9'>
                        <input type='file' id='filemahasiswa' name='filemahasiswa' />
                    </div>
                    </div>
                </div>
                <footer class='panel-footer'>
                    <div class='row'>
                    <div class='col-sm-12 text-right'>
                        <button class='btn btn-primary'>Import</button>
                    </div>
                    </div>
                </footer>
                </section>
                <script type='text/javascript'>
                    function validateForm()
                    {
                        function hasExtension(inputID, exts) {
                            var fileName = document.getElementById(inputID).value;
                            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
                        }

                        if(!hasExtension('filemahasiswa', ['.xls'])){
                            alert('Hanya file XLS (Excel 2003) yang diijinkan.');
                            return false;
                        }
                    }
                </script>
            </div>
            </div>
        </section>

    </section>
</div>
