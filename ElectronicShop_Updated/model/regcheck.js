	function checkvalidation(){
	
	
	
	var name = document.getElementById('name').value; 
		
	
		if(name == null || name == "" )
		{
		
			alert("Name can not be blank");
			return false;
		}
		if (name.length<=3) {
            alert ("User Name must be more then 3 letter");
            return false;
            
        }
		
	
	var password = document.getElementById('password').value; 
		
	
		if(password == null || password == "" )
		{
		
			alert("Password can not be blank");
			return false;
		}
		if (password.length<=5) {
            alert ("password must be more then 5 character");
            return false;
            
        }
		
					
	
	var repass = document.getElementById('repass').value; 
		
	
		if(repass == null || repass == "" )
		{
			
			alert("Confirm your password");
			return false;
		}
		if (password!= repass) {
                    
			alert ("please check your password and confirm password");
			return false;
		}
			
	var dob = document.getElementById('dob').value; 
		
	
		if(dob == null || dob == "" )
		{
		
			alert("Fill up Date of Birth");
			return false;
		}
		if ( dob >= 1900 && dob <=2010){
			
			alert ("Date of year must be from 1900 to 2000");
			
			return false;
		}	
	
	var gender = document.getElementById('gender').value; 
		
	
		if(gender == null || gender == "" )
		{
			
			alert("Please fill out gender");
			return false;
		}
	
	var email = document.getElementById('email').value; 
	
		
		if(email == null || email == "" )
		{
			
			alert("Please fillout Email");
			return false;
		}
		
   
	
	var phone = document.getElementById('phone').value; 
		
	
		if(phone == null || phone == "" )
		{
			
			alert("Please fillout Phone number");
			return false;
		}
	
	var address = document.getElementById('address').value; 
		
	
		if(address == null || address == "" )
		{
			
			alert("Please fillout Address");
			return false;
		}	

}

	
		
		

