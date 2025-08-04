<?php
    include "koneksi.php";
    $id  = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM ncage WHERE id = $id");
    $result = mysqli_fetch_array($query);
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/koppuskod.png" weight="150" height="150"><br><br>
<p style='margin-top:4.7pt;margin-right:-51.95pt;margin-bottom:.0001pt;margin-left:-1.0cm;font-size:27px;font-family:"Arial",sans-serif;font-weight:bold;text-decoration:underline;'>&nbsp;&nbsp;&nbsp;&nbsp;NCAGE&nbsp;DETAILS<u><span style="text-decoration:none;"></span></u> </p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-0.1pt;text-align:right;text-indent:-1.0cm;line-height:15.95pt;'><strong><span style="font-size:19px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['NCAGE'];?> - <?php echo $result['Entity_Name'];?></span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-0.1pt;text-align:right;text-indent:-1.0cm;line-height:15.95pt;'><strong><span style="font-size:19px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['Country'];?></span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-0.1pt;text-align:right;text-indent:-1.0cm;line-height:15.95pt;'><strong><span style="font-size:19px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Last Date <?php echo $result['Date_Last_Change_International'];?></span></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-35.45pt;text-indent:36.0pt;line-height:15.95pt;'><em><span style="font-size:14px;">&nbsp;</span></em></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General Information</strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________________________________________________</u></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong><u><span style="font-size:14px;"><span style="text-decoration:none;">&nbsp;</span></span></u></strong></p>
<table style="width:510.05pt;margin-left:-1.0cm;border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width: 854.9pt;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NCAGE </span></strong><strong><em><span style="font-size:14px;">Code</span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['NCAGE'];?></span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NCAGE </span></strong><strong><em><span style="font-size:14px;">Status</span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['NCAGESD'];?> - </span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Replacements</span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;"></span></em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">&nbsp;</span></em></strong></p><br>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;US F/DDC (US Foreign/Domestic Designator Code)</span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;"></span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</p><br>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State/Province/Canton (only if applicable)</span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['State'];?></span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><em><span style="font-size:14px;">&nbsp;</span></em></p>
            </td>
            <td style="width: 9cm;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><span style="font-size:14px;">NCAGE Name</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;"><?php echo $result['Entity_Name'];?></span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">Type of Entity</span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;"><?php echo $result['TOEC'];?> - </span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">Country</span></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;"><?php echo $result['Country'];?></span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><span style="font-size:14px;">&nbsp;</span></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><em><span style="font-size:14px;">Identification Number</span></em></strong><strong><span style="font-size:14px;"> (IDN)</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><span style="font-size:14px;"></span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><span style="font-size:14px;">&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><span style="font-size:14px;">&nbsp;</span></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-right:-23.6pt;line-height:15.95pt;'><strong><span style="font-size:14px;">&nbsp;</span></strong></p>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'>&nbsp;</p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Geographic Location</em></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________________________________________________</u></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em>&nbsp;</em></strong></p>
<table style="width:18.0cm;margin-left:-28.6pt;border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width: 954pt;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Street (Line 1)</em></strong></p>
                <p style='margin:0.6cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;<?php echo $result['Street'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['City'];?></em></strong></p>
            </td>
            <td style="width: 256.3pt;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Street (Line 2)</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postal Code</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['Post_Code'];?></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;</em></strong></p>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;</em></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Information</em></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________________________________________________</u></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em>&nbsp;</em></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em>&nbsp;</em></strong></p>
<table style="width:18.0cm;margin-left:-28.6pt;border-collapse:collapse;border:none;">
    <tbody>
        <tr>
            <td style="width: 254pt;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['telephone'];?></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['Email'];?></em></strong></p>
            </td>
            <td style="width: 256.3pt;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['fax'];?></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['website'];?></em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong></p>
                <p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong></p>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;margin-top:0cm;margin-right:-23.6pt;margin-bottom:.0001pt;margin-left:-1.0cm;line-height:15.95pt;'><strong><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________________________________________________</u></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;'><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong></p>
<p style='margin:0cm;font-size:15px;font-family:"Arial",sans-serif;text-indent:-1.0cm;'><strong><em>&nbsp;</em></strong></p>
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