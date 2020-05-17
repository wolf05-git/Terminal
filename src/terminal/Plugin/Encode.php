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
			<td><pre><code class="language-js">tatiyeNet::Encode("123")</code></pre></td>
			<td><?php echo $en=tatiyeNet::Encode("123")?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::Decode(<?php echo $en?>)</code></pre></td>
			<td><?php echo tatiyeNet::Decode($en)?></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::paramEncrypt( "Secret");</code></pre></td>
			<td><?php echo $en1=tatiyeNet::paramEncrypt( "Secret");?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::paramDecrypt(<?php echo $en1 ?>);</code></pre></td>
			<td><?php echo tatiyeNet::paramDecrypt($en1);?></td>
		</tr>


		<tr>
			<td><pre><code class="language-js">tatiyeNet::CSRF();</code></pre></td>
			<td><?php echo tatiyeNet::CSRF();?></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::CSRF('POST',"ID");</code></pre></td>
			<td><?php echo tatiyeNet::CSRF();?></td>
		</tr>

        <tr>
            <td style="width: 300px;"><pre><code class="language-js">$TOKEN</code></pre></td>
            <td><?php echo $TOKEN?></td>
        </tr>
        <tr>
            <td><pre><code class="language-js">$KEY</code></pre></td>
            <td><?php echo $KEY?></td>
        </tr>
        <tr>
            <td><pre><code class="language-js">$USER_ID</code></pre></td>
            <td> User ID :<?php echo $USER_ID?></td>
        </tr>
        <tr>
            <td><pre><code class="language-js">$USER_NAME</code></pre></td>
            <td> User Name :<?php echo $USER_NAME?> </td>
        </tr>
        <tr>
            <td><pre><code class="language-js">$_SESSION['SESS_MEMBER_ID']</code></pre></td>
            <td>ID : <?php echo $_SESSION['SESS_MEMBER_ID'];?> </td>
        </tr>
        <tr>
            <td><pre><code class="language-js">tatiyeNet::IMG('account');</code></pre></td>
            <td> <img style="width:40px;"src="<?php echo tatiyeNet::IMG('account');?>"> </td>
        </tr>

        <tr>
            <td style="width: 300px;"><pre><code class="language-js">tatiyeNet::Account('name');</code></pre></td>
            <td><?php echo tatiyeNet::Account('name');?></td>
        </tr>

        <tr>
            <td style="width: 300px;"><pre><code class="language-js">tatiyeNet::User('FirstName');</code></pre></td>
            <td><?php echo tatiyeNet::User('FirstName');?></td>
        </tr>

        <tr>
            <td style="width: 300px;"><pre><code class="language-js">TOKEN</code></pre></td>
            <td><?php echo $TOKEN?></td>
        </tr>
        <tr>
            <td><pre><code class="language-js">KEY</code></pre></td>
            <td><?php echo $KEY?></td>
        </tr>
        <tr>
            <td><pre><code class="language-js">ID</code></pre></td>
              <td><?php echo $_SESSION['SESS_MEMBER_ID'];?> </td>
        </tr>


		<tr>
			<td><pre><code class="language-js">tatiyeNet::UserAgents('Session','IP');</code></pre></td>
			<td><?php echo tatiyeNet::UserAgents('Session','IP');?></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::UserAgents('Session','KEY');</code></pre></td>
			<td><?php echo tatiyeNet::UserAgents('Session','KEY');?></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::UserAgents('Session','PFM');</code></pre></td>
			<td><?php echo tatiyeNet::UserAgents('Session','PFM');?></td>
		</tr>


		<tr>
			<td><pre><code class="language-js">tatiyeNet::UserAgents('Session','BWR');</code></pre></td>
			<td><?php echo tatiyeNet::UserAgents('Session','BWR');?></td>
		</tr>


		<tr>
			<td><pre><code class="language-js">tatiyeNet::UserAgents('Session','OS');</code></pre></td>
			<td><?php echo tatiyeNet::UserAgents('Session','OS');?></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::UserAgents('Session','DTE');</code></pre></td>
			<td><?php echo tatiyeNet::UserAgents('Session','DTE');?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::UserAgents('Session','TIM');</code></pre></td>
			<td><?php echo tatiyeNet::UserAgents('Session','TIM');?></td>
		</tr>

		<tr>
			<td><pre><code class="language-js">tatiyeNet::UserAgents('Session','DATE');</code></pre></td>
			<td><?php echo tatiyeNet::UserAgents('Session','DATE');?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::UserAgents('Session','USER');</code></pre></td>
			<td><?php echo tatiyeNet::UserAgents('Session','USER');?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::UserAgents('Session','VISIT');</code></pre></td>
			<td><?php echo tatiyeNet::UserAgents('Session','VISIT');?></td>
		</tr>
		<tr>
			<td><pre><code class="language-js">tatiyeNet::UserAgents('Session','PAC');</code></pre></td>
			<td><?php echo tatiyeNet::UserAgents('Session','PAC');?></td>
		</tr>
	</tbody>
</table>

<?php 
tatiyeNet::DirStyle($FLR,'clipboard.code.js');
tatiyeNet::DirStyle($FLR,'wolf05.js');
?>