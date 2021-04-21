	function checkproduct(){
	
	
	
	var name = document.getElementById('name').value; 
		
	
		if(name == null || name == "" )
		{
		
			alert("Name can not be blank");
			return false;
		}
		
 
	
	var catagory = document.getElementById('catagory').value; 
		
	
		if(catagory == null || catagory == "" )
		{
		
			alert("catagory can not be blank");
			return false;
		}	
	
	var entrydate = document.getElementById('entrydate').value; 
		
	
		if(entrydate == null || entrydate == "" )
		{
			
			alert("Entrydate can not be blank");
			return false;
		}
			
	var model = document.getElementById('model').value; 
		
	
		if(model == null || model == "" )
		{
		
			alert("Model can not be empty");
			return false;
		}
			
	
	var price = document.getElementById('price').value; 
		
	
		if(price == null || price == "" )
		{
			
			alert("price can not be empty");
			return false;
		}
	
		
	
	var status = document.getElementById('status').value; 
		
	
		if(status == null || status == "" )
		{
			//document.getElementById('invalidname').innerHTML="";
			alert("Please fillout Product Status");
			return false;
		}
	
	
}

	
		
		

