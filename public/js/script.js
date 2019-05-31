function Datos(){
    var dato = $('#genre').val();
    var route = '/genero';
    var token = $('#token').val();

    $.ajax({
        url:        route,
        headers:    {'X-CSRF-TOKEN':token},
        type:       'POST',
        dataType:   'json',
        data:       {genre: dato},

        success:function(){
            $('#msj-success').fadeIn();
            $('#genre').val('');
        },
		error:function(msj){
		//	$("#msj").html(msj.responseJSON.genre);
			$("#msj-error").fadeIn();
		}
    });
};

$('form').keypress(function(e){
    if(e.which === 13){
        Datos();
        return false;
    }
});
$('#registro').click(function(){
    Datos();
});