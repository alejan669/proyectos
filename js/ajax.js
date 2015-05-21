$(function(){
	$('#search').focus();
	$('#search_form').submit(function(e){
		e.preventDefault();
	})

	$('#search').keyup(function(){

		var envio = $('#search').val();
		if(envio !=""){
		$('#resultados').html('<h4><img src="../images/cargando.gif" alt="" width="100px"><br>Cargando</h4>');
	}else{
$('#resultados').html('');
	}
		$.ajax({
			type:'POST',
			url: '/boot/index.php/consultar/search',
			data: ('search='+envio),
			success: function(resp){
				if(resp!=""){
					$('#resultados').html(resp);
				}
			}

		})
	})


	$('#search1').keyup(function(){

		var envio = $('#search1').val();
		if(envio !=""){
		$('#resultados1').html('<h4><img src="images/cargando.gif" alt="" width="100px"><br>Cargando</h4>');
	}else{
$('#resultados1').html('');
	}
		$.ajax({
			type:'POST',
			url: 'includes/listar_saldos.php',
			data: ('search='+envio),
			success: function(resp){
				if(resp!=""){
					$('#resultados1').html(resp);
				}
			}

		})
	})



});

