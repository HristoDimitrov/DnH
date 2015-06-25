$('input#name-submit').on('click', function () {
	var name = $('input#name').val();
	$.ajax({ 
            url: 'http://hristodimitrov.github.io/DnH/ajax/name.php',
            type: 'POST',
            dataType: 'text',
            data: {
                name:name,

            },
            success: function(data) {
                $("#"+name).html(data);
            }
        });
	
 
});
