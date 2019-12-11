<?php
//data surat
$jenis_surat=$surat['jenis_surat'];
$thn_akademik=$surat4['thn_akademik'];
$semester=$surat4['semester'];
$jenjang_pendidikan=$surat2['jenjang_pendidikan'];
$lokasi=$surat['lokasi'];
$mhs1=$itmk['mhs1'];
$mhs2=$itmk['mhs2'];
$mhs3=$itmk['mhs3'];
$mhs4=$itmk['mhs4'];
$mhs5=$itmk['mhs5'];
$mhs6=$itmk['mhs6'];
$mhs7=$itmk['mhs7'];
$mhs8=$itmk['mhs8'];
$mhs9=$itmk['mhs9'];
$mhs10=$itmk['mhs10'];
$nim1=$itmk['nim1'];
$nim2=$itmk['nim2'];
$nim3=$itmk['nim3'];
$nim4=$itmk['nim4'];
$nim5=$itmk['nim5'];
$nim6=$itmk['nim6'];
$nim7=$itmk['nim7'];
$nim8=$itmk['nim8'];
$nim9=$itmk['nim9'];
$nim10=$itmk['nim10'];
$alamat_penelitian=$surat['alamat_penelitian'];
$kepada=$surat['kepada'];
$nip=$surat['nip'];
$nip1=$surat6['nip'];
$nip2=$surat['nik1'];
$no_surat=$surat5['id_surat'];
$maksud=$surat5['maksud'];
$subyek=$surat5['subyek'];
$pembimbing1=$surat6['nama'];
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
$rekan_kpUp=strtoupper($rekan_kp);
$judul=$surat3['bla1'];
$bla2=$surat3['bla2'];
$bla3=$surat3['bla3'];
$bla4=$surat3['bla4'];
$bla5=$surat3['bla5'];
$keperluan=$surat2['keperluan'];
$bulan=date("m");
$universitas="Universitas Islam Indonesia Yogyakarta";
$isi="Dalam rangka tugas mata kuliah mahasiswa Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Islam Indonesia, bersama ini mohon Bapak/Ibu kiranya berkenan memberikan izin mahasiswa kami berikut ini untuk : ";
$penutup="Demikian permohonan kami, atas perhatian dan izin yang diberikan di ucapkan terima kasih.";

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
$pdf->Cell(6.5,0.5,': Permohonan Izin dalam rangka Tugas Mata Kuliah',0,0,'L');
$pdf->Ln(1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->MultiCell(14.5,0.5,'Kepada Yth:','J');
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->MultiCell(14.5,0.5,'Pimpinan '.$lokasi,'J');
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->MultiCell(14.5,0.5,'di '.$kota,'J');
$pdf->SetFont('Times','I',12);
$pdf->Ln(0.5);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(6,0.5,'Assalamu alaikum wr.wb.',0,0,'L');
$pdf->Ln(0.5);
$pdf->SetFont('Times','',12);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->multiCell(14.5,0.5,''.$isi,'J');
$pdf->Ln(0.5);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,'Keperluan/Kegiatan',0,0,'L');
$pdf->Cell(0.25,0.5,': ',0,0,'L');
$pdf->MultiCell(10.25,0.5,$maksud,'J');
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,'Tugas Mata Kuliah',0,0,'L');
$pdf->Cell(0.25,0.5,': ',0,0,'L');
$pdf->MultiCell(10.25,0.5,$subyek,'J');
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,'Dosen Pengampu',0,0,'L');
$pdf->Cell(8,0.5,': '.$pembimbing1,0,1, 'L');
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,'Prodi/Jurusan',0,0,'L');
$pdf->Cell(8,0.5,': '.$jurusan,0,1, 'L');
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,'Nama Mhs & NIM',0,0,'L');
$pdf->Cell(8,0.5,': '.$namaUC.' / '.$nim,0,1, 'L');
if($itmk['mhs1']!='')
{
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,' ',0,0,'L');
$pdf->Cell(8,0.5,'  '.$mhs1.' / '.$nim1,0,1, 'L');
}
if($itmk['mhs2']!='')
{
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,' ',0,0,'L');
$pdf->Cell(8,0.5,'  '.$mhs2.' / '.$nim2,0,1, 'L');
}
if($itmk['mhs3']!='')
{
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,' ',0,0,'L');
$pdf->Cell(8,0.5,'  '.$mhs3.' / '.$nim3,0,1, 'L');
}
if($itmk['mhs4']!='')
{
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,' ',0,0,'L');
$pdf->Cell(8,0.5,'  '.$mhs4.' / '.$nim4,0,1, 'L');
}
if($itmk['mhs5']!='')
{
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,' ',0,0,'L');
$pdf->Cell(8,0.5,'  '.$mhs5.' / '.$nim5,0,1, 'L');
}
if($itmk['mhs6']!='')
{
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,' ',0,0,'L');
$pdf->Cell(8,0.5,'  '.$mhs6.' / '.$nim6,0,1, 'L');
}
if($itmk['mhs7']!='')
{
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,' ',0,0,'L');
$pdf->Cell(8,0.5,'  '.$mhs7.' / '.$nim7,0,1, 'L');
}
if($itmk['mhs8']!='')
{
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,' ',0,0,'L');
$pdf->Cell(8,0.5,'  '.$mhs8.' / '.$nim8,0,1, 'L');
}
if($itmk['mhs9']!='')
{
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,' ',0,0,'L');
$pdf->Cell(8,0.5,'  '.$mhs9.' / '.$nim9,0,1, 'L');
}
if($itmk['mhs10']!='')
{
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(4,0.5,' ',0,0,'L');
$pdf->Cell(8,0.5,'  '.$mhs10.' / '.$nim10,0,1, 'L');
}
$pdf->Ln(0.5);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->multiCell(14.5,0.5,''.$penutup,'J');
$pdf->SetFont('Times','I',12);
$pdf->Ln(0.25);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->multiCell(16,0.5,'Wassalamu alaikum Wr.Wb.','J');
$pdf->SetFont('Times','',12);
$pdf->Cell(6,0.5,''.$bla6,0,0,'J');
$pdf->Cell(10,0.5,' ',0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(7.5,0.5,'Mengetahui',0,0,'L');
$pdf->MultiCell(5,0.5,' ','J');
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(7.5,0.5,$ttd.',',0,0,'L');
$pdf->MultiCell(8.5,0.5,'Dosen Pengampu,','J');
$pdf->Ln(2);
$pdf->SetFont('Times','B',12);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(7.5,0.5,''.$nama_ttd,0,0,'L');
$pdf->Cell(8.5,0.5,''.$pembimbing1,0,0,'L');
$pdf->Ln(0.5);
$pdf->Cell(1.5,0.5,'',0,0,'L');
$pdf->Cell(7.5,0.5,'NIP:'.$nip,0,0,'L');
$pdf->Cell(8.5,0.5,'NIP:'.$nip1,0,0,'L');

//Menjadikan dalam bentuk PDF
ob_end_clean();
$pdf->Output('surat.pdf','I');
?>
