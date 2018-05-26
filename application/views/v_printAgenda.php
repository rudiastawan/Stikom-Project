
<html>
<head>
	<title>Cetak PDF</title>

  <style type="text/css">
th {
    text-align: center;
}
td {
    padding-left: 2px;
}
  </style>

</head>
<body style="font-family: Times">


<div style="margin-top:10px; text-align: center ; font-size: 20px;">Data Pengumunan</div>
<br> 

<table style="width: 100px; font-size: 12px; border-collapse: collapse;" border="1" >
                        <thead>
                            <tr style="background-color: #c7c9cc">

                                <th >No</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                                <th>Tempat</th>
                                <th>Unit Kerja</th>
                                <th>Hadir</th>
                                <th>Keterangan</th>
                                
                               
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php $i=1; ?>
                        <?php foreach ($data->result() as $row): ?>
                            <tr valign="top" >
                                <td style="width: 20px;text-align: center ; "> <?php echo $i;$i++;  ?></td>
                                <td style="width: 60px "><?php echo $row->tanggal;  ?></td>
                                <td style="width: 60px "><?php echo $row->waktu;  ?></td>
                                <td style="width: 200px "><?php echo $row->kegiatan;  ?></td> 
                                <td style="width: 80px "><?php echo $row->tempat;  ?></td>
                                <td style="width: 80px "><?php echo $row->unit_kerja;  ?></td>
                                <td style="width: 80px "><?php echo $row->hadir;  ?></td>                  
                                <td style="width: 100px "><?php echo $row->keterangan;  ?></td>
                                
                            </tr> 
                        <?php endforeach; ?>
                
                        </tbody>
                        
                    </table>





</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$this->load->view('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Agenda.pdf', 'D');
?>

 <script type="text/javascript">
            base_url="http://localhost/Stikom-Project/";
 </script>
