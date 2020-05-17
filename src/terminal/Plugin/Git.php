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
<p style="padding: 10px;"id="copy"data-clipboard-text='echo "# pository" >> README.md'>echo "# pository" >> README.md </p>
<p style="padding: 10px;"id="copy"data-clipboard-text='git init'>git init </p>
<p style="padding: 10px;"id="copy"data-clipboard-text='git add .'>git add .</p>
<p style="padding: 10px;"id="copy"data-clipboard-text='git commit -m ""'>git commit -m " name" </p>
<p style="padding: 10px;"id="copy"data-clipboard-text='git remote add origin git@github.com:iandantrik112/pository.git'>git remote add origin git@github.com:iandantrik112/pository.git </p>
<p style="padding: 10px;"id="copy"data-clipboard-text='git push -u origin master'>git push -u origin master </p>
<p style="padding: 10px;"id="copy"data-clipboard-text='export COMPOSER_ALLOW_SUPERUSER=1'> export COMPOSER_ALLOW_SUPERUSER=1</p>















<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>