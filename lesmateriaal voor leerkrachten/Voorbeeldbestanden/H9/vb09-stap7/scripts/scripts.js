const datumvalidatie = (datum) => { 
	// De ingegeven geboortedatum valideren
    let foutboodschap = ""; 
	const datumelement = datum.split('/');
	const dag = parseInt(datumelement[0]);
	const maand = parseInt(datumelement[1]);
	const jaar = parseInt(datumelement[2]);
	let dagen = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
	if (jaar % 4 == 0) dagen[1] = 29;
	const huidigjaar = (new Date()).getFullYear();
	switch (true) {
		case (datum =="") :
			foutboodschap = "Gelieve een datum in te geven.";
			break;
		case (datumelement.length !== 3) :
			foutboodschap = "Gelieve een datum in te geven volgens het formaat dd/mm/jjjj.";
			break;
		case (isNaN(dag) || isNaN(maand) || isNaN(jaar)) :
			foutboodschap = "De dag, maand en jaar moeten getallen zijn.";
			break;
		case (dag < 1 || dag > dagen[maand - 1]) :
			foutboodschap = "De dag moet voor deze maand tussen 1 en "+dagen[maand - 1]+" liggen.";
			break;
		case (maand < 1 || maand > 12) :
			foutboodschap = "De waarde van de maand moet tussen 1 en 12 liggen.";
			break;
		case (jaar < 1901 || jaar > huidigjaar) :
			foutboodschap = "Het jaartal lijkt niet correct te zijn.";	
	}

	// De foutmelding op het scherm zetten en validatie terugsturen.
	if (foutboodschap == "") {
		return true;
		} else { 
		alert(foutboodschap);
		return false;
	}
}