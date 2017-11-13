/*arquivo de javascript*/



function validacao() {
	var codigodoponto = form.codigodoponto.value; 
	
	
	
	
	if (codigodoponto == "") {
		alert('Por favor, insira o codigo do ponto');
		form.codigodoponto.focus();
		return false;
	}
	
	
	if (codigodoponto == "61") {
		
		form.codigodoponto.focus();
		return true;
	}
	
	if (codigodoponto !== "61") {
		alert('Codigo incorreto');
		form.codigodoponto.focus();
		return false;
	}
	
}