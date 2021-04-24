	function checkproduct(){
	
	
	
	var name = document.getElementById('name').value; 
		
	
		if(name == null || name == "" )
		{
		
			alert("Name can not be blank");
			return false;
		}
	
	var vendorname = document.getElementById('vendorname').value; 
		
	
		if(vendorname == null || vendorname == "" )
		{
		
			alert("Vendor Name can not be blank");
			return false;
		}
			
		
 
	
	var catagory = document.getElementById('catagory').value; 
		
	
		if(catagory == null || catagory == "" )
		{
		
			alert("catagory can not be blank");
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
	
		
	
	var stock = document.getElementById('stock').value; 
		
	
		if(stock == null || stock == "" )
		{
			//document.getElementById('invalidname').innerHTML="";
			alert("Please fillout Stock amount");
			return false;
		}
	
	
}

	
		
		

