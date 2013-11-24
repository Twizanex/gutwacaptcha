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
	
	'gutwacaptcha:colour' => 'Background color of the register from',
        'gutwacaptcha:emailsiteowner' => 'Email me spammers address',
        'gutwacaptcha:myemailaddress' => 'Email address to send spammers addresses to',
        'gutwacaptcha:spammercaught' => 'Spammer caught',
        'gutwacaptcha:spammerdetails' => 'The email address of the spammer is %s',

	// the language selection part 
	'gutwacaptcha:admin:settings:min_completeness' => 'Minimum language completeness (e.g. 1)',
	'gutwacaptcha:admin:settings:show_in_header' => 'Show language selector in Captcha section?',
	'gutwacaptcha:admin:settings:autodetect' => 'Enable autodetect of captcha language (for non-logged in users)',
	'gutwacaptcha:admin:settings:show_images' => 'Show images of language/country (if available)',

);

add_translation("fr",$french);
