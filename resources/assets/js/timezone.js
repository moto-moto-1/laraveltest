



 
 $.getJSON('https://api.ipgeolocation.io/ipgeo?apiKey=ce861ac4d513459c889377aba4a835d3', function(incoming) 
{	
	var phonecode=incoming.calling_code;
	var timezone=incoming.time_zone.name;
	$("#timezone").val(timezone);
	$("#phone").focus(function(){$("#phone").val(phonecode);$("#timezone").val(timezone);});
	//$("#timezone").click(function(){$("#timezone").val(timezone);});
	}
);


