<?php
$french = array(
             
       'image:agree' => "Etes-vous un humain? Quel est le code dans l'image sur la gauche? *: (si vous le trouvez difficile à lire, cliquez sur le bouton Son ou sur Rafraîchir pour obtenir un nouveau code)",
	'sirikinasa:isblank' => "Entrez les caractères ou le texte affiché dans l'image.",

	'gutwacaptcha:required' => "Désolé, le code de sécurité entré ne correspond pas au texte dans l'image.",
	
	/**
	* Account 
	*/
	
	'registerok' => "Vous vous êtes enregistré avec succès pour %s.",
	'uservalidationbyemail:registerok' => "Pour activer votre compte, confirmez svp votre adresse email en cliquant sur le lien que nous venons de vous envoyer.",
	
	
	// catch the automated machines
	
	'gutwacaptcha:colour' => 'Couleur de fond du formulaire d\'enregistrement',
        'gutwacaptcha:emailsiteowner' => 'Envoyez-moi les adresses des spammeurs',
        'gutwacaptcha:myemailaddress' => 'Adresse e-mail à laquelle envoyer les adresses des spammeurs',
        'gutwacaptcha:spammercaught' => 'Spammer attrapé',
        'gutwacaptcha:spammerdetails' => 'L\'adresse email du spammeur est %s',

	// the language selection part 
	'gutwacaptcha:admin:settings:min_completeness' => 'Exhaustivité minimum de la langue (p.ex. 1)',
	'gutwacaptcha:admin:settings:show_in_header' => 'Afficher un sélecteur de langue dans la section Captcha?',
	'gutwacaptcha:admin:settings:autodetect' => 'Activer la détection automatique de la langue du Captcha (pour les utilisateurs non-connectés)',
	'gutwacaptcha:admin:settings:show_images' => 'Afficher les images de la langue / du pays (si disponible)',

);

add_translation("fr",$french);
