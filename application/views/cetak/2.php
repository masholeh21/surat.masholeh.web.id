<?php
$tgl=date('d');
$bln=date('m');
$thn=date('y');

//data surat
$jenis_surat=$surat3['nama_surat'];
// $thn_akademik=$surat4['thn_akademik'];
$semester=$surat4['semester'];
$jenjang_pendidikan=$surat2['jenjang_pendidikan'];
$lokasi=$surat['lokasi'];
$alamat_penelitian=$surat['alamat'];
$kepada=$surat['nama_pimpinan'];
$no_surat=$surat5['id_surat'];
$lokasi=$surat5['lokasi'];
$kota=$surat5['kota'];
$tanggal=$surat['tgl_pesan'];
$tanggal2=$surat['tgl_setujui'];
$nama=$surat5['nama'];
$namaUp=strtoupper($nama);
$namaDown=strtolower($nama);
$namaUC=ucwords($namaDown);
$nim=$surat5['nim'];
$jurusan=$surat2['jurusan'];
$jurusanUp=strtoupper($jurusan);
$akreditasi=$surat2['akreditasi'];
$fakultas="Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)";
$ttd=$surat['jabatan'];
$nama_ttd=$surat['nama_pimpinan'];
$nik=$surat['nip'];
$kode_surat=$surat['kode_surat'];
$kode_surat2=$surat3['kode_surat'];
$tempat_lahir=$surat5['tempat_lahir'];
$lahirUp=strtoupper($tempat_lahir);
$lahirUC=ucwords($lahirDown);
$tanggal_lahir=$surat5['tanggal_lahir'];
$tgl=tgl_indo($tanggal_lahir);
$tglUp=strtoupper($tgl);
// $orangtua=$surat2['orangtua'];
// $lampiran=$surat['lampiran'];
// $rekan_kp=$surat['rekan_kp'];
// $rekan_kpUp=strtoupper($rekan_kp);
// $judul=$surat3['bla1'];
// $bla2=$surat3['bla2'];
// $bla3=$surat3['bla3'];
// $bla4=$surat3['bla4'];
// $bla5=$surat3['bla5'];
$keperluan=$surat2['maksud'];
$bulan=date("m");
$universitas="Universitas Islam Indonesia Yogyakarta";
$isi="Bersama surat ini Kami menyampaikan permohonan pembuatan paspor bagi mahasiswa Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Islam Indonesia Yogyakarta, sebagai berikut : ";
$penutup="Demikian surat pengantar ini, atas perhatian dan kerjasamanya diucapkan terimakasih.";

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
$pdf->Cell(1.5,0.5,'Nomor',0,0,'L');
$pdf->Cell(6.5,0.5,': '.$nomersurat,0,0,'L');
$pdf->Cell(8,0.5,'Yogyakarta, '.tgl_indo(date("Y m d")),0,0,'R');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Cell(1.5,0.5,'Lamp',0,0,'L');
$pdf->Cell(6.5,0.5,': Fotokopi KTM',0,0,'L');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Cell(1.5,0.5,'Hal',0,0,'L');
$pdf->Cell(6.5,0.5,': Pengantar pembuatan paspor',0,0,'L');
$pdf->Ln(2);
$pdf->SetFont('Times','',12);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(14.5,0.5,'Kepada Yth.:',0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->SetFont('Times','B',12);
$pdf->Cell(14.5,0.5,'Kepala Kantor Imigrasi',0,0, 'L');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(14.5,0.5,$lokasi,0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(14.5,0.5,'di '.$kota,0,0, 'L');
$pdf->Ln(1);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(6,0.5,'Assalamu alaikum wr.wb.',0,0,'L');
$pdf->Ln(1);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->multiCell(14.5,0.5,''.$isi,'J');
$pdf->Ln(0.5);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,'Nama',0,0,'L');
$pdf->Cell(8,0.5,': '.$namaUp,0,1, 'L');
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,'NIM',0,0,'L');
$pdf->Cell(8,0.5,': '.$nim,0,1, 'L');
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,'Program Studi/Jurusan',0,0,'L');
$pdf->Cell(8,0.5,': '.$jurusanUp,0,1, 'L');
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,'Tgl. Lahir',0,0,'L');
$pdf->Cell(8,0.5,': '.$lahirUp.'/ '.$tglUp,0,1, 'L');
$pdf->Ln(0.5);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->multiCell(14.5,0.5,''.$penutup,'J');
$pdf->SetFont('Times','',12);
$pdf->Ln(0.5);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->multiCell(16,0.5,'Wassalamu alaikum Wr.Wb.','J');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Cell(6,0.5,''.$bla6,0,0,'J');
$pdf->Ln(0.5);
$pdf->Cell(10,0.5,' ',0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(10,0.5,' ',0,0,'L');
$pdf->MultiCell(6,0.5,$ttd,'J');
$pdf->Ln(2);
$pdf->Cell(10,0.5,' ',0,0,'L');
$pdf->SetFont('Times','B',12);
$pdf->Cell(6,0.5,''.$nama_ttd,0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(10,0.5,' ',0,0,'L');
$pdf->Cell(6,0.5,'NIK: '.$nik,0,0,'L');

//Menjadikan dalam bentuk PDF
ob_end_clean();
$pdf->Output('surat.pdf','I');
?>
