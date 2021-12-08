<pre>
    <table width="100%">
    <tr align="center">
        <td align="center">
            <hr><width="100" height="75"></hr>
            <center><b><font size="5" face="arial">AR PRINTING</font><b></center>
            <center><b><font size="4" face="Courier New">LAPORAN KEUANGAN</font></b></center>
            <center><b><?php
            $tanggalAwal = date('d-m-Y', strtotime($_POST['start']));
            $tanggalAkhir = date('d-m-Y', strtotime($_POST['end']));
            echo "Periode ".$tanggalAwal." sampai ".$tanggalAkhir."</br>";
            ?><b></center>     
            <center><b>Jl. Bintara 8 no. 2 Madiun <b></center>
            <hr><width="100" height="75"></hr>       
        </b></p><br>
        </td>
    </tr>
    </table>
    <table style="width=100%;" border="1" align="center">
        <tr align="center">
            <td> No </td>
            <td> No Nota </td>
            <td> Nama Pelanggan </td>
            <td> Tanggal </td>
            <td> Bayar </td>
            <td> Kembalian </td>
            <td> Sub Total </td>
        </tr>
        <?php 
            $no = 1;
            foreach($query->result() as $row){
                echo "<tr>
                    <td>".$no."</td>
                    <td>".$row->id_transaksi."</td>
                    <td>".$row->pelanggan."</td>
                    <td>".$row->tanggal."</td>
                    <td>".$row->bayar."</td>
                    <td>".$row->kembali."</td>
                    <td>".$row->total."</td>
                </tr>";
                $no++;
            } 
        ?>
    </table>
    <table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="right">Madiun, <?php echo date('d-M-Y')?></td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>
   
    <tr>
    <td><br/><br/></td>
    </tr>    
    <tr>
        <td align="right"> ( <?php echo $this->session->userdata('username');?> )</td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
</pre>