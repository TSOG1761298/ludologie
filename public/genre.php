<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page affiche la liste des jeux en fonction du genre fourni dans l'adresse
- Inclure le fichier de la class Ludologie
- Inclure le fichier donnees.inc.php contenant les données des jeux (crée la variable $donnees)
- Commencer par le fichier Ludologie.php

- Cette page s'attend à recevoir de l'adresse la donnée "nomGenre". Il faut donc récupérer cette donnée.
- S'il manque le genre dans l'adresse, on DOIT retourner à la page index.php
- Si le genre ne se trouve pas dans la variable $donnees, on DOIT retourner à la page index.php
*/
?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="ludologie.css" />
	<!-- /* Afficher le nom du genre dans le title */ -->
	<title>Action-aventure</title>
</head>

<body>
	<div class="interface">
		<!-- /* Inclure l'entête ici */ -->
		<header>
			<h1><a href="index.php">Ludologie<span style="font-size:.5em;">.qc</span></a></h1>
			<p style="font-variant:small-caps;font-size:1.25em;">Le lieu de rencontre des gamers québécois</p>
		</header>
		<!-- /* Faire afficher le fil d'Ariane ici */ -->
		<nav>
			<ul id="ariane">
				<li><a href="index.php">Accueil</a></li><span>Action-aventure</span></ul>
		</nav>
		<section class="body">
			<!-- /* Faire afficher l'article ici */ -->
			<article>
				<header>
					<h1>Action-aventure</h1></header>
				<ul class="jeux">
					<li><a href="jeu.php?nomGenre=Action-aventure&amp;idJeu=the_legend_of_zelda_twilight_princess"><span class="vignette" style="background-image:url(images/jeux/the_legend_of_zelda_twilight_princess_boite.png)" title="The Legend of Zelda: Twilight Princess"></span><span>The Legend of Zelda: Twilight Princess</span></a></li>
					<li><a href="jeu.php?nomGenre=Action-aventure&amp;idJeu=grand_theft_auto_v"><span class="vignette" style="background-image:url(images/jeux/grand_theft_auto_v_boite.png)" title="Grand Theft Auto V"></span><span>Grand Theft Auto V</span></a></li>
				</ul>
			</article>
		</section>
		<!-- /* Inclure le pied de page ici */ -->
		<footer>
			<p>Travail fait dans le cadre du cours "<a target="_blank" href="http://prof-tim.cstj.qc.ca/cours/web3">Intégration Web III</a>".</p>
		</footer>
	</div>
</body>

</html>
