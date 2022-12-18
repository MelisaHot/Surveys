
function allowCharOnly(e) {
	var code = (e.which) ? e.which : e.keyCode;
	if (code > 31 && (code < 64 || code > 90 )&& (code < 96 || code > 123 )) {
		e.preventDefault();
	}
}

function PrikaziLozinku() {
	var x = document.getElementById("txtpass");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}



