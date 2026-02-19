$(document).ready(function(){
	$('.cambiaValido').on('click', function(event){
		$.ajax({
			type: "POST",
			url: basePath+"users/cambia",
			data:{
				id:$(this).attr("id")
			},
			dataType: "html",
			success: function(data){
				$('#msg').html('<div class="alert alert-success flash-msg">La entrega ha sido cambiada</div>');
				$('.flash-msg').delay(2000).fadeOut('slow');
				window.location.replace(basePath+"users/index");
				// if($('#'+data.pedido_update.id).hasClass('btn-danger')){
				// 	$('#'+data.pedido_update.id).addClass('btn-success');
				// 	$('#'+data.pedido_update.id).removeClass('btn-danger');
				// }else{
				// 	$('#'+data.pedido_update.id).addClass('btn-danger');
				// 	$('#'+data.pedido_update.id).removeClass('btn-success');
				// }
			},
			error: function(){
			 	alert('Tenemos problemas!!');
			}
		});
		return false;
	});
});