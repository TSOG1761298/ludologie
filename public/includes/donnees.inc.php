<?php
/* Ce fichier est complet. Vous ne devez pas le modifier, mais vous devez l'inclure dans vos pages. */

/*
$donnees est un array associatif qui contient chaque genre de jeu ("Action-aventure", "Action-RPG", "Simulation", etc.). La clé est le nom du genre.
Chaque genre est constituée d'un autre array associatif qui contient chaque jeu ("The Legend of Zelda: Twilight Princess", etc.) associé à ce genre. La clé est le nom du jeu normalisé.
Chaque jeu est lui-même un array associatif contenant les éléments (clés) suivants :
	titre : Le titre du jeu,
	intro : Un paragraphe d'introduction du jeu,
	description : La description du jeu (HTML),
	legende : La légende à mettre sous l'image,
	caracteristiques : Un array associatif contenant les données 'editeur', 'developpeur', 'sortie', 'genre', 'mode_jeu' et 'plates_formes'
*/
$donnees = array(
    'Action-aventure'=>array(
        'the_legend_of_zelda_twilight_princess'=>array(
            'titre'=>'The Legend of Zelda: Twilight Princess',
            'intro'=>'The Legend of Zelda: Twilight Princess (litt. «&nbspLa légende de Zelda : La princesse du crépuscule&nbsp») est un jeu vidéo d\'action-aventure développé par Nintendo EAD et édité par Nintendo sorti initialement sur GameCube et sur Wii. Il s’agit du treizième opus de la série <cite>The Legend of Zelda</cite>.',
            'description'=>'<p>Link est au début un jeune fermier de Toal qui vit avec ses quatre amis et sa meilleure amie: Iria. Malheureusement, elle se fait capturer, ainsi que les autres par des monstres montés sur des sangliers.</p><p>À la recherche de ses amis, Link aperçoit un mur noir inquiétant et se fait emporter au Royaume du Crépuscule. Un agent du crépuscule essaie de l\'éliminer, mais la Triforce du courage l\'en empêche et transforme notre héros en loup. Plus tard, au château d\'Hyrule, là où il s\'est fait emprisonner, Link rencontre Midona, qui le libère, puis la princesse Zelda qui lui apprend que ce monde est en fait leur monde conquis par Xanto, le roi des Ombres.</p><p>Pour libérer sa région du règne du Crépuscule, il doit retrouver des perles de lumière, dispersées dans tout le territoire. Il en fera de même avec toutes les régions d\'Hyrule. Après avoir accompli cette tache, l\'Esprit gardien de la lumière de ladite région lui redonnera sa forme humaine.</p>',
            'legende'=>'The Legend of Zelda: Twilight Princess',
            'caracteristiques'=>array(
                'editeur'=>'Nintendo',
                'developpeur'=>'Nintendo EAD',
                'sortie'=>1165856400,
                'genre'=>'Action-aventure',
                'mode_jeu'=>'Un joueur',
                'plates_formes'=>array('Wii', 'GameCube', 'Wii U'),
            ),
        ),
        'grand_theft_auto_v'=>array(
            'titre'=>'Grand Theft Auto V',
            'intro'=>'Au cœur de Los Santos, une métropole très largement inspirée de Los Angeles, en déclin et rongée par la crise, que peuplent gourous, starlettes et gloires du passé, trois criminels différents s\'allient pour se sortir d\'affaires : Franklin, un membre de gang de rue aux dents longues, Michael, un ancien braqueur dont la retraite est moins tranquille que prévu, et Trevor, un ancien pilote de chasse drogué et psychopathe. À court d\'options, le trio n\'a d\'autre choix que de se lancer dans une série de braquages, aussi audacieux que dangereux, pour réussir.',
            'description'=>'<p>Grand Theft Auto V (plus communément abrégé GTA V) est un jeu vidéo d\'action-aventure, développé par Rockstar North et édité par Rockstar Games. Il s\'agit du premier titre majeur de la série des jeux vidéo Grand Theft Auto depuis la commercialisation de Grand Theft Auto IV en 2008, et d\'une suite de l\'univers fictif intronisé dans ce jeu.</p><p>Quinzième jeu de la série en comptant les contenus additionnels et les épisodes portables, GTA V est le cinquième volet officiel de la saga ainsi que le second opus de la franchise à cheval sur deux générations de consoles (GTA 2 est sorti sur des consoles de cinquième et sixième génération).</p><p>Cet épisode se déroule dans la ville fictive de Los Santos et ses alentours, dans l’État fictif de San Andreas, inspirée de la véritable ville de Los Angeles et de la Californie du Sud. Une précédente version de la ville de Los Santos était déjà présente parmi l’une des trois villes figurant dans Grand Theft Auto: San Andreas (2004) et dans le jeu original de Grand Theft Auto (1997). Selon Rockstar Games, Grand Theft Auto V est le plus grand des mondes ouverts qu\'ils aient créé à ce jour. Le jeu se concentre principalement sur «la poursuite du dollar tout-puissant».</p>',
            'legende'=>'Grand Theft Auto V',
            'caracteristiques'=>array(
                'editeur'=>'Rockstar Games',
                'developpeur'=>'Rockstar North',
                'sortie'=>1379419320,
                'genre'=>'Action-aventure',
                'mode_jeu'=>'Solo, multijoueur',
                'plates_formes'=>array('Windows', 'PlayStation 3', 'Xbox 360', 'PlayStation 4', 'Xbox One', ),
            ),
        ),
	),
    'Action-RPG'=>array(
        'the_elder_scrolls_v_skyrim'=>array(
            'titre'=>'The Elder Scrolls V: Skyrim',
            'intro'=>'The Elder Scrolls V: Skyrim (souvent abrégé en Skyrim) est un jeu vidéo de rôle et d\'action, développé par Bethesda Game Studios et édité par Bethesda Softworks, sorti le 11 novembre 2011 sur PlayStation 3, Xbox 360 et Microsoft Windows. C\'est le cinquième opus de la série de jeux The Elder Scrolls, après Arena, Daggerfall, Morrowind et Oblivion.',
            'description'=>'<p>Les événements de Skyrim se déroulent en l\'an 201 de la Quatrième Ère (4E 201), soit 200 ans après ceux d\'Oblivion, dans un contexte de guerre civile : après l\'assassinat du haut-roi de Bordeciel par le chef rebelle Ulfric Sombrage, des conflits éclatent entre les nordiques indépendantistes et ceux qui soutiennent encore l\'empire, lui-même sur le déclin et sous la domination d\'une faction elfique, les Thalmors.</p><p>C\'est également le moment que choisit le seigneur dragon Alduin pour réapparaître et menacer les habitants de Bordeciel. Le joueur, qui incarne un prisonnier anonyme comme dans les précédents volets de la série, découvrira au cours du jeu qu\'il est le seul en mesure de s\'opposer à Alduin et aux dragons : il est le Dovahkiin, «l\'Enfant de dragon».</p>',
            'legende'=>'The Elder Scrolls V: Skyrim',
            'caracteristiques'=>array(
                'editeur'=>'Bethesda Softworks',
                'developpeur'=>'Bethesda Game Studios',
                'sortie'=>1321009200,
                'genre'=>'Action-RPG',
                'mode_jeu'=>'Un joueur',
                'plates_formes'=>array('Windows','PlayStation 3','PlayStation 4','Xbox 360','Xbox One','Nintendo Switch'),
            ),
        ),
        'fallout_1'=>array(
            'titre'=>'Fallout',
            'intro'=>'Fallout est un jeu vidéo de rôle produit par Tim Cain publié en 1997, développé et édité par Interplay Entertainment. Le jeu évolue dans un univers post-apocalyptique faisant suite à une civilisation uchronique empreinte de science-fiction des années 1950. En anglais fallout signifie « retombée » : il s\'agit d\'une référence aux retombées radioactives qui suivent l\'utilisation d\'armes atomiques.',
            'description'=>'<p>La civilisation est tombée en ruines à la suite d\'une guerre nucléaire. Pour se protéger des explosions atomiques, certaines personnes ont trouvé refuge dans des abris anti-atomiques souterrains (vault en anglais) qui ont été construits.</p><p>Le joueur est un habitant d\'un de ces abris souterrains, l\'Abri 13, qui est sélectionné pour être le premier à affronter le monde extérieur. Le 5 décembre 2161, la puce servant à filtrer l\'eau contaminée (water chip) vient de tomber en panne : sa mission sera donc d\'aller affronter le monde extérieur pour trouver une puce de rechange avant que les réserves d\'eau de l\'abri ne s\'épuisent. La seule information de départ est l\'existence d\'un autre abri construit à l\'Est qui, peut-être, aurait cette puce.</p>',
            'legende'=>'Le logo de <cite>Fallout</cite>',
            'caracteristiques'=>array(
                'editeur'=>'Interplay',
                'developpeur'=>'Black Isle Studios',
                'sortie'=>875613600,
                'genre'=>'Action-RPG',
                'mode_jeu'=>'Un joueur',
                'plates_formes'=>array('DOS', 'Windows', 'Mac OS'),
            ),
        ),
	),
    'Simulation'=>array(
        'stardew_valley'=>array(
            'titre'=>'Stardew Valley',
            'intro'=>'Stardew Valley est un jeu vidéo de simulation dans lequel le joueur doit gérer sa ferme.',
            'description'=>'<p>Il a été développé par Eric Barone et édité par Chucklefish Games, sorti en février 2016 sur Windows. Un portage est prévu sur PlayStation 4 et Xbox One en décembre 2016 et en 2017 sur Nintendo Switch.</p>',
            'legende'=>'Le logo de <cite>Stardew Valley</cite>',
            'caracteristiques'=>array(
                'editeur'=>'Chucklefish Games',
                'developpeur'=>'ConcernedApe',
                'sortie'=>1456484400 ,
                'genre'=>'Simulation',
                'mode_jeu'=>'Un joueur',
                'plates_formes'=>array('Windows', 'PlayStation 4', 'Xbox One', 'Nintendo Switch',),
            ),
        ),
        'les_sims_4'=>array(
            'titre'=>'Les Sims 4',
            'intro'=>'Les Sims 4 est un jeu vidéo de simulation de vie de la série Les Sims, développé par Maxis au Studio Les Sims et édité par Electronic Arts.',
            'description'=>'<p>Annoncé le 6 mai 2013, les rumeurs le disaient prévu pour début 2014. Le jeu est finalement sorti le 4 septembre 2014 en Europe.</p><p>À sa sortie, le jeu se classa en tête des ventes PC mais fut en revanche moyennement bien accueilli par la critique et très mal reçu par les joueurs. En cause, la disparition du monde ouvert et le manque de contenu ajouté par des DLC payants. Et bien que certains ajouts soient arrivés par le biais de mises à jour gratuites, 3 packs d\'extension, 3 packs de jeu et 9 kits d\'objets sont déjà sortis et sont payants à l\'acquisition.Récemment, le pack Vampire est sortie sur PC et MAC.</p><p>La bande-son du jeu a été composée par Ilan Eshkeri.</p>',
            'legende'=>'Le logo de <cite>Le Sims 4</cite>',
            'caracteristiques'=>array(
                'editeur'=>'Electronic Arts',
                'developpeur'=>'Maxis',
                'sortie'=>1409652000,
                'genre'=>'Simulation',
                'mode_jeu'=>'En ligne/hors ligne',
                'plates_formes'=>array('Mac', 'Windows',),
            ),
        ),
	),
    'Sport'=>array(
        'nhl_09'=>array(
            'titre'=>'NHL 09',
            'intro'=>'NHL 09 est un jeu vidéo de hockey sur glace tiré de la ligue nord-américaine.',
            'description'=>'<p>Ce jeu a un nouveau mode: "Deviens Pro" où le joueur pourra créer son propre personnage qui débutera dans la LAH et évolura jusqu\'à la LNH et sera accompagné au long de sa carrière. Les entraîneurs pourront vous évaluer sur 50 catégories différentes. Cette édition 2009 ajoute aussi les championnats européens et russes. Il est disponible sur PlayStation 3, sur Xbox 360 et sur PC. Il est la création du studio de Vancouver d\'Electronic Arts. Ce jeu a notamment gagné douze <cite>Sports Game of the Year Awards</cite> (prix du jeu de sport de l\'année).</p>',
            'legende'=>'NHL 09',
            'caracteristiques'=>array(
                'editeur'=>'EA Sports',
                'developpeur'=>'EA Canada',
                'sortie'=>1220954400,
                'genre'=>'Sport',
                'mode_jeu'=>'1 à 12 joueurs',
                'plates_formes'=>array('PlayStation 2', 'PlayStation 3', 'Xbox 360', 'PC',),
            ),
        ),
	),
);
