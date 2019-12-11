<?php
//data surat
$jenis_surat=$surat3['nama_surat'];
// $thn_akademik=$surat4['thn_akademik'];
$semester=$surat4['semester'];
$jenjang_pendidikan=$surat2['jenjang_pendidikan'];
$lokasi=$surat['lokasi'];
$alamat_penelitian=$surat['alamat'];
$kepada=$surat['nama_pimpinan'];
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
$nip=$surat['nip'];
$nama_ttd=$surat['nama_pimpinan'];
$kode_surat=$surat['kode_surat'];
$kode_surat2=$surat3['kode_surat'];
$tempat_lahir=$surat2['tempat_lahir'];
$lahirDown=strtolower($tempat_lahir);
$lahirUC=ucwords($lahirDown);
$tanggal_lahir=$surat2['tanggal_lahir'];
$tgl=tgl_indo($tanggal_lahir);
// $orangtua=$surat2['orangtua'];
// $lampiran=$surat['lampiran'];
// $rekan_kp=$surat['rekan_kp'];
// $rekan_kpUp=strtoupper($rekan_kp);
$smst_jln=$surat3['smst_jln'];
// $judul=$surat3['bla1'];
// $bla2=$surat3['bla2'];
// $bla3=$surat3['bla3'];
// $bla4=$surat3['bla4'];
// $bla5=$surat3['bla5'];
$awal=$surat4['awal'];
$akhir=$surat4['akhir'];
$maksud=$surat3['maksud'];
$tempat=$surat3['alamat'];
$judul=$surat3['judul'];
$judulUp=strtoupper($judul);
$pembimbing1=$surat6['nama'];
$pembimbing1Up=strtoupper($pembimbing1);
$pembimbing2=$surat7['nama'];
$pembimbing2Up=strtoupper($pembimbing2);
$nip1=$surat6['nip'];
$nip2=$surat7['nip'];
$lokasi=$surat3['lokasi'];
$kota=$surat3['kota'];
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
$pdf->Cell(6,0.5,': Permohonan Pembelian Bahan dalam Rangka Penelitian Tugas Akhir',0,1, 'L');
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
$pdf->MultiCell(16,0.5,'Dengan ini, Kami Pimpinan Fakultas Matematika dan Ilmu Pengetahuan Alam (MIPA) Universitas Islam Indonesia Yogyakarta bermaksud menyampaikan permohonan Pembelian bahan penelitian bagi mahasiswa Kami di bawah ini :','J');
$pdf->Ln(0.5);
$pdf->Cell(4,0.5,'Nama',0,0,'L');
$pdf->Cell(0.25,0.5,':',0,0,'L');
$pdf->Cell(7.75,0.5,$namaUp,0,1, 'L');
$pdf->Cell(4,0.5,'NIM',0,0,'L');
$pdf->Cell(0.25,0.5,':',0,0,'L');
$pdf->Cell(7.75,0.5,$nim,0,1, 'L');
$pdf->Cell(4,0.5,'Judul Penelitian',0,0,'L');
$pdf->Cell(0.25,0.5,':',0,0,'L');
$pdf->MultiCell(11.75,0.5,$judulUp,'J');
$pdf->Ln(0.75);
$pdf->Cell(4,0.5,'Pembimbing Skripsi 1',0,0,'L');
$pdf->Cell(8,0.5,': '.$pembimbing1Up,0,1, 'L');
if($pembimbing2!='')
{
$pdf->Cell(4,0.5,'Pembimbing Skripsi 2',0,0,'L');
$pdf->Cell(8,0.5,': '.$pembimbing2Up,0,1, 'L');
}
$pdf->Ln(0.25);
$pdf->MultiCell(16,0.5,'Kiranya Bapak/Ibu berkenan untuk dapat melayani pembelian bahan penelitian berupa :','J');
$pdf->Ln(0.25);
$pdf->MultiCell(16,0.5,$maksud,'J');
$pdf->Ln(0.25);
$pdf->MultiCell(16,0.5,'Dalam rangka menyelesaikan Penelitian Tugas Akhir Program S-1 Program Studi mahasiswa tersebut.','J');
$pdf->Ln(0.25);
$pdf->MultiCell(16,0.5,'Demikian atas bantuan dan kerjasamanya Kami ucapkan terimakasih.','J');
$pdf->Ln(0.25);
$pdf->SetFont('Times','I',12);
$pdf->MultiCell(16,0.5,'Wassalamualaikum Wr.Wb.','J');
$pdf->SetFont('Times','',12);
$pdf->Ln(0.25);
$pdf->Cell(10,0.5,'Mengetahui',0,0,'L');
$pdf->MultiCell(6,0.5,' ','J');
$pdf->Cell(10,0.5,$ttd.',',0,0,'L');
$pdf->MultiCell(6,0.5,'Dosen Pembimbing,','J');
$pdf->Ln(1.75);
$pdf->SetFont('Times','B',12);
$pdf->Cell(10,0.5,''.$nama_ttd,0,0,'L');
$pdf->MultiCell(6,0.5,''.$surat6['nama'],'J');
$pdf->Ln(0.15);
$pdf->Cell(10,0.5,'NIP:'.$nip,0,0,'L');
$pdf->Cell(6,0.5,'NIP:'.$surat6['nip'],0,0,'L');

//Menjadikan dalam bentuk PDF
ob_end_clean();
$pdf->Output('surat.pdf','I');

?>
