
function cambio_detalle(){	
	var select = document.getElementById("detalle");
	if(select.options[select.selectedIndex].value=="venta"){
		document.getElementById("valor_u").value="venta";
		document.getElementById("valor_u").style.display="none";	
	}
	if(select.options[select.selectedIndex].value=="compra"){
		document.getElementById("valor_u").value="";
		document.getElementById("valor_u").style.display="block";	
	}
	
	
}