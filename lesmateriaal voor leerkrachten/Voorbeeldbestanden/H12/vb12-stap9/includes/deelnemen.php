		<div class="jumbotron">
			<h1 class="display-4">Klaar om deel te nemen? Shoot!</h1>
		</div>
		<form method="post" action="scripts/mailscript.php">
		<div class="row">
			<div class="col tegel">
				<div class="form-group row">
					<div class="col">
						<label for="naam">Naam</label><br>
						<p><input type="text" name="naam" size="46"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="straat">Straat en nr</label>
						<p><input type="text" name="straat" size="46"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="postcode">Postcode</label>
						<p><input type="text" name="postcode" size="46"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="gemeente">Gemeente</label>
						<p><input type="text" name="gemeente" size="46"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="gemeente">Telefoonnummer</label>
						<p><input type="tel" name="telefoon" size="46"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="gemeente">E-mail adres</label>
						<p><input type="email" name="email" size="46"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="gemeente">Geboortedatum</label><br>
						<p><input type="date" name="geboortedatum"></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<p>&nbsp;</p>
					</div>
				</div>
			</div>
			<div class="col tegel">
				<div class="form-group row">
					<div class="col">
						<label for="titel">Titel van je foto</label><br>
						<p><input type="text" name="titel" size="46"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="straat">Camera</label><br>
						<p><input type="text" name="camera" size="46"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="postcode">Lens</label><br>
						<p><input type="text" id="lens" name="lens" size="46"></p>
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="commentaar">Beschrijf je foto</label><br>
						<p><textarea rows="10" cols="47" name="commentaar"></textarea></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<input type="submit" name="deelnemen" class="btn-outline-dark btn-lg" value="deelnemen">
					</div>
				</div>
			</div>
		</div>
		</form>
