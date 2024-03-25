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
				?>
			</div>
			<div class="col-md tegel">
				<p>Nu kan je je foto doorsturen. Die moet voldoen aan deze voorwaarden:</p>
				<ul>
					<li>De bestandsnaam van de foto bevat in deze volgorde je familienaam, je voornaam en de titel van je foto, alle woorden van elkaar gescheiden met een underscore (bijvoorbeeld: Peeters_Frans_Zonsondergang_bij_Oosterwijk.jpg)</li>
					<li>Enkel bestanden in de volgende bestandstypes worden aanvaard: .jpg .jpeg en .png</li>
				</ul>
				<p><form action="begin.php?page=upload" method="post" enctype="multipart/form-data"></p>
					<p><input type="file" name="bestand"></p>
					<p class="knoppen"><input type="submit" value="Upload" class="btn-outline-dark btn-lg"></p>
				</form>
				<p class="melding">
				<?php	
					$uploadmap = 'upload/';
					$ext_toegestaan = ['jpg', 'jpeg', 'png'];
					if (!empty($_FILES)) {
						$ext = strtolower(substr($_FILES['bestand']['name'], strrpos($_FILES['bestand']['name'], '.') + 1));
						switch(true):
							//er is geen bestand geselecteerd
							case ($_FILES['bestand']['error'] === UPLOAD_ERR_NO_FILE):
								echo 'Je moet eerst een bestand selecteren.';
								break;
							//er is geen bestand geselecteerd
							case (file_exists($uploadmap.$_FILES['bestand']['name'])):
								echo 'Er bestaat al een bestand met dezelfde naam.';
								break;
							//de bestandsextensie is niet toegestaan
							case (!in_array($ext, $ext_toegestaan)):
								echo 'Dit bestandstype is niet toegestaan.';
								break;
							//het bestand wordt bewaard en de dank-pagina geopend
							default:
								move_uploaded_file($_FILES['bestand']['tmp_name'], $uploadmap.$_FILES['bestand']['name']);
								$_SESSION['foto'] = $_FILES['bestand']['name'];
								header("Location: begin.php?page=dank");
						endswitch;
					}
				?>
				</p>
				
			</div>
		</div>
		
