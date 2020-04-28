<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
- Compléter les méthodes suivantes
- Toutes les méthodes sont statiques
- Conseils :
	- Commencer par créer toutes les méthodes vides avec les bons paramètres et la bonne valeur de retour
	- Faire chaque méthode en oubliant le contexte dans lequel elles seront utilisées. "Elles prennent des données et retournent une valeur. Point final!"
	- Tester CHAQUE méthode individuellement en ajoutant une ligne de test à la fin de ce document (comme pour l'exercice "objet divers". La ligne de test doit être à l'extérieur de la classe.
*/
class Ludologie {
	/**
	 * Méthode "formaterDate" qui retourne l'affichage en francais d'un timestamp fourni
	 * @param  integer $timestamp - Le timestamp à formater. Valeur par défaut: null.
	 * @return string - Une date au format 24 décembre 2010
	 */
	static public function formaterDate($timestamp=null) {
		setlocale(LC_ALL, 'fra');
		if (is_null($timestamp)) {
			$timestamp = time();
		}
		$resultat = strftime("%#d %B %Y", $timestamp);
		$resultat = utf8_encode($resultat);
		return $resultat;
	}


	/**
	 * Méthode "trouverJeu" qui retourne le array représentant un jeu.
	 * En fonction du genre et du id envoyés en paramètres.
	 * Si le genre n'existe pas ou le jeu n'existe pas pour ce genre, on retourne false
	 * @param array  $jeux     - Le array contenant les jeux
	 * @param string $nomGenre - Le genre à rechercher
	 * @param string $idJeu    - le jeu à rechercher dans le genre
	 * @return array	- Le array du jeu ou false
	 */


	/**
	 * Méthode "ariane" qui retourne la balise nav contenant le fil d'Ariane
	 * @param  string $nomGenre - Le genre à traiter. Valeur par défaut: ""
	 * @param  string $titreJeu   - Le titre du jeu qui est affichée. Valeur par défaut: ""
	 * @return string - Le HTML de la balise nav
	 */


	/**
	 * Méthode "image" qui retourne l'image du jeu donné.
	 * Si $vignette est true, alors on retourne le span.vignette sinon, on retourne figure.photoprincipale
	 * @param  string  $idJeu    - le id du jeu (donc le nom du fichier)
	 * @param  array   $jeu      - le jeu comme telle
	 * @param  boolean $vignette	- s'agit-il d'une vignette?  Valeur par défaut : false
	 * @return string  - Le HTML du figure ou d'un span
	 */


	/**
	 * Méthode "lien" qui retourne le lien vers un jeu
	 * Note : Cette méthode utilise la méthode "image"
	 * @param  string $idJeu    - Le id du jeu
	 * @param  array  $jeu      - La jeu comme telle
	 * @return string - Le HTML d'une balise a
	 */


	/**
	 * Méthode "listeJeux" qui retourne le HTML du ul.jeux qui fait la liste des jeux d'un genre
	 * Note : Cette méthode utilise la méthode "lien"
	 * @param  array  $jeux	- La liste des jeux à afficher
	 * @return string - Le HTML d'une balise ul
	 */


	/**
	 * Méthode "listeGenres" qui retourne le HTML du ul.genres qui fait la liste des genres
	 * Note : Cette méthode utilise la méthode "listeJeux "
	 * @param  array $genres - La liste des genres (incluant leurs jeux)
	 * @return string - Le HTML d'une balise ul
	 */


	/**
	 * Méthode "ligne" qui retourne le HTML d'un li se trouvant dans la liste ul.caracteristiques
	 * @param  string $idJeu - Le id du jeu à afficher
	 * @param  array  $jeu   - Les informations d'un jeu (voir le format dans donnees.inc.php)
	 * @return string - Le HTML d'une balise article
	 */


	/**
	 * Méthode "caracteristiques" qui retourne le HTML du ul.caracteristiques
	 * Note : Cette méthode utilise les méthodes "ligne", "formaterDate" et "platesFormes"
	 * @param  string $idJeu - Le id du jeu à afficher
	 * @param  array  $jeu   - Les informations d'un jeu (voir le format dans donnees.inc.php)
	 * @return string - Le HTML d'une balise article
	 */


	/**
	 * Méthode "platesFormes" qui retourne le HTML des plateformes d'un jeu.
	 * @param  array  $platesformes   - Les plates-formes à afficher
	 * @return string - Le HTML d'une série de balises cite
	 */


	/**
	 * Méthode "articleJeu" qui retourne le HTML de l'article de la page jeu.php
	 * Note : Cette méthode utilise les méthodes "image" et "caracteristiques"
	 * @param  string $idJeu - Le id du jeu à afficher
	 * @param  array  $jeu   - Les informations d'un jeu (voir le format dans donnees.inc.php)
	 * @return string - Le HTML d'une balise article
	 */


	/**
	 * Méthode "articleGenre" qui retourne le HTML de l'article de la page genre.php
	 * Note : Cette méthode utilise la méthode "listeJeux"
	 * @param  string $nomGenre  - Le nom du genre à afficher
	 * @param  array  $jeuxGenre - Les jeux appartenant à ce genre
	 * @return string - Le HTML d'une balise article
	 */


	/**
	 * Méthode "articleIndex" qui retourne le HTML de l'article de la page index.php
	 * Note : Cette méthode utilise la méthode "listeGenres"
	 * @param  array  $jeux - La liste des genres et leur jeux
	 * @return string - Le HTML d'une balise article
	 */

}

/*LIGNE DE TEST*/
//echo Ludologie::formaterDate(time());
