/*arquivo de javascript*/



function validacao() {
	var nomeequipe = form.nomeequipe.value; 
	var nomelider = form.nomelider.value; 
	var email = form.email.value; 
	var ra = form.ra.value;
	var nomeu2 = form.nomeu2.value;
	var rau2 = form.rau2.value; 
	var nomeu3 = form.nomeu3.value; 
	var rau3 = form.rau3.value; 
	
	
	
	if (nomeequipe == "") {
		alert('Por favor, insira o nome da equipe');
		form.nomeequipe.focus();
		return false;
	}
	
	if (nomelider == "") {
		alert('Por favor, insira o nome do Líder');
		form.nomelider.focus();
		return false;
	}
	
	if (email == "") {
		alert('Por favor, insira o email do Líder');
		form.nomelider.focus();
		return false;
	}

	if (ra == "") {
		alert('Por favor, insira o ra do Líder');
		form.ra.focus();
		return false;
	}
	
	if (nomeu2 == "") {
		alert('Por favor, insira o nome do segundo integrante');
		form.nomeu2.focus();
		return false;
	}
	
	if (rau2 == "") {
		alert('Por favor, insira o ra do segundo integrante');
		form.rau2.focus();
		return false;
	}
	
	if (nomeu3 == "") {
		alert('Por favor, insira o nome do terceiro integrante');
		form.nomeu3.focus();
		return false;
	}
	
	if (rau3 == "") {
		alert('Por favor, insira o ra do terceiro integrante');
		form.rau3.focus();
		return false;
	}
	
	
	
}