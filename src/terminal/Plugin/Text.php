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
			<td><pre><code class="language-js">tatiyeNet::Text('replace',['Text Format','@']);</code></pre></td>
			<td><?php echo tatiyeNet::Text('replace',['Text Format','@']);?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::Text('strtolower','Text Format');</code></pre></td>
			<td><?php echo tatiyeNet::Text('strtolower','Text Format');?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::Text('ucfirst','text format');</code></pre></td>
			<td><?php echo tatiyeNet::Text('ucfirst','text format');?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::Text('strtoupper','Text Format');</code></pre></td>
			<td><?php echo tatiyeNet::Text('strtoupper','Text Format');?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::Text('ucwords','text format');</code></pre></td>
			<td><?php echo tatiyeNet::Text('ucwords','Text Format');?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::Text('strreplace',['Text Format','-']);</code></pre></td>
			<td><?php echo tatiyeNet::Text('strreplace',['Text Format','-']);?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::Text('substr',['Text Format',0,4]);</code></pre></td>
			<td><?php echo tatiyeNet::Text('substr',['Text Format',0,4]);?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::Text('numberFormat',[100000,1]);</code></pre></td>
			<td><?php echo tatiyeNet::Text('numberFormat',[100000,1]);?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::Text('beCalculated',[1500000,'Rp']);</code></pre></td>
			<td><?php echo tatiyeNet::Text('beCalculated',[1500000,'Rp']);?></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::Text('romawi','12');</code></pre></td>
			<td><?php echo tatiyeNet::Text('romawi','12');?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::Text('shorten',['Lorem ipsum dolor','12']);</code></pre></td>
			<td><?php echo tatiyeNet::Text('shorten',['Lorem ipsum dolor','12']);?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::Text('sizeUnits','1048576');</code></pre></td>
			<td><?php echo tatiyeNet::Text('sizeUnits','1048576');?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::folderSize('wolf05');</code></pre></td>
			<td><?php echo tatiyeNet::folderSize('wolf05');?></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::generatePassword();</code></pre></td>
			<td><?php echo tatiyeNet::generatePassword();?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::Text('ekstensi','documen.php');</code></pre></td>
			<td><?php echo tatiyeNet::Text('ekstensi','documen.php');?></td>
		</tr>


	</tbody>
</table>

<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>