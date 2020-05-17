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
			<td>Theme/Admin</td>
			<td><pre><code class="language-js">tatiyeNet::Stylesheet("jquery.min.js")</code></pre></td>
		</tr>
		<tr>
			<td>Condisonal Admin</td>
			<td><pre><code class="language-js">tatiyeNet::StylesheetAdmin("jquery.min.js")</code></pre></td>
		</tr>
		<tr>
			<td>Condisonal</td>
			<td><pre><code class="language-js">tatiyeNet::DirStyle('ulr location','jquery.min.js')</code></pre></td>
		</tr>
		<tr>
			<td>dir assets</td>
			<td><pre><code class="language-js">tatiyeNet::Stylesheet('assets',"jquery-ui.min.js")</code></pre></td>
		</tr>

		<tr>
			<td>Mobile</td>
			<td><pre><code class="language-js">tatiyeNet::StylesheetMobile("style.css")</code></pre></td>
		</tr>

	</tbody>
</table>
<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>