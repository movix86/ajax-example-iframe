function carga(){
	var busqueda = document.getElementById("busqueda").value;

	if(busqueda != ""){
		var xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function(){

			if (xhttp.readyState == 4 && xhttp.status == 200) {
				document.getElementById("videos").setAttribute("src", xhttp.responseText);
			}
		};
		xhttp.open("GET", "data.php?data="+busqueda, true);
		xhttp.send();
	}else {
		document.getElementById("videos").innerHTML = "Escribe algo";
	}
	
}