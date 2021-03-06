
function veto(map, bo) {

	var pick = function(map) {
			map.style.textDecoration = "underline";
			done(map);
	}

	var ban = function(map) {
			//Ici, on barre la map
			map.style.textDecoration = "line-through";
		done(map);
	}

	var remaining = function(times) {
			// On répère le nombre de fois passé en paramètre
			for(i=0;i<times;i++) {
					 // On selectionne la map restante qui n'a plus la classe pending
					var remainingMap = document.querySelector('input[type=button].pending');
					remainingMap.style.textDecoration = "underline";
				done(remainingMap);
			}
	}

	var done = function(map) {
			// On supprime la classe "pending"
		map.classList.remove("pending");
		// On désactive le bouton map
		map.disabled = "true";
	}

	//Le compteur est = à lui même, ou à 7 s'il n'est pas défini. (au début quoi)
	veto.counter = veto.counter || 7;

	//Ici on indique que c'est la première team qui veto (celle de gauche) : c'est un boolean
	veto.firstTeam = veto.firstTeam || true;

	//Vu que dans les 3 cas, il y a 2 bans on fait ce test.
	if( veto.counter == 7) {
	    ban(map, veto.firstTeam);
	}
	if(veto.counter == 6) {
	    ban(map, veto.firstTeam);
	     if(bo == "bo5") {
	       remaining(5);
	    }
	}

	else {
    	if ( bo == "bo1" ) {
		    if ( veto.counter != 1) {
		        ban(map, veto.firstTeam);
		    }
		    else pick(map, veto.firstTeam);
    	}
    	else if ( bo == "bo3" )	{
			if( veto.counter == 5 || veto.counter == 4){
    			pick(map, veto.firstTeam);
			}
			else ban(map, veto.firstTeam);
    	}
    }

		veto.counter--;
		veto.firstTeam = !veto.firstTeam;

    if(veto.counter == 1) {
        remaining(1);
    }
}

function selectTeam(team, link) {
	document.getElementById(team).value = link.innerHTML;
	var links = document.querySelectorAll("#"+team+" + div a.team")
	for (i = 0; i < links.length; i++) {
    links[i].classList.remove("selected");
}
	link.classList.add("selected");
}
