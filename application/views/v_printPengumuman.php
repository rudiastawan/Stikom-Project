
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

<table style="width: 100px; font-size: 15px; border-collapse: collapse;" border="1" >
                        <thead>
                            <tr style="background-color: #c7c9cc">

                                <th >No</th>
                                <th >Informasi</th>
                                <th >Tanggal mulai</th>
                                <th >Tanggal selesai</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php $i=1; ?>
                        <?php foreach ($data->result() as $row): ?>
                            <tr valign="top" >
                                <td style="width: 20px "> <?php echo $i;$i++;  ?></td>
                                <td style="width: 490px "> <?php echo $row->informasi;  ?></td>
                                <td style="width: 100px "> <?php echo $row->mulaipengumuman;  ?></td>
                                <td style="width: 100px "> <?php echo $row->akhirpengumuman;  ?></td> 
                                
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
$pdf->Output('Data Pengumuman.pdf', 'D');
?>

 <script type="text/javascript">
            base_url="http://localhost/Stikom-Project/";
 </script>
