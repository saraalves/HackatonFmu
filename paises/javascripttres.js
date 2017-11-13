/*arquivo de javascript*/



function validacao() {
	var codigodoponto = form.codigodoponto.value; 
	
	
	
	
	if (codigodoponto == "") {
		alert('Por favor, insira o codigo do ponto');
		form.codigodoponto.focus();
		return false;
	}
	
	
	if (codigodoponto == "55") {
		
		form.codigodoponto.focus();
		return true;
	}
	
	if (codigodoponto !== "55") {
		alert('Codigo incorreto');
		form.codigodoponto.focus();
		return false;
	}
	
}