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
<pre>
	<code class="language-js">

    var dataID = 'id='+ id +'&forum='+2;
    jQuery.ajax({
      url: "https://dantrik.com/send/Getupdate",
      data: dataID, 
      type: "POST",
      success:function(data){
        $('#data').html(data); 
      }
    });

   </code>
</pre>

<pre>
	<code class="language-js">
function Getupdate(id) {
    var dataID = 'id='+ id +'&forum='+2;
    jQuery.ajax({
      url: "https://dantrik.com/send/Getupdate",
      data: dataID, 
      type: "POST",
      success:function(data){
        $('#data').html(data); 
      }
    });
  }
   </code>
</pre>

<pre>
	<code class="language-js">
$("#simpan").click(function(){
    var data = $('#form').serialize();
    $.ajax({
        type: 'POST',
        url: "https://dantrik.com/send/insert",
        data: data,
        success: function(Insert) {
            $('#data').html(Insert); 
        }
    });
});
   </code>
</pre>


<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>