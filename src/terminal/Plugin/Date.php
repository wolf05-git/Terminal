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
					<td><pre><code class="language-js">tatiyeNet::Format("Time");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Time");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Time-zone:Makassar");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Time-zone:Makassar");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Time-ds:H:i:sa");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Time-ds:H:i:sa");;?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Time-ds:H:i:a");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Time-ds:H:i:a");;?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Time-ds:H:i:s");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Time-ds:H:i:s");;?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Time-ds:H:i");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Time-ds:H:i");;?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Time-ds:h:i:s A");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Time-ds:h:i:s A");;?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Date");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Date");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("IN");</code></pre></td>
					<td><?php echo tatiyeNet::Format("IN");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("EN");</code></pre></td>
					<td><?php echo tatiyeNet::Format("EN");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Date-ds:d/m/Y");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Date-ds:d/m/Y");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Date-ds:d");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Date-ds:d");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Date-ds:m");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Date-ds:m");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Date-ds:Y");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Date-ds:Y");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Date-time");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Date-time");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Date-time:IN");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Date-time:IN");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("Date-time:EN");</code></pre></td>
					<td><?php echo tatiyeNet::Format("Date-time:EN");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("DT-:d-m-Y h:i:s A");</code></pre></td>
					<td><?php echo tatiyeNet::Format("DT-:d-m-Y h:i:s A");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("DT-day");</code></pre></td>
					<td><?php echo tatiyeNet::Format("DT-day");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("DT-month");</code></pre></td>
					<td><?php echo tatiyeNet::Format("DT-month");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("DT-hari");</code></pre></td>
					<td><?php echo tatiyeNet::Format("DT-hari");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("DT-bulan");</code></pre></td>
					<td><?php echo tatiyeNet::Format("DT-bulan");?></td>
				</tr>
				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("DT-year");//year,tahun</code></pre></td>
					<td><?php echo tatiyeNet::Format("DT-year");?></td>
				</tr>

				<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("DT-hari@h:i:s A");</code></pre></td>
					<td><?php echo tatiyeNet::Format("DT-hari@h:i:s A");?></td>
				</tr>
			<tr>
					<td><pre><code class="language-js">tatiyeNet::Format("DT-day@h:i:s A");</code></pre></td>
					<td><?php echo tatiyeNet::Format("DT-day@h:i:s A");?></td>
				</tr>
		       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("DT-IN");</code></pre></td>
					<td><?php echo tatiyeNet::Format("DT-IN");?></td>
				</tr>
		       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("DT-EN");</code></pre></td>
					<td><?php echo tatiyeNet::Format("DT-EN");?></td>
				</tr>
		       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("DT-hariIN");</code></pre></td>
					<td><?php echo tatiyeNet::Format("DT-hariIN");?></td>
				</tr>
		       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("DT-hariIN@ jam@h:i:s A");</code></pre></td>
					<td><?php echo tatiyeNet::Format("DT-hariIN@ jam@ h:i:s A");?></td>
				</tr>
		</tbody>
		</table>



				<h3>strtotime</h3>
						<table class="table table-hover">
			<tbody>
		       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("hari-IN-12/04/2020");</code></pre></td>
					<td><?php echo tatiyeNet::Format("hari-IN-12/04/2020");?></td>
				</tr>

			       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("hari-EN-2020/04/12");</code></pre></td>
					<td><?php echo tatiyeNet::Format("hari-EN-2020/04/12");?></td>
				</tr>
		       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("bulan-IN-12/04/2020");</code></pre></td>
					<td><?php echo tatiyeNet::Format("bulan-IN-12/04/2020");?></td>
				</tr>

			       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("bulan-EN-2020/04/12");</code></pre></td>
					<td><?php echo tatiyeNet::Format("bulan-EN-2020/04/12");?></td>
				</tr>

		       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("bln-IN-12/04/2020");</code></pre></td>
					<td><?php echo tatiyeNet::Format("bln-IN-12/04/2020");?></td>
				</tr>

			       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("bln-EN-2020/04/12");</code></pre></td>
					<td><?php echo tatiyeNet::Format("bln-EN-2020/04/12");?></td>
				</tr>





	            <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("tahun-2020/04/12");</code></pre></td>
					<td><?php echo tatiyeNet::Format("tahun-2020/04/12");?></td>
				</tr>
		       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("tgl-IN-12/04/2020");</code></pre></td>
					<td><?php echo tatiyeNet::Format("tgl-IN-12/04/2020");?></td>
				</tr>

			       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("tgl-EN-2020/04/12");</code></pre></td>
					<td><?php echo tatiyeNet::Format("tgl-EN-2020/04/12");?></td>
				</tr>
		       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("setmonth-IN-12/04/2020");</code></pre></td>
					<td><?php echo tatiyeNet::Format("setmonth-IN-12/04/2020");?></td>
				</tr>
			       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("setmonth-EN-2020/04/12");</code></pre></td>
					<td><?php echo tatiyeNet::Format("setmonth-EN-2020/04/12");?></td>
				</tr>
		       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("setday-IN-12/04/2020");</code></pre></td>
					<td><?php echo tatiyeNet::Format("setday-IN-12/04/2020");?></td>
				</tr>
			       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("setday-EN-2020/04/12");</code></pre></td>
					<td><?php echo tatiyeNet::Format("setday-EN-2020/04/12");?></td>
				</tr>
			       <tr>
					<td><pre><code class="language-js">tatiyeNet::Format("stamp-1586703531");</code></pre></td>
					<td><?php echo tatiyeNet::Format("stamp-1586703531");?></td>
				</tr>
			</tbody>
		</table>


				<h3>Plugin</h3>
			<table class="table table-hover">
			<tbody>
		       <tr>
					<td>
<pre><code class="language-js">
    tatiyeNet::Format("Calender",[
     'style'=>[
          'width'     =>'100%',
          'background'=>'#2F62FF',
          'color'     =>'#FFF'
      ],
      'SendDestroyLoader'=>[
          'send'     =>'off', //on ,off
          'format'   =>'IN', // IN,EN
          'url'      =>'Account/calenderData.php',
          'resultsID'=>'#LiID',
      ]
    ]);
</code></pre>
</td>
					<td>Calender</td>
				</tr>

			</tbody>
		</table>






<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>