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
<b>Modul Dialog Forum</b>
 <pre>
 	<code class="language-js">
      tatiyeNet::Modal([
          'status'    =>'dialog',
          'package'   =>SEGMENT_2,
          'model'     =>'auto', //Facebook Mac ,Bootstrap ,auto
          'view'      =>'guide1', //guide
       ]);
    </code>
 </pre>
 
<table class="table table-hover">
	<tbody>
		<tr>
			<td>Insert</td>
			<td><pre><code class="language-js">onclick="WFinsert('Titel/forum/INSERT/save/on/X/120x600x0');"</code></pre></td>
		</tr>
		<tr>
			<td>Update</td>
			<td><pre><code class="language-js">onclick="WFupdate('Titel/forum/UPDATE/save/on/idxxxxx/120x600x0');"</code></pre></td>
		</tr>

		<tr>
			<td>Delete</td>
			<td><pre><code class="language-js">onclick="WFdelete('delete/id/xxxxxxxx');"</code></pre></td>
		</tr>

	</tbody>
</table>
<b>Checkbox</b>
<pre>
	<code class="language-html">
&lt;div class=&quot;col-md-12 form-group&quot;&gt;
    &lt;span class=&quot;margin-r&quot;&gt;Mac&lt;/span&gt;
    &lt;label class=&quot;el-switch el-switch-sm pull-right&quot;&gt;
       &lt;input onClick=&quot;WFcheckbox('a1/Mac');&quot;type=&quot;checkbox&quot;name=&quot;a1&quot; value=&quot;&quot;&gt;
        &lt;span class=&quot;el-switch-style &quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;
   </code>
</pre>
<table class="table table-hover">
	<tbody>
		<tr>
			<td>onClick Opsional</td>
			<td><pre><code class="language-js">onClick="WFcheckbox('a1/Mac');"</code></pre></td>
		</tr>
		<tr>
			<td>onClick Opsional</td>
			<td><pre><code class="language-js">onClick="WFcheckboxID('a1/Mac/section/Dialog/xxxxxxx');"</code></pre></td>
		</tr>

    <tr>
      <td>Forum input  </td>
      <td><pre><code class="language-js">&lt;input id=&quot;WFcheckbox&quot; class=&quot;notif&quot; type=&quot;checkbox&quot;name=&quot;a3&quot; value=&quot;&quot;&gt;</code></pre></td>
    </tr>
    <tr>
      <td>WFcheckboxID</td>
      <td><pre><code class="language-js">&lt;input id=&quot;WFcheckboxID1&quot; class=&quot;Facebook/section/Sound/&lt;?php echo KEY;?&gt;&quot; type=&quot;checkbox&quot;name=&quot;a2&quot; value=&quot;&quot;&gt;</code></pre></td>
    </tr>


	</tbody>
</table>
<b>Calender Forun</b>
<pre>
	<code class="language-js">
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
   </code>
</pre>

<b>validasi Checkbox</b>

<pre>
  <code class="language-js">
        tatiyeNet::options('validasi',[
        'categori' =>'checkbox',
        'token'    =>SEGMENT_5,
        'tabel'    =>'package',
        'file'     =>'date',
      ]);

   </code>
</pre>
<b>Search tabel.li</b>
 <pre>
   <code class="language-js">
  tatiyeNet::options('Search',
      [
       'element' => [
                     'Table'=>[
                                  'keyup'=>'.search',  //forum input
                                  'each' =>'.mytable tbody', //class table
                                  'find' =>'tr',
                                ],
                     'Ulli'=>[
                                  'keyup'=>'#searchli',
                                  'each' =>'#LiID',
                                  'find' =>'li',
                                ]
                     ],
      ]

    );

    </code>
 </pre>
 
<b>load More</b>
<p>configurasi</p>
 <pre>
   <code class="language-js">
tatiyeNet::options('following',[
 'click'  =>'.loadmore',
 'append' =>'#LiID',
 'url'    =>'Configurasi/Load/user.php?tn=members/10',
]); 
    </code>
 </pre>
 
 <p>load file.php </p>
<pre>
  <code class="language-js">
&lt;?php 
$PATH =$_SERVER['DOCUMENT_ROOT'];
$ROOT = array(
       'path'          =&gt; $PATH,
       'wolf05'        =&gt; $PATH.'/wolf05',
       'system'        =&gt; $PATH.'/wolf05/application/system/Wofl05root.php',
       'plugin'        =&gt; '/wolf05/application/assets',
);
require_once($ROOT['system']);
use wolf05\helper\tatiyeNet;
tatiyeNet::DirStyle(tatiyeNet::URLdirektori('assets',''),'wolf05.css');
tatiyeNet::DirStyle(tatiyeNet::URLdirektori('assets',''),'wolf05.js');

/*
|--------------------------------------------------------------------------
| Initializes LOADMORE RESULT_PER_PAGE
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
  $EXPLODE= $_GET['tn'];
  $SEGMENT=explode('/',$EXPLODE);
  $TABEL=$SEGMENT[0];
  $RESULT_PER_PAGE=$SEGMENT[1];
  if(isset($_POST['page'])):
        $PAGE=$_POST['page'];
        $SQL="SELECT * FROM `$TABEL`ORDER BY member_id DESC";
  if($PAGE&gt;0){
       $PAGE_LIMIT=$RESULT_PER_PAGE*($PAGE-1);
       $SQL_PAGE=" LIMIT  $PAGE_LIMIT, $RESULT_PER_PAGE";
  }
  else{
       $SQL_PAGE=" LIMIT 0 , $RESULT_PER_PAGE";
  }
       $RESULT=mysql_query($SQL.$SQL_PAGE);
       $PAGE_ROW = mysql_num_rows($RESULT);
  if($PAGE_ROW&gt;0){
    $no=0;
       while($data=mysql_fetch_array($RESULT)){
               $En = new tatiyeNet();
               $count  =  $En-&gt;select_Group(" * ", "$TABEL", " `member_id` = '".$data['member_id']."' ");
               $ngi = $En-&gt;getObjectResults();
               $id=$ngi-&gt;member_id;
               $id_trm=tatiyeNet::paramEncrypt($id);
                     $no=$no+1;
      switch (tatiyeNet::user_online($ngi-&gt;member_id)) {
          case "Offline":
              $sts= '&lt;i class="WFicon1 mdi \f12f fs-15 cr-E0E0E0"&gt;&lt;/i&gt;';
              break;
          default:
              $sts= '&lt;i class="WFicon1 mdi \f12f fs-15 cr-66BB6A"&gt;&lt;/i&gt;';
      }

    ?&gt;
               
&lt;!--=====================================
=            Section Content            =
======================================--&gt;
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

&lt;!--====  End of Section Content  ====--&gt;


&lt;?php } }
  if($PAGE_ROW == $RESULT_PER_PAGE){
?&gt;
 &lt;li class="col-md-12 snippet_footer"&gt;
   &lt;span class="pull-right"&gt;&lt;?php echo  $PAGE+1 ;?&gt;&lt;/span&gt;
   &lt;a class="WFbtn large loadmore" data-page="&lt;?php echo  $PAGE+1 ;?&gt;"&gt;Halaman &lt;/a&gt;
 &lt;/li&gt;
 &lt;?php }else{ ?&gt;

&lt;?php } endif; ?&gt;

   </code>
</pre>


<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>
