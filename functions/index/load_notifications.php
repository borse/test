<?php
	session_start();
	
	include('../db.php');
	$developer_id= $_SESSION['SESS_MEMBER_ID'];
	
	$rows=get_appointed_tags($developer_id);
	//reverse the array rows.. to print the lastest tags, instead of the first tags..
	$rows=array_reverse($rows);
	

	$counter=$_POST['counter'];
	
	// echo User has taged you @ pagename/tasktitle @ update NO: $row['to_do_update_id']
	foreach($rows as $row)
	{
	 
		?>
        	<p  class="info" > <b><?=$name=get_appointed_dev_name($row['creator_dev_id'])?> </b>has tagged you @ <b><?=get_page_name($row['to_do_id'])?></b>/<b onclick="notification_clicked(<?=$row['tag_ID']?>)"><?=get_task_name($row['to_do_id']) ?></b>  <br/> @ Update NO:  <b onclick="notification_clicked(<?=$row['tag_ID']?>)"><?=$row['to_do_update_id']?> </b> </p>  
            
          
        <?php
		
		if($counter==0)
		{
				break;
		}
	
	
			$counter--;
		
		
	}




?>