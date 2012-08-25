<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-08-25 00:04+0000
// PO revision date:  2012-08-20 11:35+0000
$lang = array(
	'actions' => array(
		'add_to_category' => 'Aquesta acció afegeix la informació reportada a categories addicionals. Si seleccioneu Categoria 1 i la informació reportada ja està vinculada a Categoria 2, la informació reportada tindrà Categoria 1 i Categoria 2 alhora.',
		'approve' => 'Aprova un informe o no. Si s\'aprova, es mostrarà públicament.',
		'assign_badge' => 'Podeu assignar un medalla a l`usuari que llença l`alerta. Seleccioneu aquí la medalla que voleu concedir.',
		'between_times' => 'Aquest és el rang d`hores i/o minuts entre dos horaris en format de 24 hores. Si indiqueu un valor inferior al segon camp de temps, s`intercanviarà amb el primer. Aquests horaris han d`estar dins el mateix dia. Aquest temps també es compara amb l`horari configurat en el site (en la configuració del site i NO necessàriament en la zona horària amb que l`usuari ha interactuat en l`instal.lació). Deixeu aquest camp de 00:00 a 00:00 per ignorar aquest rang.',
		'category' => 'Si només voleu activar alertes quan s`utilitza una certa categoria, ho podeu fer aquí. Això permetrà activar una alerta si només s`utilitza una de les categories. Per exemple, si seleccioneu aquí Categoria 1 i Categoria 2, i una informació reportada està presentada utilitzant Categoria 2 i Categoria 3, passarà el test.',
		'days_of_the_week' => 'Si aquestes accions pasen en determinat dia de la setmana. Recordeu que el dia és determinat per la configuració de la zona horària de l`instal.lació. Premeu shift -majúscules- or control per seleccionar múltiples dies.',
		'email_body' => 'Cos del missatge que s`enviarà.',
		'email_subject' => 'Subjecte del missatge que s`enviarà.',
		'keywords' => 'Podeu deixar aquest camp en blanc si no voleu cercar per paraules clau. Si afegiu més d`una paraula, necessitareu separar-les amb una coma (,). Per exemple, si voleu activar una alerta quan algú mencioni "amor" o "pau" al seu missatge, haureu d`afegir "amor,pau" a la caixa de les paraules clau.',
		'location' => 'També podeu seleccionar qualsevol lloc o una ubicació específica. Si seleccioneu una ubicació concreta, s`us demanarà que dibuixeu un rectangle al voltant de l`àrea on s`examina l`acció. Per exemple, si voleu activar aquesta alerta quan algú presenti una informació reportada de l`Empordà, haureu de seleccionar "ubicació concreta" i després dibuixar un rectangle al voltant de l`Empordà. Podeu fer aquests rectangles tant petites o grans com vulgueu. També podeu dibuixar múltiples rectangles.',
		'on_specific_count' => 'Aquest classificador activarà l`alerta de l`enèssim comptador tant per la base col.lectiva d`usuaris com per cada usuari individual. Deixeu-ho en blanc per ignorar-ho.',
		'report_title' => 'Aquest és el títol predeterminat per afegir a l\'informe.',
		'response' => 'Si es passen tots els classificadors anteriors, l`alarma iniciarà una resposta. Aquesta pot abastar des de aprovar una informació reportada, a enviar un missatge a un usuari. Seleccioneu la resposta aquí per a activar opcions addicionals per a les respostes concretes.',
		'send_to' => 'Si seleccioneu "Alerta d`Usuari", s`enviarà el correu a l`usuari que ha realitzat l`acció. Si seleccioneu el radio button proper a la caixa d`entrada de dades, podreu entrar una adreça de correu personalitzada. Això és útil si creeu alertes per notificar a la gent quan s`estan veient informacions reportades en certes parts del mapa, registres a qualsevol altra activitat.',
		'specific_days' => 'Aquí podeu seleccionar múltiples dies. Les dates estan determinades per la zona horària de l`instal.lació.No seleccioneu cap data si voleu aplicar les dates per defecte.',
		'trigger' => 'L`alarma és el component central de les Accions d`Alarmes. Aquí és on determinareu si voleu que passi alguna cosa quan algú reporti, registri, etc. Al seleccionar-ne una, podreu filtrar les respostes a aquestes accions.',
		'user' => 'L`usuari pot ser qualsevol o un d`específic. Si només voleu permetre que determinats usuaris activin alarmes, haureu de seleccionar-los aquí. D`altra forma, haureu de deixar-ho amb l`indicació "qualsevol", doncs la majoria de les alarmes estan habilitades perquè tots els usuaris interactuin amb el sistema.',
		'verify' => 'Marca una informació reportada com a verificada o no.',
	) ,
	'change_picture' => 'Les pàgines de perfil d`aquest site fan servir Gravatar. Clicant sobre la vostra imatge, anireu al site de Gravatar on podreu canviar la vostra imatge de perfil.',
	'default_value' => 'Separeu cada valor amb una coma p.ex. valor1, valor2',
	'radio_choices' => 'Separeu cada valor amb una coma, per exemple, valor1, valor2. En cas que desitgeu establir un valor per defecte, poseu fi a la seva llista d\'opcions amb :: per exemple, si vol fer valor3 el valor per defecte, serà valor1, valor2, valor3 :: valor3',
	'dropdown_choices' => 'Separeu cada opció amb una coma p.ex. Opció 1, Opció 2, etc',
	'private_to' => 'Comenceu a teclejar la llista de membres',
	'private_subject' => 'Títol del missatge privat',
	'private_message' => 'Missatge privat',
	'profile_color' => 'Podeu seleccionar un color que es mostrarà a sota de la vostra imatge de perfil al vostre perfil públic. Aquest serà el color també del punt que mostrarà sobre el mapa els vostres registres.',
	'profile_email' => 'La vostra adreça de correu electrònic',
	'profile_name' => 'Aquesta és una de les formes amb les que esteu identificats al site. Recordeu que es públic!',
	'profile_new_password' => 'Si ho marqueu, aquest serà el vostre nou password. Deixeu-ho en blanc si voleu mantenir el password actual',
	'profile_new_users_password' => 'Aquest camp és obligatori quan es crea un nou usuari, ja que serà el nou password de l`usuari. Heu d`indicar al nou usuari que haurà de canviar el seu password després d`accedir per primer cop.',
	'profile_notify' => 'Seleccionant SI podreu rebre alertes per correu electrònic quan es publiquin noves informacions reportades o es facin comentaris al site',
	'profile_password' => 'Obliguem a entrar el password per a prevenir canvis no autoritzats al vostre compte.',
	'profile_public' => 'Si marqueu aquesta opció, el vostre perfil pot ser vist per qualsevol a Internet. Aquesta es també la forma més senzilla per mostrar informacions que heu reportat, els vostres registres, medalles, etc., tot en una sola pàgina.',
	'profile_public_url' => 'Aquesta és l`adreça on es pot trobar el vostre perfil públic.',
	'profile_username' => 'El vostre nom d`usuari no es pot canviar',
	'settings_access_level' => 'Els "Nivells d`Accés" es fan servir per a restringir l`accés a camps de dades específics. Els nivells d`accés més alts poden accedir als camps dels nivells inferiors. El Superadmin té el nivell d`accés més alt - 100. Les dades públiques es mostren al nivell més baix - 0.',
	'settings_alert_email' => 'Aquesta es l`adreça de correu electrònic que es farà servir per enviar alertes per correu electrònic.',
	'settings_allow_alerts' => 'Permet els usuaris subscriure`s a les alertes a través de la web.',
	'settings_allow_clustering' => 'Aquesta opció permet agrupacions de informacions reportades similars en un únic punt del mapa',
	'settings_allow_comments' => 'Permet als usuaris comentar sobre informacions reportades al site principal.',
	'settings_allow_feed' => 'Aquesta opció permet mostrar feeds de notícies RSS al site principal.',
	'settings_allow_reports' => 'Permet als usuaris reportar informació a través d`un formulari web.',
	'settings_api_default_record_limit' => 'Nombre predeterminat de registres retornats en cada crida a l`API',
	'settings_api_max_record_limit' => 'Nombre màxim de registres retornats en cada crida a l`API',
	'settings_api_max_requests_per_ip' => 'Nombre màxim de crides a l`API per adreça IP',
	'settings_banner' => 'El banner del site apareixerà a dalt del front-end del site, si el tema que utilitzeu ho suporta. La mida recomanda del banner dependrà del tema emprat. Tingueu en compte que això reemplaçarà el títol del site i la línia present a dalt de la pàgina.',
	'settings_blocks_per_row' => 'Nombre de blocs de columnes que es mostraran en cada filera',
	'settings_cache_pages' => 'Habilita o deshabilita el paginat de catxé. això accelera la càrrega de la pàgina, reduint els temps de resposta. Recomanem fer servir aquesta catxé en sites amb alt trànsit. **Recordeu que les informacions reportades es carregaran en el front-end en base al temps que es fixa més avall (temps de vida de la catxé).',
	'settings_cache_pages_lifetime' => 'Fixa el temps de vida de la catxé.',
	'settings_checkins' => 'Aquesta opció habilita registres a la vostra instal.lació. Aquest és un tipus d`informació reportada simplificada que no està moderada abans d`anar a la homepage i requereix que el vostre site estigui configurat d`una determinada manera. Quan habiliteu aquesta característica, assegureu-vos que la zona horària està fixada a UTC i que el vostre tema suporta registres. Quan ho habiliteu, registreu només temes que siguin habilitables a través de la pàgina de configuració per addons i temes.',
	'settings_configure_map' => 'Fixa el mapa per cobrir una ubicació concreta ',
	'settings_default_category_colors' => 'Fixa un codi de color per totes les categories del site',
	'settings_default_category_icons' => 'Establiu una icona per a totes les categories del lloc.',
	'settings_default_location' => 'País on es site està funcionant',
	'settings_display_contact' => 'Posa la llegüeta de Contacte On o Off al site principal.',
	'settings_display_howtohelp' => 'Posa la llegüeta de Com Ajudar On o Off al site principal.',
	'settings_display_items_per_page' => 'Nombre d`informació reportada que es mostra per pàgina al site principal.',
	'settings_display_items_per_page_admin' => 'Nombre d`informació reportada que es mostra per pàgina al back-end d`administració.',
	'settings_flsms_download' => 'Concentrador pels missatges entrants',
	'settings_flsms_synchronize' => 'Sincronitza els missatges del concentrador amb la plataforma Ushahidi',
	'settings_flsms_text_1' => 'Números de telèfon per on es reben els missatges de text',
	'settings_google_analytics' => 'Seguiment dels visitants del site. Obteniu estadístiques detallades dels visitants',
	'settings_locale' => 'Fixa l`idioma que s`utilitza en aquest site.',
	'settings_manually_approve_users' => 'Si poseu aquesta opció a SI, haureu d`autoritzar cada usuari que crei un compte en aquest site, assignant-li rols (p.ex. Membre, Admin, Superadmin).',
	'settings_map_provider' => 'Aquesta opció defineix el mapa que utilitzarà el site',
	'settings_map_timeline' => 'Això mostra la línia de temps sobre la base de la data i l\'hora en les que es van presentar els informes',
	'settings_private_deployment' => 'Fixant aquest valor a Veritable o Si convertirà la vostra instal.lació en privada i així només els usuaris dels comptes que especifiqueu podran accedir a aquest desenvolupament.',
	'settings_require_email_confirmation' => 'Si està fixat a Si, als usuaris se`ls enviarà un enllaç de confirmació per correu electrònic abans de permetres entrar. Si abiliteu aquesta opció després d`acceptar usuaris, se`ls demanarà que confirmin el seu compte abans de permetre`ls continuar utilitzant-lo.',
	'settings_server_host' => 'Aquest és el host on resideixen els correus electrònics',
	'settings_server_password' => 'Aquest és el password de l`adreça de correu electrònic que rep els informes reportats',
	'settings_server_port' => 'Port obligatori per acceptar connexions entrants des de l`adreça de correu electrònic',
	'settings_server_ssl_support' => 'Obligatori per permetre una connexió segura',
	'settings_server_type' => 'Obligatori per recuperar correus electrònics del servidor host',
	'settings_server_username' => 'Aquest és el nom de l`adreça de correu electrònic que rep els informes reportats',
	'settings_share_site_stats' => 'Les estadístiques de visites son enmagatzemades en un servidor control.lat per l`Ushahidi. Habilitant aquesta opció, podreu veure les estadístiques directament al panell d`administració. Deshabilitant-la, deixareu de veure les estadístiques de tràfic.',
	'settings_site_copyright_statement' => 'Doneu a tercers drets de republicació de text, imatges, video i/o disseny que vosaltres o els vostres usuaris han creat? Aneu a https://creativecommons.org/choose/ si esteu interessats en detallar el que altres poden fer amb el vostre treball. I recordeu ser concrets sobre quines elements del vostre site esteu licenciant!',
	'settings_site_email' => 'Adreça de correu electrònic que rebrà els correus electrònics amb els informes reportats i els formularis de contacte.',
	'settings_site_message' => 'Aquest és el text que apareixerà sobre el mapa de la homepage. És molt útil per a donar als visitants del site informació important. Per eliminar la caixa de text, simplement esborreu aquest text.',
	'settings_site_name' => 'Aquest és el nom del site que apareixerà a la part superior del site principal.',
	'settings_site_submit_report_message' => 'Aquest és el missatge que es mostrarà en la pàgina d`enviament d`informes reportats. Això és bó per renúncies o més instruccions pels visitants que estan informant.',
	'settings_site_tagline' => 'Expliqueu, en poques paraules, que es tracta en aquest site.',
	'settings_site_timezone' => 'Aquesta es la zona horària sobre la que operarà aquest site. Això té un impacte en qualsevol acció que es duu a terme i que utilitzi hora i data, i també en l`hora per defecte de l`enviament d`informes al front i al back-end del site.',
	'settings_twitter_configuration' => 'Configura el hashtag de twitter que es farà servir als tweets',
);
