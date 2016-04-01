$(document).ready(function(){
	$("#save").click(function(){
		validateForm();		
		return false;
	});

	$("#cancel").click(function(){
				
		return false;
	});

	function validateForm(){	

		var cancel = false;

	    var nameReg = /^[A-Za-z]+$/;
	    var numberReg =  /^[0-9]+$/;
	    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

		var email = $('#email').val();
		var pass = $('#password').val();

		console.log("http://localhost:8080/wear/get/"+email+"/"+pass);

    	var inputVal = new Array(email, pass);

        if(inputVal[0] == ""){
        	cancel == true;
        	$('#email').addClass('error');        	
        	$('#msg-email').text("No puede ir vacio");
            $('#msg-email').show();
        }else{
        	if(!emailReg.test(email)){
        		cancel == true;
        		$('#email').addClass('error'); 
        		$('#msg-email').text("Introduzca un nombre valido");
            	$('#msg-email').show();
        	}
        }  

        if(inputVal[1] == ""){	
        	cancel == true;
        	$('#password').addClass('error');        	
        	$('#msg-password').text("No puede ir vacio");
            $('#msg-password').show();
        }                        

        if(!cancel){
        	goToMain();
        }

        function goToMain(){
			$.ajax({
				type:"GET",
				url:"http://localhost:8080/wear/get/"+email+"/"+pass,
				cache:false,
				beforeSend: function(){

				},
  				success: function (dato){
  					console.log("Rest:",dato.toString());
  					var em = dato.toString().split('@');
  					console.log("splist:",em[0]);
					var em = dato.toString().split('@');;
  					var srt = 'http://localhost:8080/wear/'+em[0]+'/account/';
  					setTimeout("window.location.href = '"+srt+"'", 600);
  					
				},
				error: function(){
					
				}				
			});
        }        
	}
});//endDocument