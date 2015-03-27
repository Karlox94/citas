function mostrarReferencia(){
	//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
	if (document.formUser.tipo[0].checked == true) {
		document.getElementById('especialidad').style.display='block';
		document.getElementById('telefono').style.display='none';
		document.getElementById('tiposangre').style.display='none';
		document.getElementById('eps').style.display='none';
	} else if (document.formUser.tipo[1].checked == true) {
	//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
	document.getElementById('telefono').style.display='block';
	document.getElementById('tiposangre').style.display='block';
	document.getElementById('eps').style.display='block';
	document.getElementById('especialidad').style.display='none';
	//por el contrario, si no esta seleccionada
	} else {
	//oculta el div con id 'desdeotro'
	document.getElementById('telefono').style.display='none';
	document.getElementById('tiposangre').style.display='none';
	document.getElementById('eps').style.display='none';
	document.getElementById('especialidad').style.display='none';
	}
}