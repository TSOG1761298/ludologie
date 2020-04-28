<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page affiche la liste des jeux disponibles sur le site
- Inclure le fichier de la class Ludologie
- Inclure le fichier donnees.inc.php contenant les données des jeux (crée la variable $donnees)
- Commencer par le fichier Ludologie.php
*/



//etape 7 je vient d ajouter le template du site en mettant tout les dossier dans le fichier ressource en renoment l index en blog.php
?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="ludologie.css" />
	<title>Liste des jeux</title>
</head>

<body>
	<div class="interface">
		<!-- /* Inclure l'entête ici */ -->
         <!-- etape 7 meme principe que arianne -->
         @include('techno.header')
        <!-- ----------------------- -->

		<!-- /* Faire afficher le fil d'Ariane ici */ -->
        <!-- etape 7 on enleve le menu pour le remplacer par un lien vers ariane -->
		@include('techno.ariane')
        <!-- ------------------------------------------------ -->

		<section class="body">
			<!-- /* Faire afficher l'article ici */ -->
             <!-- etape 7 meme principe que arianne -->
             <!-- @include('techno.article') -->
            <!-- ---------------------- -->

            @section('article')
            <article>

                <!-- etape 8 la page maitresse , permet d afficher user dans article en lui disant specifiquement ou-->
                <!-- {{$user}} -->
                @section('article')
                <!-- ----------------- -->

	            <header>
	            	<h1>Liste des jeux</h1></header>
	            <ul class="genres">
	            	<li>
	            		<div><a href="genre.php?nomGenre=Action-aventure">Action-aventure</a></div>
	            		<ul class="jeux">
	            			<li><a href="jeu.php?nomGenre=Action-aventure&amp;idJeu=the_legend_of_zelda_twilight_princess"><span class="vignette" style="background-image:url(images/jeux/the_legend_of_zelda_twilight_princess_boite.png)" title="The Legend of Zelda: Twilight Princess"></span><span>The Legend of Zelda: Twilight Princess</span></a></li>
	            			<li><a href="jeu.php?nomGenre=Action-aventure&amp;idJeu=grand_theft_auto_v"><span class="vignette" style="background-image:url(images/jeux/grand_theft_auto_v_boite.png)" title="Grand Theft Auto V"></span><span>Grand Theft Auto V</span></a></li>
	            		</ul>
	            	</li>
	            	<li>
	            		<div><a href="genre.php?nomGenre=Action-RPG">Action-RPG</a></div>
	            		<ul class="jeux">
	            			<li><a href="jeu.php?nomGenre=Action-RPG&amp;idJeu=the_elder_scrolls_v_skyrim"><span class="vignette" style="background-image:url(images/jeux/the_elder_scrolls_v_skyrim_boite.png)" title="The Elder Scrolls V: Skyrim"></span><span>The Elder Scrolls V: Skyrim</span></a></li>
	            		</ul>
	            	</li>
	            </ul>

                <!-- etape8 -->
                @show
                <!-- -------------------- -->

            </article>
            
		</section>
        
		<!-- /* Inclure le pied de page ici */ -->
         <!-- etape 7 meme principe que arianne -->
        @include('techno.footer')
        <!-- ---------------------- -->
	</div>
</body>

</html>
