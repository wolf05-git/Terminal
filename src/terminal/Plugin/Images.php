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

<table class="table table-hover">

	<tbody>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('images','favicon.png','40');</code></pre></td>
			<td><?php echo tatiyeNet::IMG('images','favicon.png','30')?></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('url-images','favicon.png');</code></pre></td>
			<td><?php echo tatiyeNet::IMG('url-images','favicon.png')?></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('url-img','favicon.png');</code></pre></td>
			<td><?php echo tatiyeNet::IMG('url-img','favicon.png')?></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('url-assets','favicon.png');</code></pre></td>
			<td><?php echo tatiyeNet::IMG('url-assets','favicon.png')?></td>
			<td></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('url-user','favicon.png');</code></pre></td>
			<td><?php echo tatiyeNet::IMG('url-user','favicon.png')?></td>
			<td></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('gravatar','ian.obet@gmail.com','40');</code></pre></td>
			<td><?php echo tatiyeNet::IMG('gravatar','ian.obet@gmail.com','40')?></td>
			<td></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('url-gravatar','ian.obet@gmail.com');</code></pre></td>
			<td><?php echo tatiyeNet::IMG('url-gravatar','ian.obet@gmail.com')?></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('favicon','https://tatiye.net');</code></pre></td>
			<td><?php echo tatiyeNet::IMG('favicon','https://tatiye.net')?></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('url-favicon','https://tatiye.net');</code></pre></td>
			<td><?php echo tatiyeNet::IMG('url-favicon','https://tatiye.net')?></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('api-imgEncode','40x40/images/favicon.png');</code></pre></td>
			<td><img src="<?php echo tatiyeNet::IMG('api-imgEncode','40x40/images/favicon.png');?>"></td>
			<td></td>
		</tr>
		<tr>
			<td>Atribut : <code>images | upload | id</code></pre></td>
			<td><?php echo tatiyeNet::IMG('api-imgEncode','40x40/images/favicon.png');?></td>
			<td></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::URL('img?tn=100x80');</code></pre></td>
			<td><img src="<?php echo tatiyeNet::URL('img?tn=100x80')?>"></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::URL('img?tn=100x80/4099FE');</code></pre></td>
			<td><img src="<?php echo tatiyeNet::URL('img?tn=100x80/4099FE')?>"></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::URL('img?tn=100x80/009688/fff.png');</code></pre></td>
			<td><img src="<?php echo tatiyeNet::URL('img?tn=100x80/009688/fff.png')?>"></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::URL('img?tn=100x80/F50057/fff&text=TN');</code></pre></td>
			<td><img src="<?php echo tatiyeNet::URL('img?tn=100x80/F50057/fff&text=TN')?>"></td>
			<td></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('Gender','L');</code></pre></td>
			<td><img style="width: 100px;"src="<?php echo tatiyeNet::IMG('Gender','L');?>"></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('Gender','L','titel')</code></pre></td>
			<td><?php echo tatiyeNet::IMG('Gender','L','titel');?></td>
			<td></td>
		</tr>


		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('Gender','P');</code></pre></td>
			<td><img style="width: 100px;"src="<?php echo tatiyeNet::IMG('Gender','P');?>"></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('Gender','P','titel')</code></pre></td>
			<td><?php echo tatiyeNet::IMG('Gender','P','titel');?></td>
			<td></td>
		</tr>
 		<tr>
			<td><pre><code class="language-js">tatiyeNet::IMG('account');</code></pre></td>
			<td><img style="width: 100px;"src="<?php echo tatiyeNet::IMG('Account');?>"></td>
			<td></td>
		</tr>


	</tbody>
</table>
<b>Flat Icon Sosmed</b>
 <table class="table table-hover">
 	<tbody>
<?php 
  foreach(tatiyeNet::Icon('Flaticon') as $x => $x_value) {
 ?>
   		<tr>
			<td><pre><code class="language-js">tatiyeNet::Icon('svg','<?php echo $x_value?>');</code></pre></td>
			<td><img style="width:60px;"src="<?php echo tatiyeNet::Icon('svg',$x_value)?>"></td>
			<td></td>
		</tr>
       
<?php }?>

 	</tbody>
 </table>
<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>

