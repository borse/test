// JavaScript Document

$('#name').keyup(function(){
     //start of function

     var name = $('#name').val();
     $.post('php/proccess_name.php',{name:name},function(data){
         //start of function
         $('#name_feedback').html(data);


       }//end of fcuntion
       ); //end of $.post


    }//end of function
  )//end ; /end of keyup



function hide_element(element,speed)
	{
		$(element).hide(speed);
	}//end of function_hide element
	
	

$(document).ready(function()

 {
		$("a").click(function()

	 {
		alert("you clicked the link!");
		return false;
		 
	 })

 }
 

);//end of document.ready