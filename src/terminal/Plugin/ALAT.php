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
 <script type="text/javascript">
$(document).ready(function(){
	 var hostID=('http://'+document.domain);
      $.getJSON(hostID+"/api?tn=terminal/git/json", 
      function(data){
      $.each(data, function (index, value) {
             if (value['id']=='alat') {
                  $.each(value.des, function (i, code) {
                    
                    var design = `
                      <tr>
                        <td ><img style="width:30px;"style="width:30px;"src="https://www.google.com/s2/favicons?domain=${code.ulr}"></td>
                        <td><a style="color:#000;"href="${code.ulr}" target="_blank">${code.id}</a></td>
                      </tr>
                    `;
                    $('#mytabel tbody').append(design);
                  });
             }
      });
    });
});
</script>
<table class="table" id="mytabel">
  <tbody>
  </tbody>
</table>
<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>