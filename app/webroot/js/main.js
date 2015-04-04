
$( "#submiturl" ).click(function() {
	var url = $('#urlinput').val();
	var pieces = url.split("/");
	var user = pieces[3], id = pieces[5];
	console.log(url);
	$.ajax({url: "/tweets/submit/"+id+"/"+user, success: function(result){
		$("#tweetinput").html('Thanks');
	}});
});