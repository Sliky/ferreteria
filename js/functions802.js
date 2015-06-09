$(document).ready(function(){

	  $("#logear").click(function(){
	     var usua=$("#usuario").val();
    	 var contra=$("#contrasenia").val();
    	 
    	 	$.post("views/buscausuarios.php",{usua:usua,contra:contra},
    	 		function(resul){
   				$(".results").empty().append(resul);
    		});
	});
});

