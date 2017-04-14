function validformdata() {
	alert("inside validformdata");
	debugger;
	// var oakn = document.forms["oak_form"]["oak_name"];
	var inpName = document.getElementById("id_oak_name");
	// var oake = document.forms["oak_form"]["oak_email"];
	var inpEmail = document.getElementById("id_oak_email");
	alert("inpName.value="+inpName.value);
	alert("inpEmail.value="+inpEmail.value);
	// alert("oakn.text="+oakn.text);
	if (inpName.value == '' || inpEmail.value == '')
	// if (oakn == undefined || oake == undefined)
	{
		alert("Missing name or email or both");
		return false;
	}
	var inpEmail = document.getElementById("id_oak_email");
	if (inpEmail.checkValidity() == false)
	{
		alert("Email is not valid");
		return false;
	}
	return true;

}

function dothis()
{
	alert('dothis alert');
}
