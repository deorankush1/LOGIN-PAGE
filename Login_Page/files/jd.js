$(function(){
	$("#submit").click(function(event){
	event.preventDefault();

	var base = $("#base").val().toUpperCase();
	console.log(base);

	var Amount =$("#Amount").val();
	console.log(Amount);

	var Converter=$("#Converter").val().toUpperCase();
	console.log(Converter);

	if (base === Converter){
		alert("base and Converter should not same");
		return false;
	}

	

	$.ajax({
		
		url : "https://api.fixer.io/latest?base="+base,
		
		dataType: "json",
		
		type: "GET",
		
		success : function(data){
			var converted_value = Amount*data.rates[Converter];
			var converted_value = converted_value.toFixed(2);
			
			$("#display").html(
                   '<table class="table"><thead><td>Base</td>'+
                    '<td>Amount</td><td>Converted value</td></thead>'+
                    '<tbody><tr><td>'+base+'</td><td>'+Amount+'</td><td>'+converted_value+
                    '</td></tr></tbody></table>'
                );
            }
	   });
    });
});