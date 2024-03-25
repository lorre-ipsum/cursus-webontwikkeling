		<div class="jumbotron">
			<h1 class="display-4">Je foto insturen</h1>
		</div>
		<div class="row">
			<div class="col-md tegel">
				<p>Bedankt voor je deelname! Dit is de informatie die je ons hebt doorgestuurd:</p>
				<?php
				// gegevens uit de sessie weergeven
				session_start();
				echo '<p>Naam: '.$_SESSION['naam'].'<br>
					Straat: '.$_SESSION['straat'].'<br>
					Gemeente: '.$_SESSION['postcode'].' '.$_SESSION['gemeente'].'<br>
					Telefoonnummer: '.$_SESSION['telefoon'].'<br>
					E-mail adres: '.$_SESSION['email'].'<br>
					Geboortedatum: '.$_SESSION['geboortedatum'].'</p>
					<p>Titel: '.$_SESSION['titel'].'<br>
					Camera: '.$_SESSION['camera'].'<br>
					Lens: '.$_SESSION['lens'].'<br>
					Commentaar: '.$_SESSION['commentaar'].'</p>';
				session_destroy();
				?>
			</div>
		</div>
		
