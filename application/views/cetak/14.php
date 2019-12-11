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
$lokasi=$surat5['lokasi'];
$kota=$surat5['kota'];
$tanggal=$surat['tanggal'];
$nama=$surat5['nama'];
$namaUp=strtoupper($nama);
$namaDown=strtolower($nama);
$namaUC=ucwords($namaDown);
$nim=$surat5['nim'];
$jurusan=$surat2['jurusan'];
$akreditasi=$surat2['akreditasi'];
$fakultas="Fakultas Matematika dan Ilmu Pengetahuan Alam";
$ttd=$surat['jabatan'];
$nip=$surat['nip'];
$nama_ttd=$surat['nama_pimpinan'];
$kode_surat=$surat['kode_surat'];
$kode_surat2=$surat8['kode_surat'];
$tempat_lahir=$surat2['tempat_lahir'];
$lahirDown=strtolower($tempat_lahir);
$lahirUC=ucwords($lahirDown);
$tanggal_lahir=$surat2['tanggal_lahir'];
$tgl=tgl_indo($tanggal_lahir);
$orangtua=$surat2['orangtua'];
$lampiran=$surat['lampiran'];
$rekan_kp=$surat['rekan_kp'];
$rekan_kpUp=strtoupper($rekan_kp);
$smst_jln=$surat8['smst_jln'];
$judul=$surat3['bla1'];
$bla2=$surat8['bla2'];
$bla3=$surat8['bla3'];
$bla4=$surat8['bla4'];
$bla5=$surat8['bla5'];
$awal=$surat4['awal'];
$akhir=$surat4['akhir'];
$maksud=$surat8['maksud'];
$tempat=$surat8['alamat'];
$judul=$surat3['judul'];
$pembimbing1=$surat6['nama'];
$nip1=$surat6['nip'];
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

$nomersurat=$no_surat.'/'.$kode_surat.'/70-TA/'.$kode_surat2.'/'.$bulan.'/'.date("Y");
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
$pdf->SetFont('Times','',12);
$pdf->Cell(1.25,0.5,'Nomor',0,0,'L');
$pdf->Cell(6,0.5,': '.$nomersurat,0,1, 'L');
$pdf->Cell(1.25,0.5,'Lamp.',0,0,'L');
$pdf->Cell(6,0.5,': ',0,1, 'L');
$pdf->Cell(1.25,0.5,'Hal',0,0,'L');
$pdf->Cell(6,0.5,': Permohonan Ijin Praktik Kerja Lapangan',0,1, 'L');
$pdf->Ln(0.5);
$pdf->SetFont('Times','B',12);
$pdf->MultiCell(16,0.5,'Kepada Yth:','J');
$pdf->MultiCell(16,0.5,'Pimpinan '.$lokasi,'J');
$pdf->MultiCell(16,0.5,'di '.$kota,'J');
$pdf->SetFont('Times','I',12);
$pdf->Ln(0.5);
$pdf->MultiCell(16,0.5,'Assalamualaikum Wr.Wb.','J');
$pdf->Ln(0.25);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(16,0.5,'Bersama ini, Kami Pimpinan Fakultas Matematika dan Ilmu Pengetahuan Alam (MIPA) Universitas Islam Indonesia Yogyakarta bermaksud menyampaikan permohonan izin bagi mahasiswa Kami di bawah ini :','J');
$pdf->Ln(0.5);
$pdf->Cell(4,0.5,'Nama',0,0,'L');
$pdf->Cell(8,0.5,': '.$namaUC,0,1, 'L');
$pdf->Cell(4,0.5,'NIM',0,0,'L');
$pdf->Cell(8,0.5,': '.$nim,0,1, 'L');
$pdf->Cell(4,0.5,'Prodi/Jurusan',0,0,'L');
$pdf->Cell(8,0.5,': '.$jurusan,0,1, 'L');
$pdf->Cell(4,0.5,'Maksud / Keperluan',0,0,'L');
$pdf->Cell(0.25,0.5,': ',0,0,'L');
$pdf->MultiCell(11.75,0.5,$maksud,'J');
$pdf->Cell(4,0.5,'Pelaksanaan',0,0,'L');
$pdf->Cell(8,0.5,': '.$tempat,0,1, 'L');
$pdf->Ln(0.25);
$pdf->Cell(4,0.5,'Pembimbing',0,0,'L');
$pdf->Cell(8,0.5,': '.$pembimbing1,0,1, 'L');
$pdf->Ln(0.5);
$pdf->MultiCell(16,0.5,'Selanjutnya, mengenai pelaksanaan penelitian dan segala konsekuensinya yang dipersyaratkan, Kami serahkan kebijaksanaan Bapak/Ibu Pimpinan.','J');
$pdf->Ln(0.25);
$pdf->MultiCell(16,0.5,'Demikian surat permohonan ini Kami sampaikan, atas perhatian dan kerjasamanya diucapkan terimakasih.','J');
$pdf->SetFont('Times','I',12);
$pdf->Ln(0.25);
$pdf->MultiCell(16,0.5,'Wassalamualaikum Wr.Wb.','J');
$pdf->SetFont('Times','',12);
$pdf->Ln(0.5);
$pdf->Cell(9,0.5,'Mengetahui',0,0,'L');
$pdf->MultiCell(7,0.5,' ','J');
$pdf->Cell(9,0.5,$ttd.',',0,0,'L');
$pdf->MultiCell(7,0.5,'Dosen Pembimbing,','J');
$pdf->Ln(2);
$pdf->SetFont('Times','B',12);
$pdf->Cell(9,0.5,''.$nama_ttd,0,0,'L');
$pdf->Cell(7,0.5,''.$pembimbing1,0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(9,0.5,'NIP:'.$nip,0,0,'L');
$pdf->Cell(7,0.5,'NIP:'.$nip1,0,0,'L');
//Menjadikan dalam bentuk PDF
ob_end_clean();
$pdf->Output('surat.pdf','I');
?>
