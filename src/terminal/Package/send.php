<?php 
$PATH =$_SERVER['DOCUMENT_ROOT'];
$ROOT = array(
    'path'          => $PATH,
    'wolf05'        => $PATH.'/wolf05',
    'application'   => $PATH.'/wolf05/application',
    'system'        => $PATH.'/wolf05/application/system/Wofl05require.php',
    'autoload'      => $PATH.'/wolf05/vendor/',
    'package'       => __DIR__.'/SendDestroyLoader.php',
);
require_once($ROOT['system']);
use wolf05\helper\tatiyeNet;
use wolf05\helper\tatiyeNetmodal;
/*
|--------------------------------------------------------------------------
| Initializes ESPLOID IF POST GET 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
  $EXPLODE= $_GET['tn'];
  $SEGMENT=explode('/',$EXPLODE);
  $DIR=$ROOT['package'];
/*
|--------------------------------------------------------------------------
| Initializes CEK SESS_MEMBER_ID LOGIN  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:54:08  WITA
*/
 if (isset($_SESSION['SESS_MEMBER_ID'])) { 
/*
|--------------------------------------------------------------------------
| Initializes IF GET POST 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:41:38  WITA
*/
    if($SEGMENT[0] == tatiyeNetmodal::validasi('save')) { 
       /*
       |--------------------------------------------------------------------------
       | Initializes POST INSERT 
       |--------------------------------------------------------------------------
       | Develover Tatiye.Net 2018
       | @Date Sel 21 Apr 2020 12:45:57  WITA
       */
       $data = new tatiyeNet();     
       $arr = array();    
       $arr["deskripsi"] = $_POST['a1'];     
       $arr["detail"]    = $_POST['a2'];     
       $arr["user_id"]   =1; 
       $count=$data->insert(" gallery ", $arr );
    


     } elseif ($SEGMENT[0] == tatiyeNetmodal::validasi('edit')){
       /*
       |--------------------------------------------------------------------------
       | Initializes  POST UPDATE
       |--------------------------------------------------------------------------
       | Develover Tatiye.Net 2018
       | @Date Sel 21 Apr 2020 12:45:57  WITA
       */
       $ID=tatiyeNet::paramDecrypt($_POST['id']); 
       $data = new tatiyeNet();     
       $arr = array();                   
       $arr["deskripsi"] = $_POST['a1'];     
       $arr["detail"]    = $_POST['a2'];     
       $count=$data->update(" gallery ", $arr, " `id` = '".$ID."'","user_id='".ID."'"); 

     } elseif ($SEGMENT[0] == 'delete'){
      /*
      |--------------------------------------------------------------------------
      | Initializes DELETE POST ID 
      |--------------------------------------------------------------------------
      | Develover Tatiye.Net 2018
      | @Date Sel 21 Apr 2020 01:28:33  WITA
      */
      $ID=tatiyeNet::paramDecrypt($_POST['id']); 
      $data = new tatiyeNet();     
      $count  =  $data->delete("gallery", " `id` = '".$ID."'","user_id='".ID."'");
     } 
/*
|--------------------------------------------------------------------------
| Initializes AND  SESS_MEMBER_ID
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date 
*/
}
require_once($ROOT['package']);
?>
