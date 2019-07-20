



 
 $.getJSON('https://api.ipgeolocation.io/ipgeo?apiKey=ce861ac4d513459c889377aba4a835d3', function(data11) 
{	
	var phonecode=data11.calling_code;
	var timezone=data11.time_zone.name;
	$("#timezone").val(timezone);
	$("#callingcode").val(phonecode);
	$("#phone").focus(function(){$("#phone").val(phonecode);$("#timezone").val(timezone);});
	//$("#timezone").click(function(){$("#timezone").val(timezone);});
	}
);


