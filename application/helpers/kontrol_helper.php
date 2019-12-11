<?php
function is_logged_in(){
    $ci = get_instance();
    if(!$ci->session->userdata('akses')){
        redirect('auth');
    }

    $akses = $ci->session->userdata('akses');
    $jurusan = $ci->session->userdata('id_jur');
    $instansi = $ci->session->userdata('jur');
    $module  = $ci->uri->segment(2);
    // var_dump($module);die;
    if(($akses == 1) && ($module == "sejarahpermhs" || $module == "lihat_pesanan" || $module == "lihat_ijazah" || $module == "lihat_bukti_bayar" || $module == "getSurat" || $module == "daftarsurat"
    || $module == "detail_daftar_surat_" || $module == "detail_daftarsurat" || $module == "ubah_pesansurat" || $module == "setujui" || $module == "batalkan" || $module == "v_penolakan" || $module == "penolakan"
    || $module == "v_acc" || $module == "acc" || $module == "cetak_surat" || $module == "sudahjadi" || $module == "telahdiambil" || $module == "pengaturan" || $module == "akademik" || $module == "rekening"
    || $module == "masterjurusan" || $module == "tambahunit" || $module == "inputunit" || $module == "editunit" || $module == "perbaruiunit" || $module == "hapusunit" || $module == "master_dosen" || $module == "tambah_dosen"
    || $module == "inputdosen" || $module == "detail_dosen" || $module == "ubah_datadosen" || $module == "master_mahasiswa" || $module == "tambahmhs" || $module == "inputmhas" || $module == "detail_mastermahasiswa"
    || $module == "ubah_status" || $module == "deletemhs" || $module == "master_pegawai" || $module == "tambah_pegawai" || $module == "input_pegawai" || $module == "hapuspegawai" || $module == "rekapsurat"
    || $module == "_getrekap" || $module == "hasil_rekap" || $module == "detail_rekap" || $module == "excel_dosen" || $module == "exceldosen" || $module == "excel_mhs" || $module == "excelmhs"))
    {?>
        <div align="center">
            <h3>Akses Ditolak</h3>
            <h3>Kembali ke <a href="<?= base_url('kontrol')?>">Home</a></h3>
        </div>
    <?php die;
    } elseif(($akses==2 ) && ($jurusan == '2317' || $jurusan == '6117' || $jurusan == '6127'  || $jurusan == '6137' || $jurusan == '6147'  || $jurusan == '6157') &&
    ($module == "detail_dafatarsurat" || $module == "cetak_surat" || $module == "sudahjadi" || $module == "telahdiambil" || $module == "pengaturan"
    || $module == "akademik" || $module == "rekening" || $module == "master_dosen" || $module == "tambah_dosen" || $module == "inputdosen" || $module == "detail_dosen"
    || $module == "ubah_datadosen" || $module == "masterjurusan" || $module == "tambahunit" || $module == "inputunit" || $module == "editunit" || $module == "perbaruiunit"
    || $module == "hapusunit" || $module == "master_pegawai" || $module == "tambah_pegawai" || $module == "inputpegawai" || $module == "hapuspegawai" || $module == "rekapsurat"
    || $module == "_getrekap" || $module == "hasil_rekap" || $module == "detail_rekap" || $module == "excel_dosen" || $module == "exceldosen"))
    {?>
        <div align="center">
            <h3>Akses Ditolak</h3>
            <h3>Kembali ke <a href="<?= base_url('kontrol')?>">Home</a></h3>
        </div>
    <?php die;
    } elseif (($akses==2 ) && ($jurusan != '2317' || $jurusan != '6117' || $jurusan != '6127'  || $jurusan != '6137' || $jurusan != '6147'  || $jurusan != '6157') &&
    ($module == "pesan_surat1" || $module == "pesan_surat2" || $module == "pesan_surat" || $module == "sejarahpesan" || $module == "hapuskeranjang"
    || $module == "v_upload_ijazah" || $module == "upload_ijazah" || $module == "v_upload_bayar" || $module == "upload_bayar"))
    {?>
        <div align="center">
            <h3>Akses Ditolak</h3>
            <h3>Kembali ke <a href="<?= base_url('kontrol')?>">Home</a></h3>
        </div>
    <?php die;
    }elseif (($akses==2) && ($instansi == "Dekanat") && ($module == "sejarahpermhs" || $module == "lihat_pesanan" || $module == "lihat_ijazah" || $module == "lihat_bukti_bayar" || $module == "getSurat" || $module == "daftarsurat"
    || $module == "detail_daftar_surat_" || $module == "detail_daftarsurat" || $module == "ubah_pesansurat" || $module == "setujui" || $module == "batalkan" || $module == "v_penolakan" || $module == "penolakan"
    || $module == "v_acc" || $module == "acc" || $module == "cetak_surat" || $module == "sudahjadi" || $module == "telahdiambil" || $module == "pengaturan" || $module == "akademik" || $module == "rekening"
    || $module == "masterjurusan" || $module == "tambahunit" || $module == "inputunit" || $module == "editunit" || $module == "perbaruiunit" || $module == "hapusunit" || $module == "master_dosen" || $module == "tambah_dosen"
    || $module == "inputdosen" || $module == "detail_dosen" || $module == "ubah_datadosen" || $module == "master_mahasiswa" || $module == "tambahmhs" || $module == "inputmhas" || $module == "detail_mastermahasiswa"
    || $module == "ubah_status" || $module == "deletemhs" || $module == "master_pegawai" || $module == "tambah_pegawai" || $module == "input_pegawai" || $module == "hapuspegawai" || $module == "excel_dosen" || $module == "exceldosen"
    || $module == "excel_mhs" || $module == "excelmhs" || $module == "pesan_surat1" || $module == "pesan_surat2" || $module == "pesan_surat" || $module == "sejarahpesan" || $module == "hapuskeranjang"
    || $module == "v_upload_ijazah" || $module == "upload_ijazah" || $module == "v_upload_bayar" || $module == "upload_bayar")) {?>
        <div align="center">
            <h3>Akses Ditolak</h3>
            <h3>Kembali ke <a href="<?= base_url('kontrol')?>">Home</a></h3>
        </div>
    <?php die;
    }
}
?>
