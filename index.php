 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Develop</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
.aligen_cen {
	text-align: center;
}
.alig_center {
	text-align: center;
}
</style>
</head>

<body id="body">

 <div class="menu">
        <div class="arrow-right">
        
        </div>
	
</div>

<div id="div_main_body">
	<div id="div_static_area" >
    
    	 <nav class="horizontal-nav full-width horizontalNav-notprocessed">
     
     		   <ul>
        
        
                    <li><a onclick="load_created_tasks()">Tasks Created</a> </li>
                     <li><a onclick="load_created_tags(400)"> Tags Created</a></li>
                     <li><a onclick="load_notifications(400)">Notifications	 </a></li>
                     <li><a onclick="clear_div_print_table()"> Hide</a> </li>
                     </ul>
             
   			 </ul> 
  </nav>
		<p class="float_breaker"></p>
		<p id="p_nav_clicked"> Select an Option from above</p>
        <div id="div_print_table">
            
 	   </div>
        
        
     </div>
     <div id="div_dynamic_area">
     <h2> Notifications:</h2>
     <p></p>
     <p>Unread notifications:</p>
     <div id="div_unread_notifications_table">
 			       
      </div>
        <!-- this div is deactivated for now .  <p>Recent notifications:</p>.  -->
    
     <div id="div_notification_table">
 			       
      </div>
 			       
       </div>
</div>

<div class= "log" id= "log"> 
</div>
<div class= "buffer" id= "buffer"> 
</div>








	
    <p>&nbsp; </p>
    
<p>&nbsp;</p>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/scripts/general.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>
