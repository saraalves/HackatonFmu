/*arquivo de javascript*/



function validacao() {
	if (document.form.checkin.value=="") {
		alert("Por favor, insira a senha do checkin");
		return false;
	}
	if (document.form.checkin.value!=="fmu") {
		alert("código de checkin errado");
		return false;
	}
	if (document.form.checkin.value=="fmu") {
		alert("Usuários cadastrados com sucesso, bem vindo a fase 1, voce tem 1h:30min para resolver as questões, boa sorte");
		return true;
	}

}