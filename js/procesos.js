


$('body').on('click', '.mask .info', function(){
		
	var bloq1 = $(this).parent().parent().parent();
		var id     = bloq1.parent().find('input').get(0).value;
		document.location.href = "single.php?id=" + id;

	});
	