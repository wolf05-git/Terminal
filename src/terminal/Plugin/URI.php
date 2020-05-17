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
			<td><pre><code class="language-js">tatiyeNet::URL()</code></pre></td>
			<td><?php echo tatiyeNet::URL();?></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::URL('home')</code></pre></td>
			<td><?php echo tatiyeNet::URL('home')?></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::ULRsession()</code></pre></td>
			<td><?php echo tatiyeNet::ULRsession()?></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::ULRsession('foto')</code></pre></td>
			<td><?php echo tatiyeNet::ULRsession('foto')?></td>
			<td></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::ULRunset()</code></pre></td>
			<td><?php echo tatiyeNet::ULRunset()?></td>
			<td></td>
		</tr>

		
		<tr>
			<td><pre><code class="language-js">tatiyeNet::URLstep('3')</code></pre></td>
			<td><?php echo tatiyeNet::URLstep('3')?></td>
			
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::ULRstepget('2','page')</code></pre></td>
			<td><?php echo tatiyeNet::ULRstepget('2','page')?></td>
			
		</tr>
		<tr>
			<td><pre><code class="language-js">SEGMENT_2</code></pre></td>
			<td><?php echo SEGMENT_2?></td>
			
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::ULRspesial('3','page')</code></pre></td>
			<td><?php echo tatiyeNet::ULRspesial('3','page')?></td>
			
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::URLdirektori('package','page')</code></pre></td>
			<td><?php echo tatiyeNet::URLdirektori('package','/page')?></td>
			
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::URIseparator('package','page')</code></pre></td>
			<td><?php echo tatiyeNet::URIseparator('package','/page')?></td>
		</tr>

	</tbody>
</table>
<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>