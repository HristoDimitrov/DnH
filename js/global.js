$('input#name-submit').on('click', function () {
    var name = $('input#name').val();
	$.post('ajax/name.php', {name:name}, function(data) {	
        alert(data);
	});
 
});
