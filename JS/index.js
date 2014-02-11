$(document).ready(function() {
	//Cookie setting
	if($.cookie("lastTime") === undefined){
		var greetings = $("<P>"+"Welcome new guest" + "</P>");
		$("#cookies").append(greetings);
		$.cookie("lastTime", Date(), { expires : 30 });
	}
	else{
		var greetings = $("<P>"+"Welcome to our brewer hound again. Last visit was at " + $.cookie("lastTime")+ "</P>");
		$("#cookies").append(greetings);
		$.cookie("lastTime", Date(), { expires : 30 });

		if($.cookie("price") !== undefined){
			$("#price").val($.cookie("price"));
		}
		if($.cookie("rate") !== undefined){
			$("#rate").val($.cookie("rate"));
		}
		if($.cookie("dist") !== undefined){
			$("#dist").val($.cookie("dist"));
		}
		if($.cookie("style") !== undefined){
			$("#style").val($.cookie("style"));
		}
	}

	$("#form1").submit(function(e){
		e.preventDefault();
		$.cookie("price", $("#price").val(), { expires : 30 });
		$.cookie("rate", $("#rate").val(), { expires : 30 });
		$.cookie("dist", $("#dist").val(), { expires : 30 });
		$.cookie("style", $("#style").val(), { expires : 30 });
		$("#outputBlk").children().remove();

		$.ajax("api/TiJiaoXinXi.php",{
			type: 'GET',
			data: {
				city: $("#city").val(),
				rating: $("#rate").val()
			},
			success : function(data, textStatus, jqXHR) {
				console.log(data);
				for (var x in data){
					var shop = data[x].brewery_name;
					var addr = data[x].brewery_address;
					var state = data[x].state_name;
					var rat = data[x].brewery_rating;
					$("#outputBlk").append("<h3>" + shop + "</h3>" +"<p>" +"Address: "+ addr +"</p>" 
						+"<p>" +"State: "+ state +"</p>"+"<p>" + "Rating: "+ rat +"</p>" +"<br/>");
				}
			},
			error : function(data, textStatus, jqXHR) {
				alert("Cannot connect to back end server (or there was a DB error). Please try again.");
			},
			cache : false
		});

		e.stopPropagation();
	})

	$("#disableBack").click(function(e){
		e.preventDefault();
		$("body").attr("background", "white");
		$("#disableBack").toggle(1000);
		e.stopPropagation();
	})

	$("img").mouseover(function(){
		$(this).css("height", "450px");
		$(this).css("width", "450px");
	});

	$("img").mouseout(function(){
		$(this).css("height", "300px");
		$(this).css("width", "300px");
	});





	$("#form2").submit(function(e){
		e.preventDefault();

		$.ajax("api/xinJiuGuan.php",{
			type: 'POST',
			data: {
				name: $("#name2").val(),
				street: $("#street2").val(),
				city: $("#city2").val(),
				state: $("#state2").val()
			},
			success : function(data, textStatus, jqXHR) {
				console.log(data);
				// alert("Thanks for your interest in Brewer Hound!.");
			},
			error : function(data, textStatus, jqXHR) {
				alert("Cannot connect to back end server (or there was a DB error). Please try again.");
			},
			cache : false
		});

		e.stopPropagation();
	})
})