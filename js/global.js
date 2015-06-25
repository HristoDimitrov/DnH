$('input#name-submit').on('click', function () {
	var name = $('input#name').val();
	$.ajax({ 
            url: 'ajax/name.php',
            type: 'POST',
            data: {
                name:name,

            },
            success: function(mydata) {
                alert(mydata);
            }
        });
	
 
});
