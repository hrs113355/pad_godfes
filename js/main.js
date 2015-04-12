addMonster = function(id){
    $.ajax("lib/monster.php?id="+id,
	{
	    type: 'GET',
	    success: function(d){
		$('#list').append("<li>" + d + "</li>")
	    }
	});
}

$(function(){
    $('#input').keydown(function(e){
    if (e.which == 13 || e.keyCode == 13){
	addMonster($('#input').val());
    }
    });
});
