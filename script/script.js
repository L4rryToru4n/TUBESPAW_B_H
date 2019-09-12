function hamburgerfunc(){
	document.getElementById('sidebar').classList.toggle("animationSideBar")
	document.getElementById('navbar').classList.toggle("animationNavBar")
	document.getElementById('dashboardData').classList.toggle("animationDashboardData")
}

function displaySearch(e){
	console.log(e)
	if(e.keyCode === 13){
		var elm = document.getElementById('searchInput')
		alert('You are searching for text "' + elm.value + '"')
	}
}

function hurufAll(inputnama){

	var empt = document.forms["formumanager"]["usrname"].value;
	var letters = /^[A-Za-z]+$/;
	if(inputnama.value.match(letters))
	{
		return true;
	}
	else if(empt == "")
	{
		alert("Field must not be empty");
		return false;
	}
	else
	{
		alert('Field name may only contain letters (A-z, az)');
		return false;
	}  
}

function angkaAll(inputangka)
{
	var empt = document.forms["formumanager"]["pnumber"].value;
	var numbers = /^[0-9]+$/;
	if(inputangka.value.match(numbers))
	{
		document.formumanager.pnumber.focus();
		return true;
	}
	else if(empt == "")
	{
		alert("Field must not be empty");
		return false;
	}
	else
	{
		alert('Field name may only contain numbers (0-9)');
		document.formumanager.pnumber.focus();
		return false;
	}
} 

function noempt(inputangka)
{
	var empt = document.forms["formumanager"]["uemail"].value;
	if(inputangka.value.match(numbers))
	{
		return true;
	}
	else (empt == "")
	{
		alert("Field must not be empty");
		return false;
	}
}