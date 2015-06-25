$('input#name-submit').on('click', function () {
	var name = $('input#name').val();
	$.post('http://hristodimitrov.github.io/DnH/ajax/name.php', {name:name}, function(data) {	
        	alert(1);
	});
 
});
