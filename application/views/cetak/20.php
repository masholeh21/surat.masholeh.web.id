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
$fakultas="Fakultas Matematika dan Ilmu Pengetahuan Alam";
$ttd=$surat['jabatan'];
$nip=$surat['nip'];
$nama_ttd=$surat['nama_pimpinan'];
$kode_surat=$surat['kode_surat'];
$kode_surat2=$surat12['kode_surat'];
$tempat_lahir=$surat2['tempat_lahir'];
$lahirDown=strtolower($tempat_lahir);
$lahirUC=ucwords($lahirDown);
$tanggal_lahir=$surat2['tanggal_lahir'];
$tgl=tgl_indo($tanggal_lahir);
$orangtua=$surat2['orangtua'];
$lampiran=$surat['lampiran'];
$rekan_kp=$surat['rekan_kp'];
$rekan_kpUp=strtoupper($rekan_kp);
$smst_jln=$surat3['smst_jln'];
$judul=$surat3['bla1'];
$bla2=$surat3['bla2'];
$bla3=$surat3['bla3'];
$bla4=$surat3['bla4'];
$bla5=$surat3['bla5'];
$awal=$surat4['awal'];
$akhir=$surat4['akhir'];
$maksud=$surat3['maksud'];
$tempat=$surat3['alamat'];
$judul=$surat3['judul'];
$pembimbing1=$surat3['pembimbing1'];
$pembimbing2=$surat3['pembimbing2'];
$nik1=$surat3['nik1'];
$nik2=$surat3['nik2'];
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
$pdf->SetFont('Times','BU',14);
$pdf->Cell(16,0.5,'S U R A T  K E T E R A N G A N',0,1, 'C');
$pdf->SetFont('Times','',12);
$pdf->Cell(16,0.5,'Nomor: '.$nomersurat,0,1, 'C');
$pdf->Ln(1.5);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(16,0.5,'Pimpinan Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Islam Indonesia (FMIPA UII) Yogyakarta menerangkan dengan sebenarnya bahwa, Saudara yang namanya disebutkan di bawah ini :','J');
$pdf->SetFont('Times','',12);
$pdf->Ln(0.5);
$pdf->Cell(4,0.5,'Nama',0,0,'L');
$pdf->Cell(12,0.5,': '.$namaUC,0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(4,0.5,'NIM',0,0,'L');
$pdf->Cell(12,0.5,': '.$nim,0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(4,0.5,'Tempat & Tgl. Lahir',0,0,'L');
$pdf->Cell(12,0.5,': '.$tempat_lahir.', '.$tgl,0,0,'L');
$pdf->Ln(1.5);
$pdf->SetFont('Times','B',12);
$pdf->Cell(6,0.5,'Mata Praktikum',1,0,'C');
$pdf->Cell(5,0.5,'Program Studi',1,0,'C');
$pdf->Cell(5,0.5,'Periode/Tahun Akademik',1,0,'C');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Cell(6,1.5,$surat2['judul'],1,0,'C');
$pdf->Cell(5,1.5,$surat2['jurusan'],1,0,'C');
$pdf->Cell(5,1.5,$surat2['smst_jln'].' & '.$surat2['subyek'],1,0,'C');
$pdf->Ln(2);
$pdf->MultiCell(16,0.5,'Demikian surat keterangan ini dibuat untuk digunakan sebagaimana perlunya.','J');
$pdf->SetFont('Times','',12);
$pdf->Ln(1);
$pdf->Cell(8.5,0.5,' ',0,0,'L');
$pdf->MultiCell(7.5,0.5,'Yogyakarta,','J');
$pdf->Cell(8.5,0.5,' ',0,0,'L');
$pdf->MultiCell(7.5,0.5,$ttd,'J');
$pdf->Ln(1.75);
$pdf->SetFont('Times','B',12);
$pdf->Cell(8.5,0.5,' ',0,0,'L');
$pdf->Cell(7.5,0.5,''.$nama_ttd,0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(8.5,0.5,' ',0,0,'L');
$pdf->Cell(7.5,0.5,'NIP:'.$nip,0,0,'L');

//Menjadikan dalam bentuk PDF
ob_end_clean();
$pdf->Output('surat.pdf','I');
?>
