
function required(){


	if(document.getElementById("email").value.length == 0 || document.getElementById("pw").value.length == 0 || document.getElementById("username").value.length == 0)
	{
		alert("Fields cant be empty");
	}
	else {
		window.location.href="Restaurants.html"
	}

}
