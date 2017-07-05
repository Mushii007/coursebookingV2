<?php
require_once dirname(__FILE__).'/Html2Pdf/vendor/autoload.php';
//echo dirname(__FILE__).'/html2Pdf/vendor/autoload.php';
//$html = '';
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Debug\DebugInterface;

    // ob_start();
    // include dirname(__FILE__).'/html.html';
    // $content = ob_get_clean();

$html = '<div class="maindiv" style="width:100%">
<table style="width:100%" cellspacing="0">
<tr>
<td style="border: 1px solid #000;width: 33%;">
<div style="float:left;width:100%;" id ="col1">
<table >
          <tbody><tr>
              <td style="font-size:10px; height:20; align:center; width:85%">                            
              User: Mustabshir - Division: Karachi - Beat: FB Area - Date: '.date("d-m-Y h:i:s").'</td>
          </tr>
          <tr>
              <td style="font-weight:bold;font-size:10px;height:41;align:center; width:65%">
                DISTRICT PROVINCIAL ACCOUNT NO. I<br>
                120-121 PROPERTY TAX (Yes) 
              </td>
          </tr>
          <tr>
              <td style="font-weight:bold;font-size:10px;height:33%; text-align:left;">
                <div style="float:left;font-size:8px;">
                  DIVISION __<u>DD</u>
                  <br><br>
                  <span style="padding:8px; border:1px solid black; font-size:8px;">
                        HO A/C B01301
                  </span>
                </div>
                <div style="float:right; font-size:7px;font-weight:bold; margin: -20px 0px 0px 250px;">
                  NAME OF TOWN __<u>Dastagir</u>
                  <br><br>
                  <span style="padding:8px; border:1px solid black; font-size:8px;">
                        RCO CODE - ECO-5214
                  </span>
                </div>
              </td>
          </tr>
          <tr>
              <td style="font-weight:bold;font-size:11px; text-align:center;">FORM P.T.10 </td>
          </tr>
          <tr>
            <td style="font-weight:bold;font-size:10px; text-align:center;">[See Rules 15 (4) and (5)]<br>
              Original (to be returned to the Assessing Authority)<br>
              The Sindh Urban Immovable Property Tax, Act, 1958</td>
          </tr>
          <tr>
            <td style="font-size:10px;text-align:right">Treasury ____________________________  <br>
              Sub-Treasury ________________________ </td>
          </tr>

          </tbody>
          </table>

</div>
</td>
<td style="border: 1px solid #000;width: 33%;">
<div style="float:left;width:100%;" id ="col2"></div>
</td>
<td style="border: 1px solid #000;
    width: 33%;">
<div style="float:left;width:100%;" id ="col3"></div>


 </td>

</tr>


</table>

</div>';

$html2pdf = new \Spipu\Html2Pdf\Html2Pdf('L', 'A4', 'en');
$html2pdf->writeHTML($html);
$html2pdf->output();


?>
<!-- <table style="width:100%">
<tr style="float:left;border:1px solid #000;">
<td style="font-size:10px; height:20; align:center; width:85%;border:1px solid #000;">                            
User: Mustabshir - Division: Karachi - Beat: FB Area - Date: '.date("d-m-Y h:i:s").'</td>

</tr>
          <tr>
              <td style="border:1px solid #000;font-weight:bold;font-size:10px;height:41;align:center; width:65%">
                DISTRICT PROVINCIAL ACCOUNT NO. I<br>
                120-121 PROPERTY TAX (Yes) 
              </td>
          </tr>
</table>
 -->
<!-- <td style="width:33%;border:1px solid #000;">akjlkasjlsa</td>
<td style="width:33%;border:1px solid #000;">akjlkasjlsa</td>
<td style="width:33%;border:1px solid #000;">akjlkasjlsa</td>
 -->
<!-- 
 <table style="width:100%">
<tr>
<td style="font-size:10px;border:1px solid #000; height:20; align:center; width:33%;border-collapse: collapse;">
<div style="float:left; width:100%;border:1px solid #000;" id ="col1">
<p>kklsdjfds</p>

</div>
</td>
<td style="font-size:10px;border:1px solid #000; height:20; align:center; width:33%;border-collapse: collapse;">
<div style="float:left;width:100%;border:1px solid #000;" id ="col1">
<p>kklsdjfds</p>

</div>
</td>
<td style="font-size:10px; border:1px solid #000;height:20; align:center; width:33%;border-collapse: collapse;">
<div style="float:left;width:100%;border:1px solid #000;" id ="col1">
<p>kklsdjfds</p>
</div>
</td>
</tr>
</table> -->