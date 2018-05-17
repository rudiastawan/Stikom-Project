
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


<div style="margin-top:10px; text-align: center ; font-size: 18px;">Data Surat Masuk Kartu Kendali</div>
<br> 

<table style="width: 100px; font-size: 13px; border-collapse: collapse;" border="1" >
                        <thead>
                            <tr style="background-color: #c7c9cc">

                                <th >No</th>
                                <th >No surat</th>
                                <th >Index surat</th>
                                <th >Tanggal surat</th>
                                <th >Periode surat</th>
                                <th >Asal Surat</th>
                                <th >Tujuan surat</th>
                                <th>Sifat surat</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php $i=1; ?>
                        <?php foreach ($data->result() as $row): ?>
                            <tr valign="top" >
                                <td style="width: 20px "> <?php echo $i;$i++;  ?></td>
                                <td style="width: 98px "> <?php echo $row->no_surat;  ?></td>
                                <td style="width: 80px "> <?php echo $row->index_surat;  ?></td>
                                <td style="width: 95px "> <?php echo $row->tanggal_surat;  ?></td> 
                                <td style="width: 95px "> <?php echo $row->tanggal_surat;  ?></td>
                                <td style="width: 110px "> <?php echo $row->asal_surat;  ?></td>
                                <td style="width: 120px "> <?php echo $row->tujuan_surat;  ?></td>                  
                                <td style="width: 68px "> <?php echo $row->sifat_surat;  ?></td>
                                
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
$pdf->Output('Data Surat.pdf', 'D');
?>

 <script type="text/javascript">
            base_url="http://localhost/Stikom-Project/";
 </script>
