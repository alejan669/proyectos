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

$('#search_formdirector').focus();
	$('#search_form').submit(function(e){
		e.preventDefault();
	})
	$('#search_formdirector').keyup(function(){
		
		var envio = $('#search_formdirector').val();
		if(envio !=""){
		$('#resultados2').html('<h4><img src="../images/cargando.gif" alt="" width="100px"><br>Cargando</h4>');
	}else{
$('#resultados2').html('');
	}
		$.ajax({
			type:'POST',
			url: '/boot/index.php/consultar/searchdire',
			data: ('search='+envio),
			success: function(resp){
				if(resp!=""){
					$('#resultados2').html(resp);
				}
			}

		})
	})

	$('#search_formjurado').focus();
	$('#search_form').submit(function(e){
		e.preventDefault();
	})
	$('#search_formjurado').keyup(function(){
		
		var envio = $('#search_formjurado').val();
		if(envio !=""){
		$('#resultados1').html('<h4><img src="../images/cargando.gif" alt="" width="100px"><br>Cargando</h4>');
	}else{
$('#resultados1').html('');
	}
		$.ajax({
			type:'POST',
			url: '/boot/index.php/consultar/searchjura',
			data: ('search='+envio),
			success: function(resp){
				if(resp!=""){
					$('#resultados1').html(resp);
				}
			}

		})
	})

	



});

