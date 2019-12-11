<?php
//data surat
$jenis_surat=$surat['jenis_surat'];
$thn_akademik=$surat4['thn_akademik'];
$semester=$surat4['semester'];
$jenjang_pendidikan=$surat2['jenjang_pendidikan'];
$lokasi=$surat['lokasi'];
$alamat_penelitian=$surat['alamat_penelitian'];
$kepada=$surat['kepada'];
$no_surat=$surat5['id_surat'];
$tanggal=$surat['tanggal'];
$nama=$surat5['nama'];
$namaUp=strtoupper($nama);
$namaUp=strtoupper($nama);
$namaDown=strtolower($nama);
$namaUC=ucwords($namaDown);
$nim=$surat5['nim'];
$jurusan=$surat2['jurusan'];
$jurusanUp=strtoupper($jurusan);
$akreditasi=$surat2['akreditasi'];
$fakultas="FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM";
$ttd=$surat['jabatan'];
$ttdUp=strtoupper($ttd);
$nip=$surat['nip'];
$nama_ttd=$surat['nama_pimpinan'];
$nama_ttdUp=strtoupper($nama_ttd);
$kode_surat=$surat['kode_surat'];
$kode_surat2=$surat9['kode_surat'];
$tempat_lahir=$surat2['tempat_lahir'];
$tempat_lahirUp=strtoupper($tempat_lahir);
$lahirDown=strtolower($tempat_lahir);
$lahirUC=ucwords($lahirDown);
$tanggal_lahir=$surat2['tanggal_lahir'];
$tanggal_lahirUp=strtoupper($tgl);
$tgl=tgl_indo($tanggal_lahir);
$orangtua=$surat2['orangtua'];
$lampiran=$surat['lampiran'];
$rekan_kp=$surat['rekan_kp'];
$rekan_kpUp=strtoupper($rekan_kp);
$smst_jln=$surat3['smst_jln'];
$judul=$surat3['bla1'];
$ortu=$surat3['nama_ortu'];
$ortuUp=strtoupper($ortu);
$pekerjaan=$surat3['pekerjaan'];
$pekerjaanUp=strtoupper($pekerjaan);
$nip1=$surat9['nip'];
$nip1Up=strtoupper($nip1);
$instansi=$surat3['instansi'];
$instansiUp=strtoupper($instansi);
$awal=$surat4['awal'];
$pangkat=$surat3['pangkat'];
$pangkatUp=strtoupper($pangkat);
$alamat=$surat3['alamat'];
$akhir=$surat4['akhir'];
$no_ijazah=$surat2['no_ijazah'];
$tahun_lulus=$surat2['tahun_lulus'];
$tgl_ijazah=$surat2['tgl_ijazah'];
$tglijazah=tgl_indo($tgl_ijazah);
$bulan=date("m");
$alamat=$surat3['alamat'];
$alamatUp=strtoupper($alamat);
$universitas="UNIVERSITAS ISLAM INDONESIA YOGYAKARTA";

switch ($bulan) {
    case "1":
        $bulan="I";
        break;
    case "2":
        $bulan="II";
        break;
    case "3":
        $bulan="III";
        break;
    case "4":
        $bulan="IV";
        break;
    case "5":
        $bulan="V";
        break;
    case "6":
        $bulan="VI";
        break;
    case "7":
        $bulan="VII";
        break;
    case "8":
        $bulan="VIII";
        break;
    case "(9)":
        $bulan="IX";
        break;
    case "10":
        $bulan="X";
        break;
    case "11":
        $bulan="XI";
        break;
    case "12":
        $bulan="XII";
        break;
}

$nomersurat=$no_surat.'/'.$kode_surat.'/90-Ket.Mhs/'.$kode_surat2.'/'.$bulan.'/'.date("Y");
$this->db->set('nomersurat',$nomersurat, true);
$this->db->where('id_surat', $surat2['id_surat'], true);
$this->db->update('surat');

//deklarasi format kertas
$pdf=new FPDF('P','cm','Letter');
$pdf->Header();
$pdf->AliasNbPages();

//setting margin kertas
$pdf->SetMargins($left,$top,$right);
$pdf->SetAutoPageBreak(true, $bottom);
$pdf->AddPage();

$pdf->SetFont('Times','',12);


//membuat kop tabel
$x=$pdf->GetY();
$pdf->SetY($x+1);

// menuliskan datanya
// $pdf->Ln(2);
$pdf->SetFont('Times','U',14);
$pdf->Cell(16,0.5,'SURAT KETERANGAN AKTIF KULIAH',0,0,'C');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Cell(16,0.5,'Nomor: '.$nomersurat,0,0,'C');
$pdf->Ln(1);
$pdf->Cell(10,0.5,' ',0,0,'L');
$pdf->Cell(6,0.5,'Yogyakarta, '.tgl_indo(date("Y m d")),0,0,'R');
$pdf->Ln(1);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(16,0.5,'Yang bertanda tangan di bawah ini :','J');
$pdf->Ln(0.25);
$pdf->Cell(4,0.5,'Nama',0,0,'L');
$pdf->Cell(8,0.5,': '.$nama_ttdUp,0,1, 'L');
$pdf->Cell(4,0.5,'Jabatan',0,0,'L');
$pdf->Cell(8,0.5,': '.$ttdUp,0,1, 'L');
$pdf->Cell(4,0.5,'Pada',0,0,'L');
$pdf->Cell(0.25,0.5,': ',0,0,'L');
$pdf->MultiCell(11.75,0.5,$fakultas.', '.$universitas.'.','J');
$pdf->Cell(4,0.5,' ',0,0,'L');
$pdf->Ln(0.5);
$pdf->MultiCell(16,0.5,'Dengan ini menerangkan dengan sesungguhnya bahwa :','J');
$pdf->Ln(0.25);
$pdf->Cell(4,0.5,'Nama',0,0,'L');
$pdf->Cell(8,0.5,': '.$namaUp,0,1, 'L');
$pdf->Cell(4,0.5,'Tempat, Tgl Lahir',0,0,'L');
$pdf->Cell(8,0.5,': '.$tempat_lahirUp.', '.$tgl,0,1, 'L');
$pdf->Cell(4,0.5,'No.Mahasiswa',0,0,'L');
$pdf->MultiCell(11,0.5,': '.$nim,'J');
$pdf->Cell(4,0.5,'Jurusan',0,0,'L');
$pdf->MultiCell(11,0.5,': '.$jurusanUp,'J');
$pdf->Cell(4,0.5,'Alamat',0,0,'L');
$pdf->Cell(0.25,0.5,': ',0,0,'L');
$pdf->MultiCell(11.75,0.5,$alamatUp,'J');
$pdf->Ln(0.5);
$pdf->MultiCell(16,0.5,'Adalah benar-benar mahasiswa Fakultas MIPA Universitas Islam Indonesia Yogyakarta yang terdaftar pada Semester '.$smst_jln.' Tahun Akademik '.$awal.'/'.$akhir.', dengan :','J');
$pdf->Ln(0.5);
$pdf->Cell(4,0.5,'Nama Orangtua',0,0,'L');
$pdf->Cell(8,0.5,': '.$ortuUp,0,1, 'L');
$pdf->Cell(4,0.5,'Alamat',0,0,'L');
$pdf->Cell(0.25,0.5,': ',0,0,'L');
$pdf->MultiCell(11.75,0.5,$alamatUp,'J');
$pdf->Cell(4,0.5,'Pekerjaan',0,0,'L');
$pdf->MultiCell(11,0.5,': '.$pekerjaanUp,'J');
$pdf->Cell(4,0.5,'NIP',0,0,'L');
$pdf->MultiCell(11,0.5,': '.$nip1Up,'J');
$pdf->Cell(4,0.5,'Instansi',0,0,'L');
$pdf->MultiCell(11,0.5,': '.$instansiUp,'J');
$pdf->Cell(4,0.5,'Pangkat/Gol',0,0,'L');
$pdf->MultiCell(11,0.5,': '.$pangkatUp,'J');
$pdf->Ln(0.5);
$pdf->multiCell(16,0.5,'Demikian surat ini dibuat untuk dapat dipergunakan sebagaimana mestinya','J');
$pdf->Ln(0.25);
$pdf->SetFont('Times','',12);
$pdf->Ln(0.25);
// $pdf->Cell(9,0.5,' ',0,0,'L');
// $pdf->Cell(7,0.5,$ttd.',',0,0,'L');
// $pdf->Ln(2);
// $pdf->Cell(9,0.5,' ',0,0,'L');
// $pdf->Cell(7,0.5,''.$nama_ttd,0,0,'L');
// $pdf->SetFont('Times','B',12);
// $pdf->Ln(0.5);
// $pdf->Cell(9,0.5,' ',0,0,'L');
// $pdf->Cell(7,0.5,'NIK:'.$nip,0,0,'L');

//Menjadikan dalam bentuk PDF
ob_end_clean();
$pdf->Output('surat.pdf','I');
?>
