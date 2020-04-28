<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page affiche une auto en fonction de la marque et de l'adresse fournis dans l'adresse
- Inclure le fichier de la class Ludologie
- Inclure le fichier donnees.inc.php contenant les données des jeux (crée la variable $donnees)
- Commencer par le fichier Ludologie.php

- Cette page s'attend à recevoir de l'adresse les données "nomGenre" et "idJeu". Il faut donc récupérer ces données.
- S'il manque une de ces deux données dans l'adresse, on DOIT retourner à la page index.php
- Récupérer le jeu correspondant
- Si le jeu ne se trouve pas dans la variable $donnees, on DOIT retourner à la page index.php
*/
?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="ludologie.css" />
	<!-- /* Faire afficher le titre du jeu ici (dans un title); */ -->
	<title>The Legend of Zelda: Twilight Princess</title>
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
				<li><a href="index.php">Accueil</a></li>
				<li><a href="genre.php?nomGenre=Action-aventure">Action-aventure</a></li>
				<li><span>The Legend of Zelda: Twilight Princess</span></li>
			</ul>
		</nav>
		<section class="body">
			<!-- /* Faire afficher l'article ici */ -->
			<article>
				<header>
					<h1>The Legend of Zelda: Twilight Princess</h1></header>
				<p class="intro">The Legend of Zelda: Twilight Princess (litt. «&nbspLa légende de Zelda : La princesse du crépuscule&nbsp») est un jeu vidéo d'action-aventure développé par Nintendo EAD et édité par Nintendo sorti initialement sur GameCube et sur Wii. Il s’agit du treizième opus de la série <cite>The Legend of Zelda</cite>.</p>
				<figure class="photoprincipale"><img src="images/jeux/the_legend_of_zelda_twilight_princess.png" alt="The Legend of Zelda: Twilight Princess" title="The Legend of Zelda: Twilight Princess" />
					<figcaption>The Legend of Zelda: Twilight Princess</figcaption>
				</figure>
				<p>Link est au début un jeune fermier de Toal qui vit avec ses quatre amis et sa meilleure amie: Iria. Malheureusement, elle se fait capturer, ainsi que les autres par des monstres montés sur des sangliers.</p>
				<p>À la recherche de ses amis, Link aperçoit un mur noir inquiétant et se fait emporter au Royaume du Crépuscule. Un agent du crépuscule essaie de l'éliminer, mais la Triforce du courage l'en empêche et transforme notre héros en loup. Plus tard, au château d'Hyrule, là où il s'est fait emprisonner, Link rencontre Midona, qui le libère, puis la princesse Zelda qui lui apprend que ce monde est en fait leur monde conquis par Xanto, le roi des Ombres.</p>
				<p>Pour libérer sa région du règne du Crépuscule, il doit retrouver des perles de lumière, dispersées dans tout le territoire. Il en fera de même avec toutes les régions d'Hyrule. Après avoir accompli cette tache, l'Esprit gardien de la lumière de ladite région lui redonnera sa forme humaine.</p>
				<h2>Caractéristiques</h2>
				<ul class="caracteristiques">
					<li><span class="etiquette">Éditeur</span><span>Nintendo</span></li>
					<li><span class="etiquette">Développeur</span><span>Nintendo EAD</span></li>
					<li><span class="etiquette">Date de sortie</span><span>11 décembre 2006</span></li>
					<li><span class="etiquette">Genre</span><span>Action-aventure</span></li>
					<li><span class="etiquette">Mode de jeu</span><span>Un joueur</span></li>
					<li><span class="etiquette">Plate-forme</span><span><cite>Wii</cite><cite>GameCube</cite><cite>Wii U</cite></span></li>
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
