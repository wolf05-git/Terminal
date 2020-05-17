
<?php 
use wolf05\helper\tatiyeNet;
use wolf05\helper\tatiyeNetJson;
tatiyeNet::VendorStyle('terminal','style.css');

 ?>
<!--=================================
=            Terminal 01            =
==================================-->
<div class='Terminal01app' style="display:none;">
  <div class='Terminal01top'>
    <div class='Terminal01buttons'>
      <div class='Terminal01circle'></div>
      <div class='Terminal01circle'></div>
      <div class='Terminal01circle'></div>
    </div>
    <div class='Terminal01titlev'>
      Terminal
    </div>
    <div class='Terminal01clear'></div>
  </div>
  <div class='Terminal01_main'>
          <!--==============================
          =            Cesing 2            =
          ===============================-->
          <div class="mac-window active" >
                 <div class="WFmodal_v2-content">
                       <div class="WFcontent_v2">
                            <div class="window">
                              <div id="command-lineWF-2" class="command-lineWF light"></div>
                            </div>
                       </div>
                  </div>
          </div>
          <!--====  End of Cesing 2  ====-->
    </div>
  </div>
<!--====  End of Terminal 01  ====-->

<!--================================
=            TERMINAL 2            =
=================================-->
<div class='WFmodal-terminal-2'>
  <div class="WFdialog-terminal-2">
    <div class='WFmodal-terminal-2-header'>
         <div class='WFmodal-terminal-2-menu'>
           <div class='WFmodal-terminal-2-circle'></div>
           <div class='WFmodal-terminal-2-circle'></div>
           <div class='WFmodal-terminal-2-circle'></div>
        </div>
        <div class='WFmodal-terminal-2-titel'>Terminal</div>
        <div class='WFmodal-terminal-2-info'></div>
        <div class='Wfmodal-clear'></div>
    </div>
    <div class='WFmodal-terminal-2-content'>
      <div id="ContentDAta"></div>
      </div>
    <!--   <div class="WFmodal-terminal-2-footer">11</div> -->
    </div>
  </div>


<!--====  End of TERMINAL 2  ====-->


<!-- partial:index.partial.html -->
<div id="colorIDP"class="container1">
<div class="material-color-picker">
        <div class="material-color-picker__left-panel">
            <ol class="color-selector" data-bind="foreach: materialColors">
                <li>
                    <input name="material-color" type="radio" data-bind="attr: { id: 'materialColor' + $index() }, checked: selectedColor, value: color" >
                    <label data-bind="attr: { for: 'materialColor' + $index(), title: color }, style: { 'color': $data.variations[4].hex }"></label>
                </li>
            </ol>
        </div>
        <div class="material-color-picker__right-panel" data-bind="foreach: materialColors">
            <div class="color-palette-wrapper" data-bind="css: { 'js-active': selectedColor() === color }">
                <h2 class="color-palette-header" data-bind="text: color">
                  <a class="pull-right" href="">x</a>
                </h2>
                <ol class="color-palette" data-bind="foreach: variations">
                    <li id="clipboardItem" class="color-palette__item" data-bind="attr: { 'data-clipboard-text': hex }, style: { 'background-color': hex }">
                        <span data-bind="text: weight"></span>
                        <span data-bind="text: hex"></span>
                        <span class="copied-indicator" data-bind="css: { 'js-copied': copiedHex() === hex }">Color copied!</span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- partial -->


<?php 
   
   tatiyeNet::VendorStyle('terminal','terminal.min.js');
   tatiyeNet::VendorStyle('terminal','shortcuts.js');
  
 
 
  ?>

<script type="text/javascript">
dragElement(document.getElementById("colorIDP"));

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
// COLOR DIALOG

 var DemoCommand ;
(function(){
    "use strict";
    DemoCommand = {};
    DemoCommand.instance = function(selector){
        var cmd = new CommandLine(selector);

        /**
         * Set command line username  by command argument
         */
        cmd.addCommand("update-user username",function(command){
            cmd.setUsername(command.getArgument('username'));
        },"Set username  by command argument");


        /**
         * Set command line username from prompt
         */
        cmd.addCommand("prompt",function(){
            this.prompt("type your name",function(userInput){
                if(userInput === ''){
                    cmd.error("Your name cannot be empty!");
                    this.start();
                }else{
                    cmd.setUsername(userInput);
                    cmd.startNewCommand();
                }
            });
            return false;
        },'Set username from prompt ');


        /**
         * Confirmation to remove all file ;)
         */
        cmd.addCommand("rm",function(){
            this.confirm("Are yous sure to delete all files?",function(yes){
                if(yes){
                    cmd.error("Permission denied!!");
                }else{
                    cmd.success("Great :)");
                }
                cmd.startNewCommand();
            });
            return false;
        },'Remove all files.');

        /**
         * Login :)
         */
        // cmd.addCommand("login",function(){
        //     this.prompt("Enter your username [any name]: ",function(username){
        //         cmd.secret("Enter your password [Type 123]",function(password){
        //             if(password !== '123'){
        //                 cmd.error('Wrong password');
        //                 this.start();
        //             }else{
        //                 setTimeout(function(){
        //                     cmd.info('Authenticating ...');
        //                     setTimeout(function(){
        //                         cmd.info('Loading Application ...');
        //                         setTimeout(function(){
        //                             cmd.warning('I am not saving this password! Don\'t worry :)');
        //                             setTimeout(function(){
        //                                 cmd.success('System Ready to use...');
        //                                 cmd.setUsername(username);
        //                                 cmd.startNewCommand();
        //                             },800);
        //                         },800);
        //                     },800);


        //                 },800);
        //             }
        //         });
        //     });
        //     return false;
        // },'Login by username & password');


        /**
         * Help :)
         */

        cmd.addCommand("ls",function(){
            var helpResults = [];
            for(var command = 0;command < this.commands.length;command++){
                helpResults.push(this.commands[command].resolved.getSignature());
                helpResults.push(this.commands[command].description);
            }
            this.list(helpResults,2);
        },"Show available commands");





/*=====================================
=            Star Ajax            =
=====================================*/
/*
|--------------------------------------------------------------------------
| Initializes Api  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
    cmd.addCommand("git",function(){
       var hostID=('http://'+document.domain);
       var add='forum';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/Git.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 

                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'600px'}
                                  );  
          }
        });
   },'Api plugin show');
/*
|--------------------------------------------------------------------------
| Initializes Assets  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
    cmd.addCommand("ajax",function(){
       var hostID=('http://'+document.domain);
       var add='forum';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/Ajax.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 

                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'1000px'}
                                  );  
          }
        });
   },'Ajax plugin show');
/*
|--------------------------------------------------------------------------
| Initializes Assets  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
    cmd.addCommand("assets",function(){
       var hostID=('http://'+document.domain);
       var add='forum';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/Assets.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 

                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'1000px'}
                                  );  
          }
        });
   },'Assets plugin show');

/*
|--------------------------------------------------------------------------
| Initializes Forum  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
    cmd.addCommand("forum",function(){
       var hostID=('http://'+document.domain);
       var add='forum';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/Forum.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 

                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'1000px'}
                                  );  
          }
        });
   },'Forum plugin show');


/*
|--------------------------------------------------------------------------
| Initializes Editor  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
    cmd.addCommand("editor",function(){
       var hostID=('http://'+document.domain);
       var add='editor';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/Editor.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 

                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'1000px'}
                                  );  
          }
        });
   },'Editor plugin show');




/*
|--------------------------------------------------------------------------
| Initializes Notes  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
    cmd.addCommand("notes",function(){
       var hostID=('http://'+document.domain);
       var add='_.isDatete';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/notes.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 

                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'1000px'}
                                  );  
          }
        });
   },'Notes plugin show');




/*
|--------------------------------------------------------------------------
| Initializes ALAT  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/

cmd.addCommand("alat",function(){
       var hostID=('http://'+document.domain);
       var add='alat';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/ALAT.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 
                    $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'500px'}
                                  );  
                  
          }
        });
},'show plugin button');
/*
|--------------------------------------------------------------------------
| Initializes DATE  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
    cmd.addCommand("date",function(){
       var hostID=('http://'+document.domain);
       var add='_.isDatete';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/Date.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 

                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'1000px'}
                                  );  
          }
        });
   },'encode plugin show');
/*
|--------------------------------------------------------------------------
| Initializes Text  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
    cmd.addCommand("text",function(){
       var hostID=('http://'+document.domain);
       var add='_.isDatete';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/Text.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 

                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'1000px'}
                                  );  
          }
        });
   },'Text plugin show');

/*
|--------------------------------------------------------------------------
| Initializes encode  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
    cmd.addCommand("encode",function(){
       var hostID=('http://'+document.domain);
       var add='icon';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/Encode.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 

                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'1000px'}
                                  );  
          }
        });
   },'encode plugin show');
/*
|--------------------------------------------------------------------------
| Initializes URI  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
    cmd.addCommand("ulr",function(){
       var hostID=('http://'+document.domain);
       var add='icon';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/URI.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 
                // $("#ContentDAta").html(pesan);
                //   cmd.output(pesan);
                //   cmd.startNewCommand();
                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'1000px'}
                                  );  
          }
        });
       
    },'URI plugin show');


/*
|--------------------------------------------------------------------------
| Initializes images  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
    cmd.addCommand("images",function(){
       var hostID=('http://'+document.domain);
       var add='icon';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/Images.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 
                // $("#ContentDAta").html(pesan);
                //   cmd.output(pesan);
                //   cmd.startNewCommand();
                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'1000px'}
                                  );  
          }
        });
       
    },'images plugin show');

/*
|--------------------------------------------------------------------------
| Initializes color  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/

    cmd.addCommand("color",function(){
           $("#colorIDP").css({"display":"block"});
           $("#colorIDP").show();
    },'show plugin color');


/*
|--------------------------------------------------------------------------
| Initializes icon  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/

cmd.addCommand("icon",function(){
       var hostID=('http://'+document.domain);
       var add='icon';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/Icon.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 
                // $("#ContentDAta").html(pesan);
                //   cmd.output(pesan);
                //   cmd.startNewCommand();
                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'1000px'}
                                  );  
          }
        });

},'show plugin icon');

/*
|--------------------------------------------------------------------------
| Initializes button  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/

cmd.addCommand("button",function(){
       var hostID=('http://'+document.domain);
       var add='button';
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/Button.php",
          data: "id=" + add,
          cache: false,
          success: function(pesan)
          { 
                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'800px'}
                                  );
                  
          }
        });
},'show plugin button');

/*
|--------------------------------------------------------------------------
| Initializes JSON  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
<?php 
 $php_ls=tatiyeNet::JSON([
      'code'   =>'substr',
      'get'    =>'json1',
      'data'   =>'api?tn=terminal/git/json',
      'foreach'=>'id/json/des',
      'status' =>'open1',
 ]);
 ?>
cmd.addCommand("json ls",function(command){
   var add=(command.getArgument('ls'));
   var result=add.split('/');
   var mdir="";

    switch (result[0]) {
        case "ls":
     
        var arr =<?php echo  $php_ls;?>;
          var helpResults = [];
          for(var key in arr){
            var value = arr[key];
            helpResults.push(key);
            helpResults.push(value);
          }
         this.list(helpResults,2);
         break;

    default:
       var hostID=('http://'+document.domain);
       var getID=result[0];
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/JSON.php",
          data: "id=" + getID,
          cache: false,
          success: function(pesan)
          { 
                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'800px'}
                                  );
                  
          }
        });
}


},'show plugin json');

/*
|--------------------------------------------------------------------------
| Initializes JQUERY  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
<?php 
 $jq_ls=tatiyeNet::JSON([
      'code'   =>'substr',
      'get'    =>'json1',
      'data'   =>'api?tn=terminal/git/json',
      'foreach'=>'id/jquery/des',
      'status' =>'open1',
 ]);
 ?>
cmd.addCommand("jq ls",function(command){
   var add=(command.getArgument('ls'));
   var result=add.split('/');
   var mdir="";

    switch (result[0]) {
        case "ls":
     
        var arr =<?php echo  $jq_ls;?>;
          var helpResults = [];
          for(var key in arr){
            var value = arr[key];
            helpResults.push(key);
            helpResults.push(value);
          }
         this.list(helpResults,2);
         break;

    default:
       var hostID=('http://'+document.domain);
       var getID=result[0];
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/JQUERY.php",
          data: "id=" + getID,
          cache: false,
          success: function(pesan)
          { 
                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'800px'}
                                  );
                  
          }
        });
}


},'show plugin Jquery');



/*
|--------------------------------------------------------------------------
| Initializes PHP  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
<?php 
 $php_ls=tatiyeNet::JSON([
      'code'   =>'substr',
      'get'    =>'json1',
      'data'   =>'api?tn=terminal/git/json',
      'foreach'=>'id/php/des',
      'status' =>'open1',
 ]);
 ?>
cmd.addCommand("php ls",function(command){
   var add=(command.getArgument('ls'));
   var result=add.split('/');
   var mdir="";

    switch (result[0]) {
        case "ls":
     
        var arr =<?php echo  $php_ls;?>;
          var helpResults = [];
          for(var key in arr){
            var value = arr[key];
            helpResults.push(key);
            helpResults.push(value);
          }
         this.list(helpResults,2);
         break;

    default:
       var hostID=('http://'+document.domain);
       var getID=result[0];
       $.ajax({
          type: "POST",
          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/Plugin/PHP.php",
          data: "id=" + getID,
          cache: false,
          success: function(pesan)
          { 
                  $("#ContentDAta").html(pesan);
                  $(".WFmodal-terminal-2").show();
                  $('.WFmodal-terminal-2-footer').css('display', 'none');
                  $(".WFdialog-terminal-2").css({
                                  "margin-top": '50px',
                                  "margin-left": '-100px',
                                  "height":       '500px',
                                  "width"     :'800px'}
                                  );
                  
          }
        });
}


},'show plugin php');
/*
|--------------------------------------------------------------------------
| Initializes Package  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
<?php 
 $package_ls=tatiyeNet::JSON([
      'code'   =>'substr',
      'get'    =>'json1',
      'data'   =>'api?tn=terminal/git/json',
      'foreach'=>'id/package/des',
      'status' =>'open1',
 ]);
$pacActiv=tatiyeNet::JSON([
      'code'   =>'substr',
      'get'    =>'json2',
      'data'   =>'api?tn=OAuth/user/MTU4MjI5NDU5MkgwTVZLM3FDWGw5eGExNUlBNElGTXJlVzNmb21MWmgy',
      'foreach'=>'package/name',
      'status' =>'open1',
 ]);
 ?>
cmd.addCommand("package ls",function(command){
   var add=(command.getArgument('ls'));
   var result=add.split('/');
   var myArray =<?php echo $pacActiv?>;
   var mdir="";
    switch (result[0]) {
        case "ls":
	      var arr =<?php echo  $package_ls;?>;
          var helpResults = [];
          for(var key in arr){
            var value = arr[key];
            helpResults.push(key);
            helpResults.push(value);
          }
         this.list(helpResults,2);
            break;
        case "activ":
             cmd.list(<?php echo $pacActiv?>);
            break;
       case "add":  
               var uppercaseFirstLetter = result[1].replace(/^\w/, c => c.toUpperCase());
               if ($.inArray(uppercaseFirstLetter, myArray) >= 0) {
                     cmd.success("directory Package "+uppercaseFirstLetter+" sudah terpasang ");
                     cmd.startNewCommand();
                    } else {
                          this.confirm("Apakah anda ingin membuat package $"+uppercaseFirstLetter+" ?   ",function(yes){
                                    if(yes){              
                                          setTimeout(function(){
                                              cmd.warning('Loading Application ...');
                                              setTimeout(function(){
                                                  cmd.success('System Ready...');
                                                    setTimeout(function(){
                                                       cmd.info("Sistem Package $"+uppercaseFirstLetter+" ready to use");
                                                        var hostID=('http://'+document.domain);
                                                        $.ajax(
                                                        {
                                                          type: "POST",
                                                          url: hostID+"/wolf05/vendor/wolf05-git/terminal/src/terminal/autosave.php",
                                                          data: "id=" + uppercaseFirstLetter,
                                                          cache: false,
                                                          success: function(pesan)
                                                          { 
                                                            // cmd.error(pesan);
                                                          }
                                                        });
                                                       cmd.startNewCommand();
                                                 },2000);
                                               },1900);
                                          },800);       
                                    }else{
                                        cmd.success("Great :)");
                                    }
                                    cmd.startNewCommand();
                                });
                        }
            return false;
            break;
        default:
           
    }
    
   
   
 },'package ls');
/*
|--------------------------------------------------------------------------
| Initializes exit  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Kam 23 Apr 2020 02:20:35  WITA
*/
    cmd.addCommand("exit",function(){
                $("#colorIDP").css({"display":"none"});
                $("#colorIDP").hide();
                $(".WFmodal-terminal-2").hide();
       
    },'exit plugin show');
/*=====  End of Star Terminal  ======*/

        return cmd;
    };

})();

  var cmd = DemoCommand.instance(document.getElementById('command-lineWF-2'));
    cmd.output('Type any username to login');
    cmd.run('login');

   shortcut.add("ctrl+z",function() {
        $(".Terminal01app").fadeIn();  
  });
   shortcut.add("ctrl+x",function() {
         $('.Terminal01app').fadeOut();
          
  });

$("#terminal").click(function(){
   $(".Terminal01app").fadeIn(); 
});



</script>
<?php 
 tatiyeNet::VendorStyle('terminal','knockout-min.js');
 tatiyeNet::VendorStyle('terminal','clipboard.min.js');
 tatiyeNet::VendorStyle('terminal','scrip.js');
 ?>

 <?php
 if(SEGMENT_1 == 'mobile') {?>
 <script type="text/javascript">
  $(".Terminal01app").show();
  $(".Terminal01app").css({"margin-left": "600px","margin-top": "0px"});
</script> 
<style type="text/css">
      #terminal{
        display: none;
      }
  #appCapsule {
  overflow: scroll;
  width: 100%;
  height:830px;
}
  #appCapsule::-webkit-scrollbar {
  width:0px;
}
#appCapsule::-webkit-scrollbar-track {
  border-radius: 0;
}
#appCapsule::-webkit-scrollbar-thumb {
  margin: 0px;
  border-radius: 0px;
  background: rgba(0, 0, 0, 0.2);
}

      body{
       background-color:#E9EBEE;
       padding-top: 20px;
         text-align: left;
     background-color: #fff;
    font-family: Roboto, -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif;
    color: #344258
     }
     .starwf{
      background-color: #FAFAFA;
      min-height:780px;
      width:400px;
      margin:auto;
      -webkit-border-radius: 9px;
      -moz-border-radius: 9px;
      border-radius: 9px;
    }
    #panesetting{
      padding-top: 10px;
      width:422px;
      min-height:800px;
      padding-bottom: 10px;
      margin-left: 120px;
      background-color: #fff;
      border-radius: 20px;
      border:3px solid #999;
      border-radius: 20px;
      background: #000000;
    }
    .appHeader{
      width:400px;
      margin-top:35px;
      margin-left: 131px;
      -webkit-border-top-left-radius: 9px;
      -webkit-border-top-right-radius: 9px;
      -moz-border-radius-topleft: 9px;
      -moz-border-radius-topright: 9px;
      border-top-left-radius: 9px;
      border-top-right-radius: 9px;
    }
    .appBottomMenu{
      width:400px;
      margin-left: 131px;
      margin-bottom:80px;

      -webkit-border-bottom-right-radius: 9px;
      -webkit-border-bottom-left-radius: 9px;
      -moz-border-radius-bottomright: 9px;
      -moz-border-radius-bottomleft: 9px;
      border-bottom-right-radius: 9px;
      border-bottom-left-radius: 9px;
    }
    #search{
      width:400px;
      margin-left: 131px;
    }
    #sidebarPanel .modal-dialog {
      position: fixed;
      margin-left: 134px;
      margin-top:35px;
      top: 320;
      bottom: 0;
    }
    .panelbox .modal-dialog .modal-content {
      border: 0;
      border-radius: 0;
      width: 300px;
      height:710px;
      overflow: auto;
      padding-top: env(safe-area-inset-top);
      box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
    }
    </style>
<?php }?>
