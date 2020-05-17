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

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>