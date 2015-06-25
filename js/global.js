$('input#name-submit').on('click', function () {
	var name = $('input#name').val();
	$.post('https://github.com/HristoDimitrov/DnH/blob/gh-pages/ajax/name.php', {name:name}, function(data) {	
        	alert(1);
	});
 
});
