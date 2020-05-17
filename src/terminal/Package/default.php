<?php 
use wolf05\helper\tatiyeNet;
      tatiyeNet::Modal([
          'status'    =>'dialog',
          'package'   =>SEGMENT_2,
          'model'     =>'auto', //Facebook Mac ,Bootstrap ,auto
          'view'      =>'default', //guide ,default
       ]);
      
 ?>

<a class="WFbtn large wficon add" onclick="WFinsert('Titel/forum/INSERT/save/on/X/120x600x0');">Add Data</a>
 
<div id="LiID">
 <table class="table table-hover">
   <tbody>
    <?php
    $no=0;
    $data = new tatiyeNet();
    $count  =  $data->select_Group(" * ", "gallery", " `row` = '1' ");
    while ($ngi = $data->getObjectResults()){
      $id=$ngi->id;
      $id_trm=tatiyeNet::paramEncrypt($id);
      $no=$no+1;
    ?>
     <tr>
       <td><?php echo $no?></td>
       <td><?php echo $ngi->deskripsi;?></td>
       <td><?php echo $ngi->detail;?></td>
       <td>
         <a class="WFbtn confirm large icn pic-2"onclick="WFupdate('Update/forum/UPDATE/edit/on/<?php echo $id_trm?>/120x600x0');">Update</a> 
         <a class="WFbtn large icn pic-56"onclick="WFdelete('delete/id/<?php echo $id_trm?>');">Delete</a>
       </td>
     </tr>
   <?php }?>
   </tbody>
 </table>
</div>







