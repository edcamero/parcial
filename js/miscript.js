function hacer_click() {
	document.querySelector("#principal").onclick=mostraralerta;

}


function mostraralerta() {
	alert("hizo click");
}


window.onload=hacer_click;