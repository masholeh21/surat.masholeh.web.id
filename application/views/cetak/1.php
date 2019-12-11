<?php
// data surat
$jenis_surat=$surat3['nama_surat'];
// $thn_akademik=$surat4['thn_akademik'];
$semester=$surat4['semester'];
$jenjang_pendidikan=$surat2['jenjang_pendidikan'];
$lokasi=$surat['lokasi'];
$alamat_penelitian=$surat['alamat'];
$kepada=$surat['nama_pimpinan'];
$no_surat=$surat5['id_surat'];
$tanggal=$surat['tgl_pesan'];
$tanggal2=$surat['tgl_setujui'];
$nama=$surat5['nama'];
$alamat=$surat5['alamat_surat'];
$alamatUp=strtoupper($alamat);
$namaUp=strtoupper($nama);
$namaDown=strtolower($nama);
$namaUC=ucwords($namaDown);
$nim=$surat5['nim'];
$jurusan=$surat2['jurusan'];
$jurusanUp=strtoupper($jurusan);
$akreditasi=$surat2['akreditasi'];
$fakultas="FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM (FMIPA)";
$ttd=$surat['jabatan'];
$ttdUp=strtoupper($ttd);
$nama_ttd=$surat['nama_pimpinan'];
$nama_ttdUp=strtoupper($nama_ttd);
$nik=$surat['nip'];
$kode_surat=$surat['kode_surat'];
$kode_surat2=$surat3['kode_surat'];
$tempat_lahir=$surat2['tempat_lahir'];
$lahirDown=strtolower($tempat_lahir);
$lahirUp=strtoupper($tempat_lahir);
$lahirUC=ucwords($lahirDown);
$tanggal_lahir=$surat2['tanggal_lahir'];
$tgl=tgl_indo($tanggal_lahir);
// $orangtua=$surat2['orangtua'];
// $lampiran=$surat['lampiran'];
// $rekan_kp=$surat['rekan_kp'];
// $rekan_kpUp=strtoupper($rekan_kp);
$smst_jln=$surat['smst_jln'];
// $judul=$surat3['bla1'];
// $bla2=$surat3['bla2'];
// $bla3=$surat3['bla3'];
// $bla4=$surat3['bla4'];
// $bla5=$surat3['bla5'];
$awal=$surat4['awal'];
$akhir=$surat4['akhir'];
$keperluan=$surat2['maksud'];
// var_dump($surat2);die;
$bulan=date("m");
$universitas="UNIVERSITAS ISLAM INDONESIA, YOGYAKARTA";

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

// format kertas
$pdf = new FPDF('P', 'cm','Letter');
$pdf->Header();
$pdf->AliasNbPages();

// set margin kertas
$pdf->SetMargins($left,$top,$right);
$pdf->SetAutoPageBreak(true, $bottom);
$pdf->AddPage();

$pdf->SetFont('Times','',12);
// kop tabel
$x = $pdf->GetY();
$pdf->SetY($x+1);

// menuliskan datanya
// $pdf->Ln(2);
$pdf->SetFont('Times','U',14);
$pdf->Cell(16,0.5,'SURAT KETERANGAN BERKELAKUAN BAIK',0,0,'C');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Cell(16,0.5,'Nomor: '.$nomersurat,0,0,'C');
$pdf->Ln(1);
$pdf->SetFont('Times','',12);
$pdf->Cell(16,0.5,'Yogyakarta, '.tgl_indo(date("Y m d")),0,0,'R');
$pdf->Ln(1);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(16,0.5,'Yang bertandatangan di bawah ini :','J');
$pdf->Cell(6,0.5,'',0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(4,0.5,'Nama',0,0,'L');
$pdf->Cell(8,0.5,': '.$nama_ttdUp,0,1, 'L');
$pdf->Cell(4,0.5,'Jabatan',0,0,'L');
$pdf->Cell(8,0.5,': '.$ttdUp,0,1, 'L');
$pdf->Cell(4,0.5,'Pada',0,0,'L');
$pdf->Cell(0.25,0.5,':',0,0,'L');
$pdf->MultiCell(11.75,0.5,$fakultas.' '.$universitas,'J');
$pdf->Ln(0.5);
$pdf->Cell(6,0.5,'Dengan ini menerangkan dengan sesungguhnya bahwa :',0,0,'L');
$pdf->Ln(1);
$pdf->Cell(4,0.5,'Nama',0,0,'L');
$pdf->Cell(8,0.5,': '.$namaUp,0,1, 'L');
$pdf->Cell(4,0.5,'Tempat Tgl Lahir',0,0,'L');
$pdf->Cell(8,0.5,': '.$lahirUp.' / '.$tgl,0,1, 'L');
$pdf->Cell(4,0.5,'No Mhs',0,0,'L');
$pdf->Cell(8,0.5,': '.$nim,0,1, 'L');
$pdf->Cell(4,0.5,'Jurusan',0,0,'L');
$pdf->Cell(8,0.5,': '.$jurusanUp,0,1, 'L');
$pdf->Cell(4,0.5,'Alamat',0,0,'L');
$pdf->Cell(0.25,0.5,': ',0,0,'L');
$pdf->MultiCell(11.75,0.5,$alamatUp,'J');
$pdf->Ln(1);
$pdf->multiCell(16,0.5,'Adalah benar-benar mahasiswa Fakultas MIPA Universitas Islam Indonesia Yogyakarta yang terdaftar pada Semester '.$smst_jln.' Tahun Akademik '.$awal.'/'.$akhir.', dan berkelakuan baik.','J');
$pdf->Ln(0.5);
$pdf->multiCell(16,0.5,'Demikian surat keterangan ini dibuat untuk dapat digunakan sebagaimana perlunya','J');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Cell(6,0.5,''.$bla6,0,0,'J');
$pdf->Ln(0.5);
$pdf->Cell(10,0.5,' ',0,0,'L');
$pdf->Ln(0.5);
// $pdf->Cell(8.5,0.5,' ',0,0,'L');
// $pdf->MultiCell(7.5,0.5,$ttd,'J');
// $pdf->Ln(2);
// $pdf->Cell(8.5,0.5,' ',0,0,'L');
// $pdf->SetFont('Times','B',12);
// $pdf->Cell(7.5,0.5,''.$nama_ttd,0,0,'L');
// $pdf->Ln(0.5);
// $pdf->Cell(8.5,0.5,' ',0,0,'L');
// $pdf->Cell(7.5,0.5,'NIP: '.$nik,0,0,'L');

//Menjadikan dalam bentuk PDF
ob_end_clean();
$pdf->Output('surat.pdf','I');
?>
