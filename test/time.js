let time,today;
function Start()
{
	time=new Date().getTime();
	today = new Date();
let dd = String(today.getDate()).padStart(2, '0');
let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
let yyyy = today.getFullYear();

today =  yyyy+ '-' +  mm+ '-' + dd;
}
function End()
{
	time=(new Date().getTime()-time)/1000;
	document.getElementById('time').value=time;
	document.getElementById('date').value=today;
}