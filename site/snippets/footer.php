<?php
/*
	Snippets are a great way to store code snippets for reuse
	or to keep your templates clean.

	This footer snippet is reused in all templates.

	More about snippets:
	https://getkirby.com/docs/guide/templates/snippets
*/
?>
<footer class="footer">

	<div class="footer__links-and-newsletter">
		<div class="links">
			<h2 class="heading-2">Liens</h2>
			<a href="https://membres.coopdesvenetes.bzh">Espace membres / planning Elefan</a>
			<a href="/">Mentions légales</a>
			<?php snippet("social"); ?>
		</div>
		<div class="newsletter">
			<div class="newsletter-description">
				<h2 class="heading-2">Lettre d'information</h2>
				<p>Restez informé·e grâce à la Feuille de Chou</p>
			</div>
			<form action="">
				<input type="text" class="email-input" placeholder="Votre e-mail">
				<button type="submit">
					<img src="assets/icons/arrow-right.svg" alt="valider l'adresse email">
				</button>
			</form>
		</div>
	</div>

	<div class="footer__opening-and-delivery-times">
		<h2 class="heading-2">Horaires</h2>
		<div class="opening-times">
			<?php snippet("horaires"); ?>
		</div>
		<div class="delivery-times">
			<h3>Infos aux livreur·se·s</h3>
			<div class="delivery-details">
				<p>Horaires de livraison: du lundi au samedi de 9h30 à 12h30</p>
				<img src="assets/icons/truck.svg" alt="camion de livraison">
			</div>
		</div>
	</div>

	<div class="footer__location">
		<h2 class="heading-2">Nous trouver</h2>
		<div class="address">
			<p style="font-weight: bold;">Coop des Vénètes</p>
			<p>3 rue de Lorraine</p>
			<p>56860 Séné</p>
			<p>(à côté d'Emmaüs)</p>
		</div>
		<img src="assets/images/coop-des-venetes-plan-acces.png" alt="plan d'accès au magasin">
	</div>

</footer>
