<?php
    include "koneksi.php";
    $id  = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM nsn45 WHERE id = $id");
    $result = mysqli_fetch_array($query);
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/koppuskod.png" weight="150" height="150"><br><br>
<p style='margin-top:4.7pt;margin-right:-51.95pt;margin-bottom:.0001pt;margin-left:-1.0cm;font-size:27px;font-family:"Arial",sans-serif;font-weight:bold;text-decoration:underline;'>&nbsp;&nbsp;&nbsp;&nbsp;NSN&nbsp;DETAILS<u><span style="text-decoration:none;"></span></u> </p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-0.1pt;text-align:right;text-indent:-1.0cm;line-height:15.95pt;'><strong><span style="font-size:19px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['NSN'];?></span></strong></p>
<p style='margin:0.1cm;font-size:15px;font-family:"Arial",sans-serif;margin-left:-0.1pt;text-align:left;text-indent:-1.0cm;line-height:15.95pt;'><strong><span style="font-size:19px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Owner : INDONESIA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Assignment Date</i> : <?php echo $result['Date_of_NIIN_Assignment'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i>Last Update</i> : <?php echo $result['Date_last_change'];?></span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-35.45pt;text-indent:36.0pt;line-height:15.95pt;'><em><span style="font-size:14px;">&nbsp;</span></em></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i> Entity Name : <?php echo $result['Manufacturer_Name'];?> </i></strong></p><br>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i> Item Identifiaction & Classification </i></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________________________________________________</u></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong><u><span style="font-size:14px;"><span style="text-decoration:none;">&nbsp;</span></span></u></strong></p>
<table style="width:510.05pt;margin-left:-1.0cm;border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width: 854.9pt;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>NCAGE</i></span></strong><strong><em><span style="font-size:14px;"> Code</span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['NCAGE'];?></span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>REFERENCE</i></span></strong><strong><em><span style="font-size:14px;">Status</span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['Reference'];?></span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>FSC</i></span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;"></span></em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['NSC'];?></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">&nbsp;</span></em></strong></p><br>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>NIIN</i></span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['NIIN'];?></p><br>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i> INC</i></span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['INC'];?></span></em></strong></p><br>
            </td>
            <td style="width: 654pt;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;"><i>Item Name</i></span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;"><?php echo $result['Item_Name'];?> - </span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;"><i>Date Of NIIN Assignment</i></span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;"><?php echo $result['Date_of_NIIN_Assignment'];?></span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;"><i>Date Last Change</i></span></em></strong><strong><span style="font-size:14px;"></span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;"></span><?php echo $result['Date_last_change'];?></p><br>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;"><i>NSN</i></span></em></strong><strong><span style="font-size:14px;"></span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;"></span><?php echo $result['NSN'];?>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;"><i>FIIG</i></span></em></strong><strong><span style="font-size:14px;"></span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;"></span><?php echo $result['FIIG'];?><br>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'>&nbsp;</p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Registered Users</i></em></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________________________________________________</u></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em>&nbsp;</em></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i> <?php echo $result['Country'];?> (IDN)</i></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;</em></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>References (1)</i></em></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________________________________________________</u></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em>&nbsp;</em></strong></p>
<table style="float: left;border-collapse: collapse;border: none;margin-left: 6.75pt;margin-right: 6.75pt;width: 908px;">
    <tbody>
        <tr>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:9px;">NCAGE</span></strong></p>
            </td>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:9px;"><i>Reference Number</i></span></strong></p>
            </td>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:9px;">RNSC</span></strong></p>
            </td>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:9px;">RNCC</span></strong></p>
            </td>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:9px;">RNVC</span></strong></p>
            </td>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:9px;">DAC</span></strong></p>
            </td>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:9px;">RNFC</span></strong></p>
            </td>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:9px;">RNJC</span></strong></p>
            </td>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;border-left:  none;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:9px;">RNAAC</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;border-top:  none;padding:0cm 5.4pt 0cm 5.4pt;height:21.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;"><?php echo $result['NCAGE'];?></span></strong></p>
            </td>
            <td style="width:10.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;"><?php echo $result['Reference'];?></span></strong></p>
            </td>
            <td style="width:10.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;"><?php echo $result['RNSC'];?></span></strong></p>
            </td>
            <td style="width:10.55pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;"><?php echo $result['RNCC'];?></span></strong></p>
            </td>
            <td style="width:10.55pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;"><?php echo $result['RNVC'];?></span></strong></p>
            </td>
            <td style="width:10.55pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;"><?php echo $result['DAC'];?></span></strong></p>
            </td>
            <td style="width:10.55pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;"><?php echo $result['RNFC'];?></span></strong></p>
            </td>
            <td style="width:10.55ptborder-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;">-</span></strong></p>
            </td>
            <td style="width:10.55pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.95pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;"><?php echo $result['RNAAC'];?></span></strong></p>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________________________________________________</u></strong></p><br>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Encoded Charateristics</i></em></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________________________________________________</u></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em>&nbsp;</em></strong></p>
<table style="float: left;border-collapse: collapse;border: none;margin-left: 6.75pt;margin-right: 6.75pt;width: 908px;">
    <tbody>
        <tr>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;"><i>NCAGE</i></span></strong></p>
            </td>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;"><?php echo $result['NCAGE'];?> </span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;"><i>ITEM NAME</i></span></strong></p>
            </td>
            <td style="width:10.55pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;line-height:normal;'><strong><span style="font-size:13px;"><?php echo $result['Item_Name'];?> </span></strong></p>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________________________________________________</u></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em>&nbsp;</em></strong></p><br><br><br><br><br><br><br><br>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:.85pt;margin-right:-66.1pt;margin-bottom:.0001pt;margin-left:1.2pt;text-indent:-29.55pt;'><strong><span style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PUSKOD BARANAHAN KEMHAN 
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:.85pt;margin-right:-66.1pt;margin-bottom:.0001pt;margin-left:1.2pt;text-indent:-29.55pt;'><strong><span style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RT.6/RW.6, Pd. Labu, Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12450
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:.85pt;margin-right:-66.1pt;margin-bottom:.0001pt;margin-left:1.2pt;text-indent:-29.55pt;'><strong><span style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor Pelayanan : 081288824545

<script>
    window.print();
    var result = "";
    var info_id = $(this).data('id');
    switch (info_id) {
    case "A" : 
        result = "ACTIVE RECORD";
    break;
    case "Y" :
        result = "ACTIVE SPECIALIZED USE RECORD";
    break;
    case "H" : 
        result = "OBSOLETE / Invalid";
    break;
    case "R" :
        result = "REPLACED OR CONVERTED RECORD, WITH REPLACEMENT: Entity discontinued and replaced by one or more successor firm(s) or the NCAGE has been converted from a generic code with an 'S' prefix to a national NCAGE assigned by the nation where the entity is located. Refer to replacement NCAGE Code(s).";
    break;
    case "E" :
        result = "ACTIVE RECORD BUT DEBARRED IN USA: The entity shown is debarred, suspended or proposed for debarment in the U.S. NOTE: After the eligibility of the entity has been reinstated, the status code will be changed to indicate that the entity is active. Debarred NCAGEs may be considered active records for all countries except the U.S. and the U.S. will assign NSNs to debarred NCAGEs at the request of other countries.";
    break;
    case "U" :
        result = "ACTIVE SPECIALIZED USE RECORD: Code is assigned to an entity that represents other various companies for various reasons. The compnay being represented will usually have their own specific NCAGE Code assigned. (Do not use for cataloging purposes). Note: For US use only";
    break;
    case "T" :
        result = "ACTIVE SPECIALIZED USE RECORD: Entity is a Joint Venture Comany.";
    break;
    case "W" :
        result = "ACTIVE SPECIALIZED USE RECORD: NCAGE Code assigned to an individual employed by a company where that induvidual performs contrated work in his own name separate from the company location. Address on this record may by different than the address of the company itself. (Do not use for cataloging purposes). Note: For US use only";
    break;
    case "M" :
        result = "ACTIVE SPECIALIZED USE RECORD: NCAGE Code is referenced to a special numbering system, developed by the Government, used in conjunction with the identification of codification data in the TIR. This code is used only by Canada, Denmark and the United States. Note: For US use only";
    break;
    case "C" :
        result = "ACTIVE SPEZIALIZED USE RECORD: Do not use for codification purposes. Use the NCAGE code as indicated. Used by the procurement officials in cases where the design control entity is different form the manufacturer. Note: For US use only";
    break;
    default :
        result = "ID TIDAK DITEMUKAN";
    break;
    }
    // alert(result);
    Swal.fire({
    text: result,
    });
</script>