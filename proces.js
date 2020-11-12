var add=10;
var t;
function przyrost()
{
	
	postMessage(add);
	t=setTimeout("przyrost()",1000);
}
przyrost(); 