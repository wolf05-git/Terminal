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
$ID=$_POST['id'];
	if($ID == 'php') {?>

	<b>Baca File JSON dalam PHP:</b>	
	<pre>
		<code class="language-js">
&lt;?php
// load file
$data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/results.json');

// decode json to associative array
$json_arr = json_decode($data, true);

foreach ($json_arr as $key =&gt; $value) {
    echo  $json_arr[$key] . &quot; - &quot; .  $json_arr[$value] . &quot;&lt;br/&gt;&quot;;
}
?&gt;
	   </code>
	</pre>
<b>Tambahkan ke File JSON dalam PHP:</b>
<pre>
	<code class="language-js">
&lt;?php
// read json file
$data = file_get_contents('results.json');

// decode json
$json_arr = json_decode($data, true);

// add data
$json_arr[] = array('Code'=&gt;4, 'Name'=&gt;'Jeff Darwin', 'Sports'=&gt;'Cricket');

// encode json and save to file
file_put_contents('results_new.json', json_encode($json_arr));
?&gt;
   </code>
</pre>
<b>Perbarui File JSON PHP:</b>
<pre>
	<code class="language-js">
&lt;?php
// read file
$data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/results.json');

// decode json to array
$json_arr = json_decode($data, true);

foreach ($json_arr as $key =&gt; $value) {
    if ($value['Code'] == '2') {
        $json_arr[$key]['Sports'] = &quot;Foot Ball&quot;;
    }
}

// encode array to json and save to file
file_put_contents('results_new.json', json_encode($json_arr));
?&gt;
   </code>
</pre>
<b>Delete JSON Data from File:</b>
<pre>
	<code class="language-js">
&lt;?php
// read json file
$data = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/results.json');

// decode json to associative array
$json_arr = json_decode($data, true);

// get array index to delete
$arr_index = array();
foreach ($json_arr as $key =&gt; $value)
{
    if ($value['Code'] == &quot;2&quot;)
    {
        $arr_index[] = $key;
    }
}
// delete data
foreach ($arr_index as $i)
{
    unset($json_arr[$i]);
}

// rebase array
$json_arr = array_values($json_arr);

// encode array to json and save to file
file_put_contents('results_new.json', json_encode($json_arr));
?&gt;
   </code>
</pre>

	<?php } elseif ($ID == 'javascript'){?>
<b>load json file in javascript</b>
<pre>
	<code class="language-js">
&lt;script type=&quot;text/javascript&quot;&gt;
   function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType(&quot;application/json&quot;);
    rawFile.open(&quot;GET&quot;, file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 &amp;&amp; rawFile.status == &quot;200&quot;) {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}
 &lt;/script&gt;
   </code>
</pre>

<b>read json file in javascript</b>
<pre>
	<code class="language-js">
readTextFile(&quot;https://ulr.com/terminal.json&quot;,  
  function(text){
    var data = JSON.parse(text);
    $.each(data, function (index, value) {
       console.log(value);
     $('#nugi').append('&lt;li&gt;'+value.id+'&lt;/li&gt;');
    });
});

   </code>
</pre>

<b>if json file in javascript</b>
<pre>
	<code class="language-js">
readTextFile(&quot;https://ulr.com/terminal.json&quot;, 
$.each(data, function (index, value) {
   if (value['data']=='jquery') {
    $('#nugi').append('&lt;li&gt;'+value.code+'&lt;/li&gt;');
   }
});
   </code>
</pre>

	<?php } elseif ($ID == 'jquery'){?>
<b>read json file in jquery</b>
<pre>
	<code class="language-js">
$(document).ready(function(){
      $.getJSON(&quot;https://ulr.com/terminal.json&quot;, 
      function(data){
        $.each(data, function (index, value) {
           console.log(value);
         $('#nugi').append('&lt;li&gt;'+value.id+'&lt;/li&gt;');
        });
    });
});
   </code>
</pre>
<b>if json file in javascript</b>
<pre>
	<code class="language-js">
$(document).ready(function(){
      $.getJSON(&quot;https://ulr.com/terminal.json&quot;, 
      function(data){
       $.each(data, function (index, value) {
             if (value['data']=='jquery') {
              $('#nugi').append('&lt;li&gt;'+value.code+'&lt;/li&gt;');
             }
      });
    });
});
   </code>
</pre>
	<?php } elseif ($ID == 'wf'){?>
<pre>
	<code class="language-js">
$add=WF::json([
  'api' =&gt;'https://dantrik.com/api?tn=donor/sms/row/1/limit/2',
  'data'=&gt;'array',  //json ,array
 ]);
  foreach($add as $x =&gt; $x_value) {
      echo &quot;Key=&quot; . $x . &quot;, Value=&quot; . $x_value['token'];
      echo &quot;&lt;br&gt;&quot;;
  }
   </code>
</pre>

	<?php } else {?>

	<?php }?>
<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>