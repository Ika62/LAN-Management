
function veto(map) {

	//Ici on récupère la valeur. ( Si c'est bo1, bo3, bo5.. ce qu'on a choisit )
	var format = document.querySelector('input[name="format"]:checked').value

	//Le compteur est = à lui même, ou à 7 s'il n'est pas défini. (au début quoi)
	veto.counter = veto.counter || 7;

	//Ici on indique que c'est la première team qui veto (celle de gauche) : c'est un boolean
	veto.firstTeam = veto.firstTeam || true;

	//Vu que dans les 3 cas, il y a 2 bans on fait ce test.
	if( veto.counter == 7 ||  veto.counter == 6) {
	    ban(map, veto.firstTeam);
	}

	else {
    	if ( format == "bo1" ) {
		    if ( veto.counter != 1) {
		        ban(map, veto.firstTeam);
		    }
		    else pick(map, veto.firstTeam);
    	}
    	else if ( format == "bo3" )	{
    			alert('bo3');
    	}
    	else {
    	    alert ('bo5');
    	}
    }

		veto.counter--;
		veto.firstTeam = !veto.firstTeam;

    if(veto.counter == 1) {
        remaining();
    }

}

function pick(map, firstTeam) {
    map.style.textDecoration = "underline";
    done(map);
}

function ban(map, firstTeam) {
    //Ici, on barre la map
    map.style.textDecoration = "line-through";
		done(map);
}

function done(map) {
	map.classList.remove("pending");
	map.disabled= "true";
}

function remaining() {
    var remainingMap = document.querySelector('input[type=button].pending');
    remainingMap.style.textDecoration = "underline";
		done(remainingMap);
}
