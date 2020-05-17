<?php 
$PATH     =$_SERVER['DOCUMENT_ROOT'];
$ROOT = array(
    'path'          => $PATH,
    'wolf05'        => $PATH.'/wolf05',
    'system'        => $PATH.'/wolf05/application/system/Wofl05require.php',
    'plugin'        => '/wolf05/application/assets',
);
require_once($ROOT['system']);
use wolf05\helper\tatiyeNet;
  $FLR=$Config['base_url'].$ROOT['plugin'];
  tatiyeNet::DirStyle($FLR,'clipboard.min.js');
  tatiyeNet::DirStyle($FLR,'wolf05.css');
  
/*
|--------------------------------------------------------------------------
| Initializes ESPLOID IF POST GET 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
  $EXPLODE= $_GET['tn'];
  $SEGMENT=explode('/',$EXPLODE);

?>

<?php
$x = 1;
while($x <= 730) {
?>
<span style="padding: 10px;"id="copy"data-clipboard-text='<i class="picons-<?php echo $x; ?>"></i>'><i style="font-size:30px;"class="picons-<?php echo $x; ?>"></i> </span>
<?php    
 $x++;
}?>
 <hr>
<?php
$x1 = 1;
while($x1 <=375) {
?>
<span style="line-height:3.8;width:80px;height:50px; "id="copy"data-clipboard-text='<i class="ti-<?php echo $x1; ?>"></i>'><i style="font-size:30px; color: #4F5050"class="ti-<?php echo $x1; ?>"></i> </span>
<?php    
 $x1++;
}?>


<table class="table">
    <thead>
        <tr>
            <th>Code </th>
            <th>Hasil</th>
            <th>Vendor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><pre><code class="language-js">&lt;i class="WFicon1 mdi \f15d"&gt;&lt;/i&gt; </code></pre></td>
            <td><i class="WFicon1 mdi \f15d"></i></td>
            <td>
              <a class="page-scroll" href="https://materialdesignicons.com/cdn/2.0.46/" target="_blank">MDI</a>
           </td>
        </tr>
         <tr>
            <td><pre><code class="language-js">&lt;i class="WFicon1 mdi \f139 mdi-48px"&gt;&lt;/i&gt; </code></pre></td>
            <td><i class="WFicon2 mdi \f139 mdi-48px"></i></td>
            <td></td>
        </tr>
         <tr>
            <td><pre><code class="language-js">&lt;i class="WFicon1 mdi \f773 fs-48 cr-F4511E"&gt;&lt;/i&gt; </code></pre></td>
            <td><i class="WFicon3 mdi \f773 fs-48 cr-F4511E"></i></td>
            <td></td>
        </tr>


         <tr>
            <td><pre><code class="language-js">&lt;i class="WFsvg1 Facebook 40"&gt;&lt;/i&gt; </code></pre></td>
            <td> <i class="WFsvg30 Facebook 40"></i></td>
            <td></td>
        </tr>






    </tbody>
</table>
<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>

