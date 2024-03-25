		<div class="jumbotron">
			<h1 class="display-4">Succes met je deelname</h1>
		</div>
		<div class="row">
			<div class="col-md tegel">
				<p>Dankjewel voor je deelname. Je hebt de onderstaande foto ingestuurd. Als je dat wenst kan je met meer foto's deelnemen. Klik daarvoor hierboven opnieuw op de link "Deelnemen".</p>
				<p>Houd je mailbox in de gaten. Zodra de jury haar deliberatie heeft beëindigd, laten wij je weten of je al dan niet geselecteerd werd als laureaat.</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
			<?php
				// ingestuurde foto weergeven
				session_start();
				echo '<p><img src="upload/'.$_SESSION['foto'].'" alt="Mijn foto" class="img-fluid rounded"></p>';
				session_destroy();
				?>			
			</div>
		</div>
