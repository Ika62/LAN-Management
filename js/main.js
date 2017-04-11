function veto() {
	
	var format = document.querySelector('input[name="format"]:checked').value; //Ici on récupère la valeur. ( Si c'est bo1, bo3, bo5.. ce qu'on a choisit )
	
	if ( format == "bo1" )
	{
		alert('bo1');
	}
	
	else if ( format == "bo3" )
	{
		alert('bo3');
	}
	
	else alert ('bo5');
	
}
