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
  $Page=$_POST['id'];

 if($Page == '1') {?>
<pre><code class="language-js">
&lt;script type="text/javascript"&gt;
   $(document).ready(function() {
      var isi = "&lt;strong&gt;Selamat!&lt;/strong&gt;!";
      $("#div-1").text(isi);
      $("#div-2").html(isi);

      var tambahan = "&lt;strong&gt;Selamat!&lt;/strong&gt;!";
      $("#span-1").prepend(tambahan);
      $("#span-2").append(tambahan);

   });
&lt;/script&gt;
  </code>
</pre>
<?php } elseif ($Page == '2'){?>
<pre>
  <code class="language-js">
&lt;script type="text/javascript"&gt;
   $(document).ready(function() {
      alert("text(): " + $("#info").text() + "\n" +
            "html(): " + $("#info").html());
   });
&lt;/script&gt;
&lt;div id="info"&gt;&lt;strong&gt;Bravo&lt;/strong&gt;&lt;/div&gt;
  </code>
</pre>
<?php } elseif ($Page == '3'){?>
<pre>
  <code class="language-js">
&lt;script type="text/javascript"&gt;
   $(document).ready(function() {
      $("#WF").focus();
   });
&lt;/script&gt; 
&lt;input id="WF" name="dev" type="text"value="Tatiye.net" /&gt;
  </code>
</pre>
<?php } elseif ($Page == '4'){?>
<pre>
  <code class="language-js">
&lt;script type="text/javascript"&gt;
   $(document).ready(function() {
      alert("Klik tombol OK");      
      $("#info-a").css("color", "blue");
      $("#info-b").css({
                       "background-color": "grey",
                       "border-style": "solid",
                       "width": "200px",
                       "height": "50px"});

   });
&lt;/script&gt;
&lt;div id="info-a"&gt;&lt;strong&gt;Bravo&lt;/strong&gt;&lt;/div&gt;
&lt;div id="info-b"&gt;&lt;strong&gt;Bravo&lt;/strong&gt;&lt;/div&gt;
  </code>
</pre>
<?php } elseif ($Page == '5'){?>
<pre>
  <code class="language-js">
&lt;script type="text/javascript"&gt;
   $(document).ready(function() {
      $("#tombol").click(function() {
         alert("Saya muncul karena Anda mengklik");
      });
   });
&lt;/script&gt;
&lt;button id="tombol"&gt;Klik Saya&lt;/button&gt;
  </code>
</pre>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Kejadian</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>mouseover</td>
            <td>Terjadi sewaktu petunjuk mous menunjuk ke elemen</td>
        </tr>
        <tr>
            <td>mouseout</td>
            <td>Terjadi sewaktu petunjuk mous meninggalkan sebauah elemen</td>
        </tr>
        <tr>
            <td>keydown</td>
            <td>Kejadian yang berlangsung saat sebuah tombol keybor di tekan</td>
        </tr>
        <tr>
            <td>keyup</td>
            <td>Kejadian penekanan pada sebuah tombol</td>
        </tr>
        <tr>
            <td>keypress</td>
            <td>Kejadian yang berlangsung saat tombol di tekan dan di lepas</td>
        </tr>
        <tr>
            <td>focus</td>
            <td>Forum fokus</td>
        </tr>
        <tr>
            <td>blur</td>
            <td>Elemen tidak menjadi fokus</td>
        </tr>
    </tbody>
</table>
<pre>
  <code class="language-js">
&lt;script type="text/javascript"&gt;
   $(document).ready(function() {
      $("#cari").mouseover(function() {
         $(this).attr("src", "images/cari2.png");      
      });
      
      $("#cari").mouseout(function() {
         $(this).attr("src", "images/cari1.png");      
      });
      
      $("#cari").click(function() {
         alert("Anda mengklik");
      });
   });
&lt;/script&gt;
  </code>
</pre>
<?php } elseif ($Page == '6'){?>
<pre>
  <code class="language-js">
&lt;script type="text/javascript"&gt;
   $(document).ready(function() {
      $("#tombol").click(function() {
         if ($("#gambar").is(":visible")) {
            $("#gambar").hide();
            $(this).text("Tampilkan");
         }   
         else {  
            $("#gambar").show();
            $(this).text("Sembunyikan");
         }   
      });      
   });
&lt;/script&gt;
&lt;img id="gambar" src="images/innsbruck.png" /&gt;
&lt;button id="tombol"&gt;Sembunyikan&lt;/button&gt;
  </code>
</pre>
<?php } elseif ($Page == '7'){?>
<pre>
  <code class="language-js">
&lt;script type="text/javascript"&gt;
   $(document).ready(function() {
      // Sembunyikan tombol hapus
      $(".tombol-hapus").hide();
      
      // Pasang kejadian click
      $(".tombol-hapus").click(function(e){
         var ortu = $(e.target).parent();
         
         ortu.remove(); 
         return false;
      });      
         
      var indeks = 2;
      
      $("#tombol-tambah").click(function(){        
         var komponen = $("&lt;p id='data-" + indeks + 
                          "'&gt;&lt;label&gt;Nama: &lt;/label&gt;" +
                          "&lt;input name='nama[]' type='text' /&gt;" +
                          "&lt;label&gt; Hobby: &lt;/label&gt;" +                  
                          "&lt;input name='hobby[]' type='text' /&gt;" +
                          " &lt;/p&gt;");
                          
         komponen.insertBefore("#tombol-tambah");     
         $(".tombol-hapus:first")
            .clone(true)
            .appendTo("#data-" + indeks)
            .show();
            
         indeks = indeks + 1; // Naikkan pencacah data
         return false;        // Menghindari submit
      });
   });
&lt;/script&gt;
  </code>
</pre>
<small>Forum html</small>
<pre>
  <code class="language-js">
   &lt;form action="cekdata.php" method="post"&gt;
      &lt;p id="data-1"&gt;
         &lt;label&gt;Nama:&lt;/label&gt; 
         &lt;input name="nama[]" type="text" /&gt;
         &lt;label&gt;Hobby:&lt;/label&gt; 
         &lt;input name="hobby[]" type="text" /&gt;
         &lt;button class='tombol-hapus'&gt;Hapus&lt;/button&gt;
      &lt;/p&gt;       
      &lt;button id="tombol-tambah"&gt;Tambah&lt;/button&gt;
      &lt;input type="submit" value="Kirim" /&gt;
   &lt;/form&gt; 
  </code>
</pre>
<small>cekdata.php</small>
<pre>
  <code class="language-js">
&lt;?php
  print("Data yang dikirim ke server:&lt;br /&gt;");
  $jumlah = count($_POST["nama"]);
  for ($i = 0; $i &lt; $jumlah; $i++)
      print($i + 1 . ". " . $_POST["nama"][$i] . " - " .
            $_POST["hobby"][$i] ."&lt;br /&gt;");
?&gt;
  </code>
</pre>
<?php } elseif ($Page == '8'){?>
    <small>addClass</small>
<pre>
  <code class="language-js">
&lt;script type="text/javascript"&gt;
 $(document).ready(function() {
   $('#info').addClass('Kotak');
   $('#info').removeClass('Kotak');
});
&lt;/script&gt;  
  </code>
</pre>
<small>hasClass</small>
<pre>
  <code class="language-js">
&lt;script type="text/javascript"&gt;
    $(document).ready(function() {
        if ($('div').hasClass('Kotak')) 
            alert('ADA');
        else
          alert('TIDAK ADA');
    });
&lt;/script&gt;  
  </code>
</pre>



<?php } elseif ($Page == '9'){?>
<pre>
  <code class="language-js">
&lt;script type="text/javascript"&gt;
   $(document).ready(function() {    
      var bintangFilm = ["Drew Barrymore","Agnes Monica",
                         "Nicolas Cage", "Taylor Lautner",
                         "Robert Pattinson"];  
      $.each(bintangFilm, function(indeks, nama) {                
         $("#wadah").append("&lt;li&gt;" + nama + "&lt;\/li&gt;");
      });   
   });
&lt;/script&gt; 
&lt;ol id="wadah"&gt;&lt;/ol&gt; 
  </code>
</pre>
<?php } elseif ($Page == '10'){?>
<pre>
  <code class="language-js">
&lt;script type="text/javascript"&gt;
dragElement(document.getElementById("info"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
&lt;/script&gt;  

&lt;div id="info"&gt;&lt;strong&gt;Bravo&lt;/strong&gt;&lt;/div&gt;
  </code>
</pre>

<?php }?>

<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>