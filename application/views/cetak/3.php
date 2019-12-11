<?php
//data surat
$jenis_surat=$surat3['nama_surat'];
// $thn_akademik=$surat4['thn_akademik'];
$semester=$surat4['semester'];
$jenjang_pendidikan=$surat2['jenjang_pendidikan'];
$lokasi=$surat['lokasi'];
// $alamat_penelitian=$surat['alamat_penelitian'];
// $kepada=$surat['kepada'];
$no_surat=$surat5['id_surat'];
// $tanggal=$surat['tanggal'];
$nama=$surat5['nama'];
$namaUp=strtoupper($nama);
$namaDown=strtolower($nama);
$namaUC=ucwords($namaDown);
$nim=$surat5['nim'];
$jurusan=$surat2['jurusan'];
$akreditasi=$surat2['akreditasi'];
$fakultas="Fakultas Matematika dan Ilmu Pengetahuan Alam";
$ttd=$surat['jabatan'];
$nik=$surat['nip'];
$nama_ttd=$surat['nama_pimpinan'];
$kode_surat=$surat['kode_surat'];
$kode_surat2=$surat3['kode_surat'];
$tempat_lahir=$surat2['tempat_lahir'];
$lahirDown=strtolower($tempat_lahir);
$lahirUC=ucwords($lahirDown);
$tanggal_lahir=$surat2['tanggal_lahir'];
$tgl=tgl_indo($tanggal_lahir);
// // $orangtua=$surat2['orangtua'];
// // $lampiran=$surat['lampiran'];
// // $rekan_kp=$surat['rekan_kp'];
// $rekan_kpUp=strtoupper($rekan_kp);
$smst_jln=$surat3['smst_jln'];
// $judul=$surat3['bla1'];
// $bla2=$surat3['bla2'];
// $bla3=$surat3['bla3'];
// $bla4=$surat3['bla4'];
// $bla5=$surat3['bla5'];
$awal=$surat4['awal'];
$akhir=$surat4['akhir'];
$no_ijazah=$surat2['no_ijazah'];
$tahun_lulus=$surat2['tahun_lulus'];
$tgl_ijazah=$surat2['tgl_ijazah'];
$tglijazah=tgl_indo($tgl_ijazah);
$bulan=date("m");
$universitas="Universitas Islam Indonesia Yogyakarta";

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

$nomersurat=$no_surat.'/'.$kode_surat.'/90/'.$kode_surat2.'/'.$bulan.'/'.date("Y");
$this->db->set('nomersurat',$nomersurat, true);
$this->db->where('id_surat', $surat2['id_surat'], true);
$this->db->update('surat');

//deklarasi format kertas
$pdf = new FPDF('P', 'cm','Letter');
$pdf->Header();
$pdf->AliasNbPages();

//setting margin kertasj
$pdf->SetMargins($left,$top,$right);
$pdf->SetAutoPageBreak(true, $bottom);
$pdf->AddPage();

$pdf->SetFont('Times','',12);


//membuat kop tabel
$x=$pdf->GetY();
$pdf->SetY($x+1);

// menuliskan datanya
// $pdf->Ln(2);
$pdf->SetFont('Times','U',12);
$pdf->Cell(16,0.5,'SURAT KETERANGAN',0,0,'C');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Cell(16,0.5,'Nomor: '.$nomersurat,0,0,'C');
$pdf->Ln(1);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(16,0.5,'Yang bertandatangan di bawah ini :','J');
$pdf->Cell(6,0.5,'',0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(6,0.5,'Nama',0,0,'L');
$pdf->Cell(6,0.5,': '.$nama_ttd,0,1, 'L');
$pdf->Cell(6,0.5,'NIK',0,0,'L');
$pdf->Cell(6,0.5,': '.$nik,0,1, 'L');
$pdf->Cell(6,0.5,'Jabatan',0,0,'L');
$pdf->MultiCell(9,0.5,': '.$ttd,'J');
$pdf->Cell(6,0.5,'',0,0,'L');
$pdf->MultiCell(9,0.5,'  '.$fakultas,'J');
$pdf->Cell(6,0.5,'',0,0,'L');
$pdf->MultiCell(9,0.5,'  '.$universitas,'J');
$pdf->Ln(0.5);
$pdf->Cell(6,0.5,'Dengan ini menerangkan bahwa :',0,0,'L');
$pdf->Ln(1);
$pdf->Cell(6,0.5,'Nama',0,0,'L');
$pdf->Cell(6,0.5,': '.$namaUp,0,1, 'L');
$pdf->Cell(6,0.5,'Tempat & Tgl.Lahir',0,0,'L');
$pdf->Cell(6,0.5,': '.$lahirUC.', '.$tgl,0,1, 'L');
$pdf->Ln(0.5);
$pdf->MultiCell(16,0.5,'adalah benar telah menyelesaikan studi pada Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Islam Indonesia pada :','J');
$pdf->Ln(0.5);
$pdf->Cell(6,0.5,'Program Studi',0,0,'L');
$pdf->Cell(6,0.5,': '.$jurusan,0,1, 'L');
$pdf->Cell(6,0.5,'NIM',0,0,'L');
$pdf->Cell(6,0.5,': '.$nim,0,1, 'L');
$pdf->Cell(6,0.5,'Nomer Ijazah',0,0,'L');
$pdf->Cell(6,0.5,': '.$no_ijazah,0,1, 'L');
$pdf->Cell(6,0.5,'Tahun Lulus',0,0,'L');
$pdf->Cell(6,0.5,': '.$tahun_lulus,0,1, 'L');
$pdf->Cell(6,0.5,'Tanggal Ijazah',0,0,'L');
$pdf->Cell(6,0.5,': '.$tglijazah,0,1, 'L');
$pdf->Ln(0.5);
$pdf->multiCell(16,0.5,'Demikian surat keterangan ini dibuat untuk dapat digunakan sebagaimana mestinya','J');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Ln(0.5);
$pdf->Cell(10,0.5,' ',0,0,'L');
$pdf->MultiCell(6,0.5,'Yogyakarta, '.tgl_indo(date("Y m d")),'J');
$pdf->Cell(10,0.5,' ',0,0,'L');
$pdf->MultiCell(6,0.5,$ttd,'J');
$pdf->Ln(2);
$pdf->Cell(10,0.5,' ',0,0,'L');
$pdf->SetFont('Times','B',12);
$pdf->Cell(6,0.5,''.$nama_ttd,0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(10,0.5,' ',0,0,'L');
$pdf->Cell(6,0.5,'NIK:'.$nik,0,0,'L');

//Menjadikan dalam bentuk PDF
ob_end_clean();
$pdf->Output('surat.pdf','I');
?>
