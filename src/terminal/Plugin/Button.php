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

<script type="text/javascript">
   $(document).ready(function() {
     var i = 0;
     while (i < 5) {
         var add=$(".btn"+i).data('id');
         $(".btn"+i).css({
             "color" : "#FFF",
             "background-color": add
          });
         i++;
     }
});
 </script>
 <h4>Style Flat</h4>
<table class="table ">

  <tbody>
    <tr>
      <td><a class="WFbtn large" href="#">WFbtn </a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn large" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>

    <tr>
      <td><a class="WFbtn" href="#">WFbtn</a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>

    <tr>
      <td><a class="WFbtn wficon add" href="#">WFbtn </a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn wficon add" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
    <tr>
      <td><a class="WFbtn wficon edit" href="#">WFbtn </a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn wficon edit" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
    <tr>
      <td><a class="WFbtn wficon secure" href="#">WFbtn </a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn wficon secure" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
    <tr>
      <td><a class="WFbtn confirm large" href="#">WFbtn </a></td>
       <td><pre><code class="language-html">&lt;a class="WFbtn confirm  large" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
    <tr>
      <td><a class="WFbtn special large" href="#">WFbtn </a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn special  large" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
    <tr>
      <td><a class="WFbtn large full" href="#">WFbtn full </a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn large full" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
  </tbody>
</table>
<h4>Style Gradient </h4>
<table class="table " style="font-size: 13px;">
  <tbody>
    <tr>
      <td><a class="WFbtn bg btn-1  large" href="#"> WFbtn</a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn bg btn-1 large" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
    <tr>
      <td><a class="WFbtn bg btn-2 large" href="#">WFbtn </a></td>
     <td><pre><code class="language-html">&lt;a class="WFbtn bg btn-2 large" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
    <tr>
      <td><a class="WFbtn bg btn-3  large"href="#"> WFbtn </a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn bg btn-3 large" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
    <tr>
      <td><a class="WFbtn bg btn-4 large" href="#">WFbtn </a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn bg btn-4 large" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
    <tr>
      <td><a class="WFbtn bg btn-5 large" href="#"> WFbtn</a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn bg btn-5 large" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
  </tbody>
</table>

<h4>Style API Javascrip Gradient color </h4>
<table class="table ">
  <tbody>
    <tr>
      <td>
        <a class="WFbtn bg large btn1"data-id="#FF5722"href="#">WFbtn </a>
      </td>

      <td><pre><code class="language-html">&lt;a class="WFbtn bg btn1 large" data-id="#FF5722" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>

    </tr>
  </tbody>
</table>
 <h4>Style Icon Picon</h4>
<table class="table">
  <tbody>
    <tr>
      <td><a class="WFbtn large icn pic-4"href="#">WFbtn </a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn large icn pic-4" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
    <tr>
      <td><a class="WFbtn-x icn pic-1"href="#">WFbtn </a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn-x icn pic-1" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
    <tr>
      <td><a class="WFbtn-x large icn pic-2"href="#">WFbtn </a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn-x large icn pic-2" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
    <tr>
      <td><a class="WFbtn-x small icn pic-5"href="#">WFbtn </a></td>
      <td><pre><code class="language-html">&lt;a class="WFbtn-x small icn pic-5" href="#"&gt;WFbtn &lt;/a&gt;</code></pre> </td>
    </tr>
  </tbody>
</table>
 
 <h4>Style Dropdown</h4>

<table class="table">
  <tbody>
    <tr>
      <td>
<div class="WFDropdown">
  <a class=" WFbtn WFDropdownID large icn pic-4" > WF Dropdown</a>
  <div class="WFDropdownSubmenu left"> 
    <ul class="WFDropdownRoot">
      <li ><a class="WFbtn-x  icn pic-1" href="#Dashboard" >Dashboard</a></li>
      <li ><a class="WFbtn-x  icn pic-2" href="#Profile" >Profile</a></li>
      <li ><a class="WFbtn-x  icn pic-3" href="#settings">Settings</a></li>
      <li ><a class="WFbtn-x  icn pic-4" href="#feedback">Send Feedback</a></li>
    </ul>
  </div>
</div>

      </td>
      <td>
        <pre>
          <code class="language-js">
&lt;div class=&quot;WFDropdown&quot;&gt;
  &lt;a class=&quot; WFbtn WFDropdownID large icn pic-4&quot; &gt;My WF Dropdown&lt;/a&gt;
  &lt;div class=&quot;WFDropdownSubmenu left&quot;&gt; 
    &lt;ul class=&quot;WFDropdownRoot&quot;&gt;
      &lt;li &gt;&lt;a class=&quot;WFbtn-x  icn pic-1&quot; href=&quot;#Dashboard&quot; &gt;Dashboard&lt;/a&gt;&lt;/li&gt;
      &lt;li &gt;&lt;a class=&quot;WFbtn-x  icn pic-2&quot; href=&quot;#Profile&quot; &gt;Profile&lt;/a&gt;&lt;/li&gt;
      &lt;li &gt;&lt;a class=&quot;WFbtn-x  icn pic-3&quot; href=&quot;#settings&quot;&gt;Settings&lt;/a&gt;&lt;/li&gt;
      &lt;li &gt;&lt;a class=&quot;WFbtn-x  icn pic-4&quot; href=&quot;#feedback&quot;&gt;Send Feedback&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
           </code>
        </pre>
      </td>
    </tr>
  </tbody>
</table>



<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>