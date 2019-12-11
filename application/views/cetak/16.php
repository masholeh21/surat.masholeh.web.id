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
$namaDown=strtolower($nama);
$namaUC=ucwords($namaDown);
$nim=$surat5['nim'];
$jurusan=$surat2['jurusan'];
$akreditasi=$surat2['akreditasi'];
$ket_akreditasi=$surat2['ket_akreditasi'];
$masa11=$surat2['jangka_awal'];
$masa1=tgl_indo($masa11);
$masa22=$surat2['jangka_akhir'];
$masa2=tgl_indo($masa22);
$fakultas="Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)";
$ttd=$surat['jabatan'];
$nama_ttd=$surat['nama_pimpinan'];
$kode_surat=$surat['kode_surat'];
$kode_surat2=$surat11['kode_surat'];
$tempat_lahir=$surat2['tempat_lahir'];
$lahirDown=strtolower($tempat_lahir);
$lahirUC=ucwords($lahirDown);
$tanggal_lahir=$surat2['tanggal_lahir'];
$tgl=tgl_indo($tanggal_lahir);
$orangtua=$surat2['orangtua'];
$lampiran=$surat['lampiran'];
$rekan_kp=$surat['rekan_kp'];
$nip = $surat['nip'];
$rekan_kpUp=strtoupper($rekan_kp);
$smst_jln=$surat3['smst_jln'];
$judul=$surat3['bla1'];
$bla2=$surat3['bla2'];
$bla3=$surat3['bla3'];
$bla4=$surat3['bla4'];
$bla5=$surat3['bla5'];
$awal=$surat4['awal'];
$akhir=$surat4['akhir'];
$keperluan=$surat2['keperluan'];
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

$nomersurat=$no_surat.'/'.$kode_surat.'/20/'.$kode_surat2.'/'.$bulan.'/'.date("Y");
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
$pdf->SetFont('Times','UB',14);
$pdf->Cell(16,0.5,'SURAT KETERANGAN',0,0,'C');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Cell(16,0.5,'Nomor: '.$nomersurat,0,0,'C');
$pdf->Ln(1);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(16,0.75,'Yang bertandatangan di bawah ini :','J');
$pdf->Cell(6,0.5,'',0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(3,0.75,'Nama',0,0,'L');
$pdf->Cell(9,0.75,': '.$nama_ttd,0,1, 'L');
$pdf->Cell(3,0.75,'Jabatan',0,0,'L');
$pdf->Cell(0.25,0.5,':',0,0,'L');
$pdf->MultiCell(12.75,0.75,$ttd.' '.$fakultas.' '.$universitas, 'J');
$pdf->Ln(0.5);
$pdf->MultiCell(16,0.75,'Dengan ini menerangkan bahwa Program Studi '.$jurusan.' '.$fakultas.', sesuai dengan Surat Badan Akreditasi Nasional Perguruan Tinggi telah terakreditasi dengan :','J');
$pdf->Ln(1);
$pdf->Cell(6,0.75,'Peringkat',0,0,'L');
$pdf->Cell(6,0.75,': '.$akreditasi,0,1, 'L');
$pdf->Cell(6,0.75,'No. Sertifikat Akreditasi',0,0,'L');
$pdf->Cell(6,0.75,': '.$ket_akreditasi,0,1, 'L');
$pdf->Cell(6,0.75,'Masa Berlaku',0,0,'L');
$pdf->Cell(6,0.75,': '.$masa1.' s/d '.$masa2,0,1, 'L');
$pdf->Ln(0.5);
$pdf->multiCell(16,0.75,'Demikian Surat Keterangan Akreditasi ini dibuat untuk dapat digunakan sebagaimana mestinya.','J');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Cell(6,0.5,''.$bla6,0,0,'J');
$pdf->Ln(0.5);
$pdf->Cell(10,0.5,' ',0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(8.5,0.5,' ',0,0,'L');
$pdf->Cell(7.5,0.5,'Yogyakarta, '.tgl_indo(date("Y m d")),0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(8.5,0.5,' ',0,0,'L');
$pdf->MultiCell(7.5,0.5,$ttd,'J');
$pdf->Ln(2);
$pdf->Cell(8.5,0.5,' ',0,0,'L');
$pdf->SetFont('Times','B',12);
$pdf->Cell(7.5,0.5,''.$nama_ttd,0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(8.5,0.5,' ',0,0,'L');
$pdf->MultiCell(7.5,0.5,$nip,'J');

//Menjadikan dalam bentuk PDF
ob_end_clean();
$pdf->Output('surat.pdf','I');
?>
