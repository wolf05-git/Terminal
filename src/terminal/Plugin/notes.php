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

<table class="table">
	<thead>
		<tr>
			<th>Code</th>
			<th>list code</th>
			<th>deskrip</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<pre><code class="language-css">$(".Terminal03app").hide();</code></pre>
			</td>
			<td >
				<ol>
				<li>$().hide();</li>
				<li>$().remove(); </li>
				<li>$().show();</li>
				<li>$().fadeOut();</li>
				<li>$().fadeIn();</li>
                <li>$().append();</li>
                <li>$().prepend();</li>
                <li>$().after();</li>
                <li>$().before();</li>
                <li>$().remove();</li>
			</ol> 
		   </td>
			<td><code>.Terminal03app</code> dalah selektor yang akan di intervensi melalui beberapa catatan list code</td>
		</tr>
	</tbody>
</table>
<b>Close Dialog</b>
<table class="table">
	<tbody>
		<tr>
			<td >
				<pre>
					<code class="language-css">
 $("#close1").click(function(){
  $('.Terminal03app').css('display', 'none');
  $(".Terminal03app").hide();
});
				    </code>
			     </pre>
			</td>
		</tr>
	</tbody>
</table>

<b>Kosongkan form input</b>
<table class="table">
	<tbody>
		<tr>
			<td >
				<pre><code class="language-css">$('form input[type="text"],form select,form textarea').val('');</code></pre>
				<pre><code class="language-css">$('#WFform').resetForm();</code></pre>
			</td>
		</tr>
	</tbody>
</table>

	<b>Catatan</b>
	<p>Penaganan file Insert forum SendDestroyLoader </p>
<table class="table">
	<tbody>
		<tr>
			<td>
				<pre><code class="language-css">
				$(document).ready(function(){
					var forumID="&lt;php echo $segment[5]?&gt;";
					switch (forumID) {
					    case "sukses":
					        $(".Terminal03app").hide();
					         // alert('&lt;?php echo $H1?&gt;');
					        break;
					    case "gagal":
					          // $('[name=a1]').css('border','1px solid red');
					        break;
					}
				});		
				</code></pre>				
			</td>
		</tr>
	</tbody>
</table>
<b>Script</b>
<table class="table table-hover">
	<tbody>
<tr>
 <td>
    <pre><code class="language-css">var hostID=('https://'+document.domain);</code></pre>
 </td>
  <td>Teknik deteksi domain lokasi ulr</td>
</tr>
<tr>
 <td>
    <pre><code class="language-css">var pageURL = $(location).attr("href");</code></pre>
 </td>
  <td>Teknik deteksi domain lokasi ulr</td>
</tr>

<tr>
 <td>
 <pre><code class="language-css">var result=data.split('/');</code></pre>
 </td>
  <td>Teknik Exploide array </td>
</tr>
<tr>
	<td>
	  <pre><code class="language-css">$("#tampil").load('https://dantrik.com/Ginuh/forum #tampil')</code></pre>
	</td>
	  <td>Teknik load refres </td>
</tr>
<tr>
	<td>
	  <pre><code class="language-css">
var name  =  $(this).find("p strong").html();
$("#profileFWc p").html(name);
	  </code></pre>
	</td>
	  <td>Mengambi Informasi dari selector </td>
</tr>

	<td>
	  <pre><code class="language-css">
function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}
var Number  =(formatNumber('100000'));
$("#IDpaket").html(Number);
	  </code></pre>
	</td>
	  <td>Number Format </td>
</tr>


	</tbody>
</table>
<b>Scrip notification</b>
<pre><code class="language-css">
$("#notificationIMG").attr('src', 'https://image.flaticon.com/icons/svg/925/925012.svg');
$('#notificationTITEL').html('<b>&lt;?php echo $_SESSION['SESS_FIRST_NAME']?&gt;</b><br> Anda mengaktifkan  Notifikasi <br> <small>1 detik detik</small>');
$('#chatAudio').trigger('play');
$('#notification').fadeIn('slow').delay(1400).fadeOut('slow');

</code></pre>
<b>Loder Bar</b>
<pre><code class="language-js">
&lt;div class=&quot;WFprogress&quot;&gt;
  &lt;div class=&quot;WFbar&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
   </code>
</pre>
<b>SetTimeout</b>
<pre>
	<code class="language-js">
var destroyLoader = setTimeout(function(){
// taru disini codenya
}, 2000);
   </code>
</pre>
<b>cookie</b>
<pre>
	<code class="language-js">
$(document).ready(function(){
   Cookies.set('name', 'value1', { expires: 4 });
    var add=Cookies.get('name');
   $('#nugi').text(add);
});
   </code>
</pre>

<b>Date Format</b>
<pre>
	<code class="language-js">
  var date = new Date();
  var bln = new Array();
      bln[1]='Januari'; 
      bln[2]='Februari';
      bln[3]='Maret';  
      bln[4]='April'; 
      bln[5]='Mei'; 
      bln[6]='Juni'; 
      bln[7]='Juli'; 
      bln[8]='Agustus'; 
      bln[9]='September'; 
      bln[10]='Oktober'; 
      bln[11]='November'; 
      bln[12]='Desember'; 
      var nama_hari = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"]; 
      var bulan       = ((date.getMonth()+1) < 10 ? '0' : '') + (date.getMonth()+1);
      var tgl         = (date.getDate() < 10 ? '0' : '') + date.getDate();
      var hari        = nama_hari[bulan];
      var Bulan       = bln[date.getMonth()];
      var strtgl      = date.getFullYear() + "/" + bulan + "/" + date.getDate();
      var tahun       = date.getFullYear();

   </code>
</pre>

<b>referensi</b>
<pre>
	<code class="language-js">
$(document).ready(function(){
  var preloadbg = document.createElement("img");
  preloadbg.src = "";

  $(".chatList").each(function(){   
    $(this).click(function(){
      var childOffset = $(this).offset();
      var parentOffset = $(this).parent().parent().offset();
      var childTop = childOffset.top - parentOffset.top;
      var clone =  $(this).find('#img').eq(0).clone();
       //$(clone).appendTo("#chatbox");  

      var keyID =  $(this).find("samp3").text(); 
        $('#keyID').val(keyID); // Set
        //$("#barID").css('display', 'none');
        //$(".active"+keyID).addClass('active'); 
    });
  });     
}); 

   </code>
</pre>

<b>setcookie</b>
<pre>
	<code class="language-js">
 setcookie('theme', 'dantrik', strtotime('+7 days'), '/');
 echo $_COOKIE['theme'];


   </code>
</pre>
<b>Persentase javascrip</b>
<pre>
	<code class="language-js">
	var versentase= Math.round((value.active/883548) *100).toFixed(1);
   </code>
</pre>

<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>