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

<div class="row">
  <div class="col-md-3 form-group">
    <label for="">top</label>
    <input type="number" class="form-control" name="a1" value="0">
  </div>
  <div class="col-md-3 form-group">
    <label for="">right</label>
    <input type="number" class="form-control" name="a2" value="0">
  </div>
  <div class="col-md-3 form-group">
    <label for="">bottom</label>
    <input type="number" class="form-control" name="a3" value="0">
  </div>
    <div class="col-md-3 form-group">
    <label for="">left</label>
    <input type="number" class="form-control" name="a4" value="0">
  </div>
  <div class="col-md-6 form-group">
    <label for="">categori</label>
    <select name="a5" id="inputA5" class="form-control">
      <option>padding</option>
      <option>margin</option>
      <option>border-radius</option>
    </select>
   </div>
   <div class="col-md-6 form-group">
   <label for="">tipe</label>
   <select name="a6" id="inputA6" class="form-control">
     <option>px</option>
     <option>%</option>
    </select>
  </div>

</div>
    </div>
  </div>
</div>

<script>

   $(document).keyup(function() {
     var a1=$('input[name=a1]').val();
     var a2=$('input[name=a2]').val();
     var a3=$('input[name=a3]').val();
     var a4=$('input[name=a4]').val();
     var a5=$('#inputA5 option:selected').text();
     var a6=$('#inputA6 option:selected').text();
     // Desain 1
     var design1 = `
          ${a5}: ${a1}${a6} ${a2}${a6} ${a3}${a6} ${a4}${a6};
       `;

     $("#code1").text(design1);
   });
</script>
<div class="row">
  <div class="col-md-8">
     <span id="code1"></span>
  </div>
  <div class="col-md-4 text-right">
    <button  type="button"  onclick="CopyToClipboard('code1')"class="btn btn-success">copy</button>
  </div>
</div>

 	<form name="form1" id="form1" action="" method="post">  
 	<div class="form-group">
 		<label for="">Editor Code</label>
 		<textarea name="a1" id="inputA1" class="form-control" rows="3"></textarea>
 	</div>
 
 	<button type="button" class="btn btn-primary"onclick="incode(); return false;">Submit</button>
 	<button  type="button"  onclick="CopyToClipboard('copy')"class="btn btn-success">copy</button>

 </form>
 <hr>
<div id="loading"></div>

        <script type="text/javascript">  
            function incode(){  
            	var hostID=('http://'+document.domain);
                $("#loading").html('loading...');  
                $.post(hostID+'/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/editorSend.php', $("form").serialize(), 
                	function(hasil){  
                    $("#loading").html(hasil);
                    $('form input[type="text"],form select,form textarea').val('');//kosongkan form
                    loadData(); //optional, untuk langsung menampilkan data
                });  
            }  



               // copy
function CopyToClipboard (containerid) {
 $(".copied").show().fadeOut(1200);
  // Create a new textarea element and give it id='temp_element'
  var textarea = document.createElement('textarea')
  textarea.id = 'temp_element'
  // Optional step to make less noise on the page, if any!
  textarea.style.height = 0
  // Now append it to your page somewhere, I chose <body>
  document.body.appendChild(textarea)
  // Give our textarea a value of whatever inside the div of id=containerid
  textarea.value = document.getElementById(containerid).innerText
  // Now copy whatever inside the textarea to clipboard
  var selector = document.querySelector('#temp_element')
  selector.select()
  document.execCommand('copy')
  // Remove the textarea
  document.body.removeChild(textarea)
}


        </script>
<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>

