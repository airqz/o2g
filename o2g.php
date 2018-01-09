<!DOCTYPE html>
<html>

<!-- ************************************************************************************************** -->
<!-- ************************************************************************************************** -->
<!-- ********************************************* ENTÊTE *********************************************** -->
<!-- ************************************************************************************************** -->
<!-- ************************************************************************************************** -->

<head>

<!-- +++++++++++++++++++++++++++++++++++++++ -->
<!-- + PHP +++++++++++++++++++++++++++++++++ -->
<!-- +++++++++++++++++++++++++++++++++++++++ -->
<?php
/*
1°) éditer les variables globales
*/
	// ------------------------------------------------------------------------------
	// ------------------------------------------------------------------------------
	// PHP : Variable globales
	// ------------------------------------------------------------------------------
	// ------------------------------------------------------------------------------
	
		// **********************
		// PHP : Variables Serveur SQL
		// **********************
		$mesGBL["home"] =	"http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
		$mesGBL["auto-reset"] =	TRUE; // [ MODE TEST ]Quand TRUE, lance les requetes de recréation de la table à chaque chargement de la page
		// **********************
		// PHP : Variables Serveur SQL
		// **********************
		$mesGBL["hote_serv"] =	"localhost";
		$mesGBL["user_serv"] =	"root";
		$mesGBL["mdp_serv"] =	"root";
		
		// **********************
		// PHP : Variables Database/Table
		// **********************
		$mesGBL["table_info"] =	array(
				"db_name" => 	"guest", 			// nom de la table
				"nom" => 	"namedb", 			// nom de la table
				"suffixe" => 		"mot", 	// suffixe des champs
				"label-table" => 	"mot-clefs", 	// Affichage en interface du nom de la table
				"label-content" => 	"mot", 	// Affichage en interface du nom d'un enregistrement
				"filtre-by-text" => 	TRUE,	// Permet d'effectuer des recherche textuelles (s'adapte à la structure de table)
				"nb-faux-enr" => 	500, 	// Définit un nombre d'enregistrement générés aléatoirement (0:désactivé)
				"facteur-faux-enr" => 	50, 	// Pourcentage de chance qu'une donnée (un champs) ne soit pas écrite
				);
		$mesGBL["table_struct"] =	array(
				"id" =>		array(
				// Modèle pour la clef primaire (OBLIGATOIRE)
					"type" => "primary",
					"voir" => TRUE, 
					"filtrage" => FALSE, 
					"sql" => " int(11) NOT NULL AUTO_INCREMENT"),
				// Modèle pour un titre / label
				"mot-clef" =>	array(
					"type" => "label",
					"voir" => TRUE, 
					"filtrage" => "texte", // Accepte : FALSE, texte
					"sql" => " varchar(150) DEFAULT NULL"),
				// Modèle pour un nombre (INT) de type standard
				"compteur" =>	array(
					"type" => "int",
					"voir" => TRUE, 
					"filtrage" => FALSE,  // Accepte : FALSE, select-list, radio-list
					"sql" => "  int(11) DEFAULT NULL"),
				// Modèle pour un booléen
				"is_verbe" =>	array(
					"type" => "bool",
					"voir" => TRUE, 
					"filtrage" => "select-list",  // Accepte : FALSE, select-list, radio-list
					"sql" => " tinyint(1) DEFAULT NULL"),
				// Modèle pour une categorie
				"categorie" =>	array(
					"type" => "cat",
					"voir" => TRUE, 
					"filtrage" => "select-list", // Accepte : FALSE, texte, select-list, radio-list
					"sql" => " varchar(150) DEFAULT NULL"),
				// Modèle pour un titre / label
				"etiquette" =>	array(
					"type" => "cat",
					"voir" => TRUE, 
					"filtrage" => "select-list", // Accepte : FALSE, texte
					"sql" => " varchar(150) DEFAULT NULL"),
				// Modèle pour un titre / label
				"tag" =>	array(
					"type" => "cat",
					"voir" => TRUE, 
					"filtrage" => "select-list", // Accepte : FALSE, texte
					"sql" => " varchar(150) DEFAULT NULL"),
				// Modèle pour une date memoire
				"date" => 	array(
					"type" => "date",
					"voir" => TRUE, 
					"filtrage" => "select-list",   // Accepte : FALSE, select-list
					"sql" => " date DEFAULT NULL "),
				);
		$mesGBL["display"] =	array(
				"zone_baniere" =>	TRUE,
				"zone_menu_haut" =>	TRUE,
				"zone_menu_gauche" =>	TRUE,
				// Partie supérieure
				"zone_contenus_accueil" =>	TRUE,
				"zone_contenus_ajouter" =>	FALSE,
				"zone_contenus_editer" =>	FALSE,
				"zone_contenus_rapport" =>	FALSE,
				// Partie inférieure
				"zone_contenus_lister" =>	TRUE,
				"zone_pied" => 	TRUE,
				"titre" =>	"O2G - Outil de gestion",
				"mois-fr" =>	array(
					1 => "Janvier",
					2 => "Février",
					3 => "Mars",
					4 => "Avril",
					5 => "Mai",
					6 => "Juin",
					7 => "Juillet",
					8 => "Août",
					9 => "Septembre",
					10 => "Octobre",
					11 => "Novembre",
					12 => "Décembre",
				),
				"img-all" => 	"https://cdn.shopify.com/s/files/1/0939/8326/t/8/assets/all-coffee.png",
				"img-null" => 	"https://cdn1.iconfinder.com/data/icons/pixel-perfect-at-16px-volume-1/16/5082-128.png",
				"img-notnull" => 	"https://www.jutexpo.co.uk/www//assets/imgs/icons/checkbox-256x256-green.png",
				"default-filtre-date" =>	array(
						"nb_annees" =>	2,
						"nb_mois" =>	6,
						"nb_jours" =>	40,
					),
				);
		$easy_width=1000;
		$easy_height=800;
		$mesGBL["css"] =	array(
				"width" =>				$easy_width, // Largeur totale
				"height" =>				$easy_height, // Hauteur totale
				"width-menu" =>			round(($easy_width*20)/100), // Largeur du menu de gauche en px
				"height-ban" =>			round(($easy_height*15)/100), // Hauteur de la bannière en px
				"height-menu" =>		round(($easy_height*7)/100), // Hauteur du menu en haut en px
				"height-top-contenu" =>	round(($easy_height*20)/100), // Hauteur de la zone des messages en haut en px
				"height-pied" =>		round(($easy_height*10)/100), // Hauteur du pied en px
				"margin" =>				3,// entre 1 et 30
				"border" =>				1,// Taille de la bordure
				"radius" =>				20,// Arrondi des angles
				"police-style" => 		"Arial", // Police
				"police-taille" => 		12, // Police
				// liste des couleurs sur : http://stylescss.free.fr/couleurs.php 
				// -------------- */
				// Thème Niveau de Gris clair [par défaut]
				// /*
				"color-fond" => 	"white", // Fond type page
				"color-fond2" => 	"white", // Fond type zones de contenus
				"color-fond3" => 	"white", // Fond type sous-zones de contenus
				"color-forme" => 	"Black", // Opposé à color1 car définit le texte
				// -------------- */
				// Thème Niveau de Gris clair [par défaut]
				/*
				"color-fond" => 	"#CCCCCC", // Fond type page
				"color-fond2" => 	"#AAAAAA", // Fond type zones de contenus
				"color-fond3" => 	"#999999", // Fond type sous-zones de contenus
				"color-forme" => 	"Black", // Opposé à color1 car définit le texte
				// -------------- */
				// Thème Niveau de Gris foncé
				/*
				"color-fond" => 	"#303030", // Fond type page
				"color-fond2" => 	"#606060	", // Fond type zones de contenus
				"color-fond3" => 	"#909090", // Fond type sous-zones de contenus
				"color-forme" => 	"White", // Opposé à color1 car définit le texte
				// -------------- */
				// Thème Orange 
				/*
				"color-fond" => 	"OrangeRed", // Fond type page
				"color-fond2" => 	"Orange	", // Fond type zones de contenus
				"color-fond3" => 	"GoldenRod", // Fond type sous-zones de contenus
				"color-forme" => 	"Maroon", // Opposé à color1 car définit le texte
				// -------------- */
				// Thème Dark 
				/*
				"color-fond" => 	"black", // Fond type page
				"color-fond2" => 	"black	", // Fond type zones de contenus
				"color-fond3" => 	"#111111", // Fond type sous-zones de contenus
				"color-forme" => 	"LawnGreen", // Opposé à color1 car définit le texte
				// -------------- */
				// Thème Marin 
				/*
				"color-fond" => 	"Navy", // Fond type page
				"color-fond2" => 	"DodgerBlue", // Fond type zones de contenus
				"color-fond3" => 	"DeepSkyBLue", // Fond type sous-zones de contenus
				"color-forme" => 	"#000040", // Opposé à color1 car définit le texte
				// -------------- */
				// Thème Rose
				/* 
				"color-fond" => 	"MediumOrchid", // Fond type page
				"color-fond2" => 	"LightPink", // Fond type zones de contenus
				"color-fond3" => 	"Salmon", // Fond type sous-zones de contenus
				"color-forme" => 	"Purple", // Opposé à color1 car définit le texte
				// */
				"color-alertok" => 	"#90EE90", // couleur de thème 1 doit être un peu pétant (fond des messages d'alerte type "j'ai fait le taf")
				"color-alertko" => 	"#FF7F50", // couleur de thème 2 (fond des messages d'alerte type "tout va mal")
				);


	// ------------------------------------------------------------------------------
	// ------------------------------------------------------------------------------
	// PHP/SQL : Connexion à la base de donnée 
	// ------------------------------------------------------------------------------
	// ------------------------------------------------------------------------------
	try{
		// Connexion
		$ma_BDD = new PDO('mysql:host='.$mesGBL["hote_serv"].';dbname='.$mesGBL["table_info"]["db_name"].';charset=utf8', $mesGBL["user_serv"], $mesGBL["mdp_serv"]);
		}catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}
		// **********************
		// PHP : Création de la requête de suppression de table
		// **********************

		function generate_sql_req_droptable($mesGBL){
			$toreturn="DROP TABLE IF EXISTS `".$mesGBL["table_info"]["nom"]."`;
";
			return $toreturn;
		}
		
		// **********************
		// PHP : Création de la requête de création de table
		// **********************
		
		function generate_sql_req_createtable($mesGBL){
			$clef_primaire="";
			$liste_des_champs=array();
			foreach($mesGBL["table_struct"] as $prefixe => $infos_champs){
				if($infos_champs["type"]=="primary"){$clef_primaire=$prefixe."_".$mesGBL["table_info"]["suffixe"];}
				$liste_des_champs[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` ".$infos_champs["sql"];
			}
			$toreturn="CREATE TABLE IF NOT EXISTS `".$mesGBL["table_info"]["nom"]."` (".implode(",
			",$liste_des_champs).", PRIMARY KEY (`".$clef_primaire."`) ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
";
			return $toreturn;
		}
		
		// **********************
		// PHP : Création de la requête d'insertion dans la table
		// **********************
		
		function generate_sql_req_insert($mesGBL,$tableau_des_valeurs){
			$liste_des_champs=array();
			$liste_des_valeurs=array();
			foreach($mesGBL["table_struct"] as $prefixe => $infos_champs){
				$liste_des_champs[]=$prefixe."_".$mesGBL["table_info"]["suffixe"];
				$match_in_tableau_des_valeurs=FALSE;
				$valeur_a_incorporer="";
				foreach($tableau_des_valeurs as $to_insert_name => $to_insert_value){
					// Si l'une des valeur de $tableau_des_valeurs est à insérer
					if($to_insert_name==$prefixe or $to_insert_name==$prefixe."_".$mesGBL["table_info"]["suffixe"]){
						$match_in_tableau_des_valeurs=TRUE;
						$valeur_a_incorporer=$to_insert_value;
					}
				}
				if($match_in_tableau_des_valeurs){
					$liste_des_valeurs[]="'".$valeur_a_incorporer."'";
				}else{
					if($infos_champs["type"]=="primary"){
						$liste_des_valeurs[]="NULL";
					}elseif($infos_champs["type"]=="update"){
						$liste_des_valeurs[]="'".date("Y")."-".date("m")."-".date("d")."'";
					}else{
						$liste_des_valeurs[]="NULL";
					}
				}
			}
			$toreturn="INSERT INTO `".$mesGBL["table_info"]["nom"]."` (`".implode("`, `",$liste_des_champs)."`) VALUES (".implode(", ",$liste_des_valeurs).")";
			return $toreturn;
		}
		
		// **********************
		// PHP : Création de la requête de mise à jour dans la table
		// **********************
		
		function generate_sql_req_update($mesGBL,$id,$tableau_des_valeurs){
			$liste_des_valeurs=array();
			foreach($mesGBL["table_struct"] as $prefixe => $infos_champs){
				// $liste_des_champs[]=;
				$match_in_tableau_des_valeurs=FALSE;
				$valeur_a_incorporer="";
				foreach($tableau_des_valeurs as $to_insert_name => $to_insert_value){
					// Si l'une des valeur de $tableau_des_valeurs est à insérer
					if($to_insert_name==$prefixe or $to_insert_name==$prefixe."_".$mesGBL["table_info"]["suffixe"]){
						$match_in_tableau_des_valeurs=TRUE;
						$valeur_a_incorporer=$to_insert_value;
					}
				}
				if($match_in_tableau_des_valeurs){
					$liste_des_valeurs[]=" `".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` = '".$valeur_a_incorporer."'";
				}elseif(!$match_in_tableau_des_valeurs and $infos_champs["type"]=="update"){
					$liste_des_valeurs[]=" `".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` = '".date("Y")."-".date("m")."-".date("d")."'";
				}
			}
			$toreturn="UPDATE `".$mesGBL["table_info"]["nom"]."` SET ".implode(", ",$liste_des_valeurs)." WHERE `".$mesGBL["table_info"]["nom"]."`.`id_".$mesGBL["table_info"]["suffixe"]."` = ".$id.";";
			return $toreturn;
		}

		// **********************
		// PHP : Création de la requête de suppression dans la table
		// **********************
		
		function generate_sql_req_delete($mesGBL,$id){
			$toreturn="DELETE FROM `".$mesGBL["table_info"]["nom"]."` WHERE `".$mesGBL["table_info"]["nom"]."`.`id_".$mesGBL["table_info"]["suffixe"]."` = ".$id.";";
			return $toreturn;
		}

		// **********************
		// PHP : Création de la requête de sélection dans la table
		// **********************
		
		function load_req_select($mesGBL,$ma_BDD,$requete_select,$verbose=FALSE){
			$reponse_requete = $ma_BDD->query($requete_select);
			$toreturn=array();
			if($verbose){echo "<b>REQUÊTE : </b>\"".$requete_select."\"<br/>";}
			while (@$resultats = $reponse_requete->fetch()){$toreturn[]=$resultats;}
			if($verbose){echo "<b>Résultats : </b>\"".count($toreturn)."\"<br/>";}
			return $toreturn;
		}

		// **********************
		// PHP : Création de la requête de listage des catégories
		// **********************
		
		function generate_cats_list($mesGBL,$ma_BDD,$force_type="cat"){
			$liste_des_categories=array();
			foreach($mesGBL["table_struct"] as $prefixe => $infos_champs){
				if($infos_champs["type"]==$force_type){
					$liste_des_categories[$prefixe]=load_req_select($mesGBL,$ma_BDD,"SELECT DISTINCT `".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` FROM ".$mesGBL["table_info"]["nom"]." ORDER BY `".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` ASC;",FALSE);
				}
			}
			if(count($liste_des_categories)>=1){
				return $liste_des_categories;
			}else{
				return FALSE;
			}
		}


		
		// /*
		
		// */
	// exemple : $bdd->exec($contenu_de_la_requete);
	// ------------------------------------------------------------------------------
	// ------------------------------------------------------------------------------
	// PHP : Fonctions
	// ------------------------------------------------------------------------------
	// ------------------------------------------------------------------------------
	
		// **********************
		// PHP : Fonction
		// appel des formulaires GET et POST
		// **********************
		function input_formulaires_get($verbose=FALSE){
			$toreturn=array();
			if(@$_GET){
				foreach($_GET as $indice_get => $valeur_get){
					if($verbose){echo "\$_GET['".$indice_get."']=".$valeur_get."<br/>\n";}
					$toreturn[$indice_get]=$valeur_get;
				}
			}
			return $toreturn;
			// exemple : $formulaires=input_formulaires_get(TRUE);
		}
		function input_formulaires_post($verbose=FALSE){
			$toreturn=array();
			if(@$_POST){
				foreach($_POST as $indice_post => $valeur_post){
					if($verbose){echo "\$_POST['".$indice_post."']=".$valeur_post."<br/>\n";}
					$toreturn[$indice_post]=$valeur_post;
				
				}
			}
			return $toreturn;
			// exemple : $formulaires=input_formulaires_post(TRUE);
		}

		// **********************
		// PHP : Fonctions de chaine
		// **********************
		function chaine_aleatoire($taille,$espaces=TRUE){
			$liste_des_caractères="abcdefghijklmopqrstuvxwyzABCDEFGHIJKLMOPQRSTUVXWYZ0123456789";
			if($espaces){$liste_des_caractères.=" ";}
			$taille_liste=strlen($liste_des_caractères);
			$toreturn="";
			for($indice=1;$indice<=$taille;$indice++){
				$position=rand(0,($taille_liste-1));
				$toreturn.=substr($liste_des_caractères,$position,1);
			}
			return $toreturn;
		}
		// **********************
		// PHP : Fonctions de dates
		// **********************

		function format_date($date_originale){
			list($date_aaaa,$date_mm,$date_jj)=explode("-",$date_originale);
			switch(date('D',mktime(0, 0, 0, $date_mm  , $date_jj, $date_aaaa))){
				case "Mon" :
					$toreturn="Lu. ".$date_jj." ";
					break;
				case "Tue" :
					$toreturn="Ma. ".$date_jj." ";
					break;
				case "Wed" :
					$toreturn="Me. ".$date_jj." ";
					break;
				case "Thu" :
					$toreturn="Je. ".$date_jj." ";
					break;
				case "Fri" :
					$toreturn="Ve. ".$date_jj." ";
					break;
				case "Sat" :
					$toreturn="Sa. ".$date_jj." ";
					break;
				case "Sun" :
					$toreturn="Di. ".$date_jj." ";
					break;
				default:
					$toreturn="[".date('D',mktime(0, 0, 0, $date_mm  , $date_jj, $date_aaaa))."]";
					break;
			}
			switch(date('F',mktime(0, 0, 0, $date_mm  , $date_jj, $date_aaaa))){
				case "January" :
					$toreturn.="Jan.";
					break;
				case "February" :
					$toreturn.="Fev.";
					break;
				case "March" :
					$toreturn.="Mars";
					break;
				case "April" :
					$toreturn.="Avril";
					break;
				case "May" :
					$toreturn.="mai";
					break;
				case "June" :
					$toreturn.="Juin.";
					break;
				case "July" :
					$toreturn.="Jui.";
					break;
				case "August" :
					$toreturn.="Août";
					break;
				case "September" :
					$toreturn.="Sept.";
					break;
				case "October" :
					$toreturn.="Oct.";
					break;
				case "November" :
					$toreturn.="Nov.";
					break;
				case "December" :
					$toreturn.="Déc.";
					break;
				default:
					$toreturn.="[".date('F',mktime(0, 0, 0, $date_mm  , $date_jj, $date_aaaa))."]";
					break;
			}
			return $toreturn;
		}

		function liste_de_dates($nb_jours,$ref_aaaa=0,$ref_mm=0,$ref_jj=0){
			if(!$ref_aaaa){$ref_aaaa=date("Y");}
			if(!$ref_mm){$ref_mm=date("m");}
			if(!$ref_jj){$ref_jj=date("d");}
			$toreturn=array();
			for($compteur=0;$compteur<$nb_jours;$compteur++){
				$toreturn[$compteur]=date('Y-m-d',mktime(0, 0, 0, $ref_mm, $ref_jj-$compteur, $ref_aaaa));
			}
			return $toreturn;
		}

		// **********************
		// PHP : Fonctions
		// formatage Monétaire
		// **********************

		function format_monetaire($montant,$devise=" €"){
			if($montant>=0){
				// Style si montant positif
				$toreturn="<span class=\"montant_positif\">&nbsp;".round($montant,2).$devise."</span>";
			}else{
				// Style si montant négatif
				$toreturn="<span class=\"montant_negatif\">".round($montant,2).$devise."</span>";
			}
			return $toreturn;
		}


	// ------------------------------------------------------------------------------
	// ------------------------------------------------------------------------------
	// PHP : Mise à jour des variable fournies dans $mesGBL
	// ------------------------------------------------------------------------------
	// ------------------------------------------------------------------------------
		if($mesGBL["auto-reset"]){
			
			$texte_requete=generate_sql_req_droptable($mesGBL);
			$ma_BDD->exec($texte_requete);
			
			$texte_requete=generate_sql_req_createtable($mesGBL);
			$ma_BDD->exec($texte_requete);
			/*
			$to_insert=array("compteur" => -15, "categorie" => "macat #11", "photo" => "exemple1.png");
			$texte_requete=generate_sql_req_insert($mesGBL,$to_insert);
			$ma_BDD->exec($texte_requete);
			
			$to_insert=array("compteur" => 30, "categorie" => "macat #12", "photo" => "exemple2.png");
			$texte_requete=generate_sql_req_insert($mesGBL,$to_insert);
			$ma_BDD->exec($texte_requete);
			*/
			// Générateur d'enregistrements fictifs
			
			for($i_enr=0;$i_enr<$mesGBL["table_info"]["nb-faux-enr"];$i_enr++){
				$to_insert=array();
				foreach($mesGBL["table_struct"] as $prefixe => $infos_champs){
					// ajoute un caractère aléatoire à l'ajout
					if(rand(1,100)>=$mesGBL["table_info"]["facteur-faux-enr"]){
						switch($infos_champs["type"]){
							case "monnaie" :
									$to_insert[$prefixe]=rand(-2000,2000)/100;
									break;
							case "int" :
									$to_insert[$prefixe]=rand(-20,20);
									break;
							case "bool" :
									$to_insert[$prefixe]=rand(0,1);
									break;
							case "label" :
							case "cat" :
									$to_insert[$prefixe]=chaine_aleatoire(rand(5,10),FALSE);
									break;
							case "image" :
									$to_insert[$prefixe]=chaine_aleatoire(rand(5,10),FALSE).".png";
									break;
							case "texte" :
									$to_insert[$prefixe]=chaine_aleatoire(rand(15,100),TRUE);
									break;
							case "date" :
									$to_insert[$prefixe]=date('Y-m-d',mktime(0, 0, 0, date("m")-rand(0,$mesGBL["display"]["default-filtre-date"]["nb_mois"]), date("d")-rand(0,$mesGBL["display"]["default-filtre-date"]["nb_jours"]), date("Y")-rand(0,$mesGBL["display"]["default-filtre-date"]["nb_annees"])));
									break;
						}
					}
				}
				$texte_requete=generate_sql_req_insert($mesGBL,$to_insert);
				$ma_BDD->exec($texte_requete);
			}
			
		}

		$mesGBL["form_get"]=input_formulaires_get();
		$mesGBL["form_post"]=input_formulaires_post();
		$mesGBL["table_info"]["cats"]=generate_cats_list($mesGBL,$ma_BDD);
		$mesGBL["table_info"]["images"]=generate_cats_list($mesGBL,$ma_BDD,"image");
	
	// ------------------------------------------------------------------------------
	// ------------------------------------------------------------------------------
	// PHP : Filtres & Paramètres
	// ------------------------------------------------------------------------------
	// ------------------------------------------------------------------------------
	$filtre_by_text_est_faisable=array();
	foreach($mesGBL["table_struct"] as $prefixe => $infos_champs){
		if($infos_champs["type"]=="cat" OR
			$infos_champs["type"]=="image" OR
			$infos_champs["type"]=="label" OR
			$infos_champs["type"]=="texte"){
				if($infos_champs["filtrage"]){$filtre_by_text_est_faisable[]=$prefixe."_".$mesGBL["table_info"]["suffixe"];}
				
		}
	}
	if($mesGBL["table_info"]["filtre-by-text"] AND count($filtre_by_text_est_faisable)){
		if(!isset($mesGBL["form_get"]["search"])){
			$mesGBL["form_get"]["search"]="";
		}
	}
	foreach($mesGBL["table_struct"] as $prefixe => $infos_champs){
		switch($infos_champs["filtrage"]){
			case "image-list" :
			case "radio-list" :
			case "select-list" :
					if(!isset($mesGBL["form_get"]["filtre_".$prefixe])){
							$mesGBL["form_get"]["filtre_".$prefixe]="*";
					}
					break;;
		}
	}
	// requete de filtrage
	$tab_filtres=array();
	// PHP/SQL : Transformation des filtres en requête
	foreach($mesGBL["table_struct"] as $prefixe => $infos_champs){
		// Pour chaque champs qui : reçoit une entrée, est filtrable et n'est pas de type "texte"
		if(isset($mesGBL["form_get"]["filtre_".$prefixe]) AND $infos_champs["filtrage"] AND $infos_champs["filtrage"]!="texte"){
			// echo $prefixe." : ".$mesGBL["form_get"]["filtre_".$prefixe]."<br/>\n";
			if(	$infos_champs["filtrage"]=="select-list" OR 
				$infos_champs["filtrage"]=="radio-list" OR 
				$infos_champs["filtrage"]=="image-list"){
					
					if($mesGBL["form_get"]["filtre_".$prefixe]=="NOTNULL"){
						$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` IS NOT NULL";
					}elseif($mesGBL["form_get"]["filtre_".$prefixe]=="NULL"){
						$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` IS NULL";
					}
			}
			
			if(	$infos_champs["filtrage"]=="select-list" OR 
				$infos_champs["filtrage"]=="radio-list"){
					
					if($infos_champs["type"]=="bool"){
						if($mesGBL["form_get"]["filtre_".$prefixe]=="plus"){
							$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` = 1";
						}elseif($mesGBL["form_get"]["filtre_".$prefixe]=="moins"){
							$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` = 0";
						}
					}elseif($infos_champs["type"]=="int"){
						if($mesGBL["form_get"]["filtre_".$prefixe]=="plus"){
							$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` > 0";
						}elseif($mesGBL["form_get"]["filtre_".$prefixe]=="moins"){
							$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` < 0";
						}
					}elseif($infos_champs["type"]=="monnaie"){
						if($mesGBL["form_get"]["filtre_".$prefixe]=="plus"){
							$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` > 0";
						}elseif($mesGBL["form_get"]["filtre_".$prefixe]=="moins"){
							$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` < 0";
						}
					}elseif($infos_champs["type"]=="cat" AND 
						$mesGBL["form_get"]["filtre_".$prefixe]!="*"  AND 
						$mesGBL["form_get"]["filtre_".$prefixe]!="NULL"  AND 
						$mesGBL["form_get"]["filtre_".$prefixe]!="NOTNULL"){
						$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` LIKE '%".$mesGBL["form_get"]["filtre_".$prefixe]."%'";
					}elseif($infos_champs["type"]=="date" AND 
						$mesGBL["form_get"]["filtre_".$prefixe]!="*"  AND 
						$mesGBL["form_get"]["filtre_".$prefixe]!="NULL"  AND 
						$mesGBL["form_get"]["filtre_".$prefixe]!="NOTNULL"){
						$infos_filtre_date=array();
						$infos_filtre_date=explode("-",$mesGBL["form_get"]["filtre_".$prefixe]);
						if($infos_filtre_date[0]=="annee"){
							$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` >= '".$infos_filtre_date[1]."-01-01' AND `".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` <= '".$infos_filtre_date[1]."-12-31'";
						}elseif($infos_filtre_date[0]=="mois"){
							$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` >= '".date('Y-m-d',mktime(0, 0, 0, $infos_filtre_date[2], 1, $infos_filtre_date[1]))."' AND `".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` <= '".date('Y-m-d',mktime(0, 0, 0, ($infos_filtre_date[2]+1), 0, $infos_filtre_date[1]))."'";
						}elseif($infos_filtre_date[0]=="jour"){
							$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` = '".date('Y-m-d',mktime(0, 0, 0, $infos_filtre_date[2], $infos_filtre_date[3], $infos_filtre_date[1]))."'";
						}
					}
			}
			if(	$infos_champs["filtrage"]=="image-list"){
					if($infos_champs["type"]=="image" AND $mesGBL["form_get"]["filtre_".$prefixe]!="*"  AND 
						$mesGBL["form_get"]["filtre_".$prefixe]!="NULL"  AND 
						$mesGBL["form_get"]["filtre_".$prefixe]!="NOTNULL"){
						$tab_filtres[]="`".$prefixe."_".$mesGBL["table_info"]["suffixe"]."` LIKE '%".$mesGBL["form_get"]["filtre_".$prefixe]."%'";
					}
			}
		}
	}
	//tri
	if(!isset($mesGBL["form_get"]["tri"])){
		$mesGBL["form_get"]["tri"]="id_asc";
	}
	$tri_to_tab=explode("_",$mesGBL["form_get"]["tri"]);
	$tri_order=$tri_to_tab[count($tri_to_tab)-1];
	unset($tri_to_tab[count($tri_to_tab)-1]);
	$tri_champs=implode("_",$tri_to_tab);
	if(isset($mesGBL["form_get"]["search"])){
		if($mesGBL["form_get"]["search"]){
			$tab_filtres[]="(`".implode("` LIKE '%".$mesGBL["form_get"]["search"]."%') OR (`",$filtre_by_text_est_faisable)."` LIKE '%".$mesGBL["form_get"]["search"]."%')";
		}
	}
	// echo "Filtres (Nb:".count($tab_filtres).") :<br/>";
	if(!count($tab_filtres)){$tab_filtres[]=1;}
	$requete_de_filtrage="SELECT * FROM `".$mesGBL["table_info"]["nom"]."`WHERE (".implode(") AND (",$tab_filtres).") ORDER BY `".$tri_champs."_".$mesGBL["table_info"]["suffixe"]."` ".strtoupper($tri_order).";";
	$resultat_brut_filtre=load_req_select($mesGBL,$ma_BDD,$requete_de_filtrage);
	// echo implode("<br/>\n",$tab_filtres)."<br/>";
	// echo "SELECT * FROM `".$mesGBL["table_info"]["nom"]."`WHERE (".implode(") AND (",$tab_filtres).");";
	$mesGBL["display"]["requete-liste"]=$requete_de_filtrage;
	// echo $requete_de_filtrage;
	$mesGBL["display"]["resultat-liste"]=$resultat_brut_filtre;

/*
$test_min=load_req_select($mesGBL,$ma_BDD,"SELECT MIN(compteur_lien) AS mincompt FROM liens;");
$test_max=load_req_select($mesGBL,$ma_BDD,"SELECT MAX(compteur_lien) AS maxcompt FROM liens;");
echo $test_min[0]["mincompt"]."-".$test_max[0]["maxcompt"]; 
*/
?>	
<title><?php echo $mesGBL["display"]["titre"]; ?></title>
<!-- ************** -->
<!-- * CSS * -->
<!-- ************** -->
	<!-- <link rel="stylesheet" media="screen" type="text/css" title="Design" href="monstyle.css"> -->
	<style type="text/css">
<?php


function mon_generateur_css($mesGBL,$zone){
	$toreturn="		".$zone."{\n";
	
	
	// Positionnement//Display
	if($zone=="body"){
		// rien
	}elseif($zone==".item_menu_haut"){
		$toreturn.="			display : 			inline-block;\n";
	}else{
		$toreturn.="			position : 			absolute;\n";
	}

	// Couleurs
	if($zone=="body"){
		$toreturn.="			background-color :	".$mesGBL["css"]["color-fond"].";\n";
		$toreturn.="			color :				".$mesGBL["css"]["color-forme"].";\n";
	}elseif($zone==".item_menu_haut"){
		$toreturn.="			background-color :	".$mesGBL["css"]["color-fond3"].";\n";
	}else{
		$toreturn.="			background-color :	".$mesGBL["css"]["color-fond2"].";\n";
	}

	// Dépassement
	if($zone=="#zone_menu_haut" OR
		$zone=="#zone_contenus_accueil" OR
		$zone=="#zone_contenus_ajouter" OR
		$zone=="#zone_contenus_editer" OR
		$zone=="#zone_contenus_lister" OR
		$zone=="#zone_contenus_rapport" OR
		$zone=="#zone_pied"){
		$toreturn.="			overflow : 		 	auto;\n";
	}elseif($zone=="#zone_menu_gauche"){
		$toreturn.="			overflow-x : 		 	hidden;\n";
		$toreturn.="			overflow-y : 		 	auto;\n";
	}	
	
	// Positionnement > Largeur
	if($zone=="#zone_contenus_accueil" OR
		$zone=="#zone_contenus_ajouter" OR
		$zone=="#zone_contenus_editer" OR
		$zone=="#zone_contenus_lister" OR
		$zone=="#zone_contenus_rapport"){
		$toreturn.="			left : 				".($mesGBL["css"]["width-menu"])."px;\n";
	}
	
	// Positionnement > Hauteur
	if($zone=="body" OR $zone=="#zone_baniere"){
	}elseif($zone=="#zone_menu_haut"){
		$toreturn.="			top : 				".$mesGBL["css"]["height-ban"]."px;\n";
	}elseif($zone=="#zone_pied"){
		$toreturn.="			top : 				".($mesGBL["css"]["height"]-$mesGBL["css"]["height-pied"])."px;\n";
	}elseif($zone=="#zone_contenus_lister"){ // height-top-contenu
		$toreturn.="			top : 				".($mesGBL["css"]["height-ban"]+$mesGBL["css"]["height-menu"]+$mesGBL["css"]["height-top-contenu"])."px;\n";
	}else{
		$toreturn.="			top : 				".($mesGBL["css"]["height-ban"]+$mesGBL["css"]["height-menu"])."px;\n";
	}
	
	// Taille > Largeur
	if($zone=="body"){
		$toreturn.="			width :				".$mesGBL["css"]["width"]."px;\n";
	}elseif($zone=="#zone_baniere" OR 
			$zone=="#zone_menu_haut" OR 
			$zone=="#zone_pied"){
		$toreturn.="			width :				".($mesGBL["css"]["width"]-$mesGBL["css"]["margin"]*2)."px;\n";
	}elseif($zone==".item_menu_haut"){
		$toreturn.="			width :				".(round($mesGBL["css"]["height-menu"]*2.5)-$mesGBL["css"]["margin"]*2)."px;\n";
	}elseif($zone=="#zone_menu_gauche"){
		$toreturn.="			width :				".($mesGBL["css"]["width-menu"]-$mesGBL["css"]["margin"]*2)."px;\n";
	}else{
		$toreturn.="			width :				".($mesGBL["css"]["width"]-$mesGBL["css"]["width-menu"]-$mesGBL["css"]["margin"]*2)."px;\n";
	}
	
	// Taille > Hauteur
	if($zone=="body"){
		$toreturn.="			height :			".$mesGBL["css"]["height"]."px;\n";
	}elseif($zone=="#zone_baniere"){
		$toreturn.="			height :			".($mesGBL["css"]["height-ban"]-$mesGBL["css"]["margin"]*2)."px;\n";
	}elseif($zone=="#zone_menu_haut"){
		$toreturn.="			height :			".($mesGBL["css"]["height-menu"]-$mesGBL["css"]["margin"]*2)."px;\n";
	}elseif($zone==".item_menu_haut"){
		$toreturn.="			height :			".($mesGBL["css"]["height-menu"]-$mesGBL["css"]["margin"]*5)."px;\n";
	}elseif($zone=="#zone_contenus_accueil" OR
		$zone=="#zone_contenus_ajouter" OR
		$zone=="#zone_contenus_editer"){ // height-top-contenu
		$toreturn.="			height :			".($mesGBL["css"]["height-top-contenu"]-$mesGBL["css"]["margin"]*2)."px;\n";
	}elseif($zone=="#zone_contenus_lister"){ // height-top-contenu
		$toreturn.="			height :			".($mesGBL["css"]["height"]-$mesGBL["css"]["height-ban"]-$mesGBL["css"]["height-menu"]-$mesGBL["css"]["height-top-contenu"]-$mesGBL["css"]["height-pied"]-$mesGBL["css"]["margin"]*2)."px;\n";
	}elseif($zone=="#zone_pied"){
		$toreturn.="			height :			".($mesGBL["css"]["height-pied"]-$mesGBL["css"]["margin"]*2)."px;\n";
	}else{
		$toreturn.="			height :			".($mesGBL["css"]["height"]-$mesGBL["css"]["height-ban"]-$mesGBL["css"]["height-menu"]-$mesGBL["css"]["height-pied"]-$mesGBL["css"]["margin"]*2)."px;\n";
	}
	
	// Bordure
	if($zone=="body"){
		$toreturn.="			border :			1px solid black;\n";
	}else{
		if($mesGBL["css"]["border"]>0){
			$toreturn.="			border :			".$mesGBL["css"]["border"]."px solid ".$mesGBL["css"]["color-forme"].";\n";
		}
	}
	// Radius
	if($zone!="body"){
		if($mesGBL["css"]["radius"]>0){
			$toreturn.="			border-radius : 	".($mesGBL["css"]["radius"])."px;\n";
		}
	}
	
	// Marges
	if($zone=="body"){
		$toreturn.="			margin :			0px;\n";
		$toreturn.="			padding :		 	0px;\n";
	}elseif($zone==".item_menu_haut"){
		$toreturn.="			margin :			".$mesGBL["css"]["margin"]."px;\n";
		$toreturn.="			padding :		 	0px;\n";
		$toreturn.="			vertical-align :	middle;\n";
	}else{
		$toreturn.="			margin :			".$mesGBL["css"]["margin"]."px;\n";
		$toreturn.="			padding :		 	0px;\n";
	}
	
	// Police
	if($zone=="body"){
		$toreturn.="			font-family :		".$mesGBL["css"]["police-style"].";\n";
		$toreturn.="			font-size :			".$mesGBL["css"]["police-taille"]."px;\n";
	}elseif($zone=="#zone_menu_gauche"){
		$toreturn.="			text-align :		center;\n";
	}elseif($zone==".item_menu_haut"){
		$toreturn.="			font-size :			".($mesGBL["css"]["police-taille"]+2)."px;\n";
		$toreturn.="			font-weight :		bold;\n";
		$toreturn.="			text-align :		center;\n";
	}
	
	// *** FIN ***
	$toreturn.="		}\n";
	return $toreturn;
	
}

echo mon_generateur_css($mesGBL,"body");
echo mon_generateur_css($mesGBL,"#zone_baniere");
echo mon_generateur_css($mesGBL,"#zone_menu_haut");
echo mon_generateur_css($mesGBL,".item_menu_haut");
echo mon_generateur_css($mesGBL,"#zone_menu_gauche");
echo mon_generateur_css($mesGBL,"#zone_contenus_accueil");
echo mon_generateur_css($mesGBL,"#zone_contenus_ajouter");
echo mon_generateur_css($mesGBL,"#zone_contenus_editer");
echo mon_generateur_css($mesGBL,"#zone_contenus_lister");
echo mon_generateur_css($mesGBL,"#zone_contenus_rapport");
echo mon_generateur_css($mesGBL,"#zone_pied");
echo "		#zone_baniere h1{
			font-weight :	bold;
			text-align :	center;
			font-size :		".round($mesGBL["css"]["police-taille"]*3.5)."px;
		}\n";
echo "		#zone_menu_gauche .filtre_select{
			border : 			".($mesGBL["css"]["border"])."px;
			border-radius : 	".($mesGBL["css"]["radius"])."px;
			margin :			".($mesGBL["css"]["margin"])."px;
			width : 		".($mesGBL["css"]["width-menu"]-$mesGBL["css"]["margin"]*6)."px;
		}\n";
echo "		#zone_menu_gauche .filtre_image{
			border-radius : 	".($mesGBL["css"]["radius"])."px;
			margin :			".($mesGBL["css"]["margin"])."px;
			width : 		".($mesGBL["css"]["width-menu"]/6)."px;
			heigh : 		".($mesGBL["css"]["width-menu"]/6)."px;
		}\n";
echo "		#zone_menu_gauche .filtre_texte{
			border : 			".($mesGBL["css"]["border"])."px;
			border-radius : 	".($mesGBL["css"]["radius"])."px;
			margin :			".($mesGBL["css"]["margin"])."px;
			width : 		".($mesGBL["css"]["width-menu"]-$mesGBL["css"]["margin"]*6)."px;
			text-align :		center;
		}\n";
echo "		#zone_menu_gauche h2{
			font-weight :	bold;
			text-align :	center;
			margin :			".($mesGBL["css"]["margin"])."px;
			font-size :		".round($mesGBL["css"]["police-taille"]*1.5)."px;
		}\n";
echo "		#zone_menu_gauche h3{
			font-weight :	bold;
			text-align :	center;
			margin :			".($mesGBL["css"]["margin"])."px;
			font-size :		".round($mesGBL["css"]["police-taille"]*1.25)."px;
		}\n";
echo "		a{
			color :			".$mesGBL["css"]["color-forme"].";
			text-decoration:none;
		}\n";
echo "		.montant_positif{color:blue;}\n";
echo "		.montant_negatif{color:red;}\n";
?>
	</style>
	
<!-- ************** -->
<!-- * JAVASCRIPT * -->
<!-- ************** -->
	<!-- <script src="monfichier.js" ></script> -->
	<script type="text/javascript">
	</script>

</head>

<!-- ************************************************************************************************** -->
<!-- ************************************************************************************************** -->
<!-- ********************************************* CORPS *********************************************** -->
<!-- ************************************************************************************************** -->
<!-- ************************************************************************************************** -->
<!-- * HTML - BODY * -->
<!-- ************** -->
<body>

	<!-- ************** -->
	<!-- * HTML - BANIERE * -->
	<!-- ************** -->
	<div id="zone_baniere" <?php if(!$mesGBL["display"]["zone_baniere"]){echo "style=\"display:none;\"";} ?>>
		<h1><?php echo $mesGBL["display"]["titre"]; ?></h1>
	</div>
	<!-- ************** -->
	<!-- * HTML - MENU HAUT * -->
	<!-- ************** -->
	<div id="zone_menu_haut" <?php if(!$mesGBL["display"]["zone_menu_haut"]){echo "style=\"display:none;\"";} ?>>
		<div class="item_menu_haut">
			<a href="./index.php">Home</a>
		</div>
		<div class="item_menu_haut">
			<a href="<?php echo $mesGBL["home"]; ?>">Accueil</a>
		</div>
	</div>
	<!-- ************** -->
	<!-- * HTML - MENU GAUCHE * -->
	<!-- ************** -->
	<div id="zone_menu_gauche" <?php if(!$mesGBL["display"]["zone_menu_gauche"]){echo "style=\"display:none;\"";} ?>>
		<form action="<?php echo $mesGBL["home"]; ?>" method="get">
		
			<!-- ************** -->
			<!-- * HTML - Sélection pour le tri
			<!-- ************** -->
			<h2>Trier par : </h2>
			<select class="filtre_select" name="tri" onchange="submit()">
<?php
foreach($mesGBL["table_struct"] as $prefixe => $infos_champs){
	if($infos_champs["type"]!="primary" AND 
		$infos_champs["type"]!="bool" AND  
		$infos_champs["type"]!="image" AND 
		$infos_champs["type"]!="comment"){
		if(!isset($mesGBL["form_get"]["tri"])){
			$mesGBL["form_get"]["tri"]=$prefixe."_asc";
			echo "";
		}
		echo "<option value=\"".$prefixe."_asc\"";
		if($mesGBL["form_get"]["tri"]==$prefixe."_asc"){echo " selected";}
		echo ">".$prefixe." (croissant)</option>\n";
		
		echo "<option value=\"".$prefixe."_desc\"";
		if($mesGBL["form_get"]["tri"]==$prefixe."_desc"){echo " selected";}
		echo ">".$prefixe." (décroissant)</option>\n";
	}
}
?>></option>
			</select><br/><hr/>
		
			<!-- ************** -->
			<!-- * HTML - Sélection des différents filtres
			<!-- ************** -->
			<h2>Filtrer par :</h2>

<?php
echo $mesGBL["form_get"]["search"];
if($mesGBL["table_info"]["filtre-by-text"] AND count($filtre_by_text_est_faisable)){
echo "			<h3>...Texte :</h3>\n";
echo "			<input class=\"filtre_texte\" type=\"text\" name=\"search\" onblur=\"submit()\" value=\"".$mesGBL["form_get"]["search"]."\">\n";
}
foreach($mesGBL["table_struct"] as $prefixe => $infos_champs){
	switch($infos_champs["filtrage"]){
		case "select-list" :
					echo "			<h3>...".ucfirst($prefixe)."</h3>\n";
					echo "			<select class=\"filtre_select\" name=\"filtre_".$prefixe."\" onchange=\"submit()\">\n";
					echo "				<option value=\"*\"";
					if($mesGBL["form_get"]["filtre_".$prefixe]=="*"){echo " selected";}
					echo ">[ TOUT ]</option>\n";
					echo "				<option value=\"NULL\"";
					if($mesGBL["form_get"]["filtre_".$prefixe]=="NULL"){echo " selected";}
					echo ">[ VIDE ]</option>\n";
					echo "				<option value=\"NOTNULL\"";
					if($mesGBL["form_get"]["filtre_".$prefixe]=="NOTNULL"){echo " selected";}
					echo ">[ REMPLIS ]</option>\n";
					switch($infos_champs["type"]){
						case "image" :
						case "cat" :
								$listing="cats";
								if($infos_champs["type"]=="image"){$listing="images";}
								if($mesGBL["table_info"][$listing][$prefixe]){
									foreach($mesGBL["table_info"][$listing][$prefixe] as $indice => $valeur){
										if($mesGBL["table_info"][$listing][$prefixe][$indice][$prefixe."_".$mesGBL["table_info"]["suffixe"]]){
											echo "				<option value=\"".$mesGBL["table_info"][$listing][$prefixe][$indice][$prefixe."_".$mesGBL["table_info"]["suffixe"]]."\"";
											if($mesGBL["table_info"][$listing][$prefixe][$indice][$prefixe."_".$mesGBL["table_info"]["suffixe"]]==$mesGBL["form_get"]["filtre_".$prefixe]){ echo " selected";}
											echo ">".$mesGBL["table_info"][$listing][$prefixe][$indice][$prefixe."_".$mesGBL["table_info"]["suffixe"]]."</option>\n";
										}
									}
								}
								break;
						case "bool" :
						case "int" :
						case "monnaie" :
								$label_negatif="[-] Négatifs";
								$label_positif="[+] Positifs";
								if($infos_champs["type"]=="bool"){$label_negatif="[ NON ]";$label_positif="[ OUI ]";}
								if($infos_champs["type"]=="monnaie"){$label_negatif="[-] Débits";$label_positif="[+] Crédits";}
								echo "				<option value=\"plus\"";
								if($mesGBL["form_get"]["filtre_".$prefixe]=="plus"){echo " selected";}
								echo ">".$label_positif."</option>\n";
								echo "				<option value=\"moins\"";
								if($mesGBL["form_get"]["filtre_".$prefixe]=="moins"){echo " selected";}
								echo ">".$label_negatif."</option>\n";

								break;
						case "update" :
						case "date" :
								echo "				<optgroup label=\"par année\">\n";
								for($indice_filtre=0;$indice_filtre<$mesGBL["display"]["default-filtre-date"]["nb_annees"];$indice_filtre++){
										$date_courante=date("Y")-$indice_filtre;
										echo "					<option value=\"annee-".$date_courante."\"";
										if($mesGBL["form_get"]["filtre_".$prefixe]=="annee-".$date_courante){echo " selected";}
										echo ">Année ".(date("Y")-$indice_filtre)."</option>\n";
								}
								echo "				</optgroup>\n";
								echo "				<optgroup label=\"par mois\">\n";
								for($indice_filtre=0;$indice_filtre<$mesGBL["display"]["default-filtre-date"]["nb_mois"];$indice_filtre++){
										$date_courante=date('Y-m',mktime(0, 0, 0, date("m")-$indice_filtre, 1, date("Y")));
										list($date_y_courante,$date_m_courante)=explode("-",$date_courante);
										echo "					<option value=\"mois-".$date_courante."\"";
										if($mesGBL["form_get"]["filtre_".$prefixe]=="mois-".$date_courante){echo " selected";}
										echo ">".$mesGBL["display"]["mois-fr"][($date_m_courante+0)]." ".$date_y_courante."</option>\n";
								}
								echo "				</optgroup>\n";
								echo "				<optgroup label=\"par jour\">\n";
								for($indice_filtre=0;$indice_filtre<$mesGBL["display"]["default-filtre-date"]["nb_jours"];$indice_filtre++){
										$date_courante=date('Y-m-d',mktime(0, 0, 0, date("m"), date("d")-$indice_filtre, date("Y")));
										list($date_y_courante,$date_m_courante,$date_j_courante)=explode("-",$date_courante);
										echo "					<option value=\"jour-".date('Y-m-d',mktime(0, 0, 0, date("m"), date("d")-$indice_filtre, date("Y")))."\"";
										if($mesGBL["form_get"]["filtre_".$prefixe]=="jour-".$date_courante){echo " selected";}
										echo ">".format_date($date_courante)."</option>\n";
								}
								echo "				</optgroup>\n";
								// date('Y-m',mktime(0, 0, 0, date("m")-$indice_filtre, 1, date("Y")));
								break;
					}
					echo "</select><br/>\n";
					break;
		case "image-list" :
					echo "			<h3>...".ucfirst($prefixe)."</h3>\n";
					echo "			<div style=\"text-align:left;\">\n";
					if($infos_champs["type"]=="image"){
						echo "				<input class=\"filtre_image\" type=\"image\" name=\"filtre_".$prefixe."\" onclick=\"submit()\" src=\"".$mesGBL["display"]["img-all"]."\" value=\"*\"";
						if($mesGBL["form_get"]["filtre_".$prefixe]=="*"){ echo " style=\"border : 2px solid red;\"";}
						echo ">\n";
						echo "				<input class=\"filtre_image\" type=\"image\" name=\"filtre_".$prefixe."\" onclick=\"submit()\" src=\"".$mesGBL["display"]["img-null"]."\" value=\"NULL\"";
						if($mesGBL["form_get"]["filtre_".$prefixe]=="NULL"){ echo " style=\"border : 2px solid red;\"";}
						echo ">\n";
						echo "				<input class=\"filtre_image\" type=\"image\" name=\"filtre_".$prefixe."\" onclick=\"submit()\" src=\"".$mesGBL["display"]["img-notnull"]."\" value=\"NOTNULL\"";
						if($mesGBL["form_get"]["filtre_".$prefixe]=="NOTNULL"){ echo " style=\"border : 2px solid red;\"";}
						echo ">\n";
						$listing="images";
						if($mesGBL["table_info"][$listing][$prefixe]){
							foreach($mesGBL["table_info"][$listing][$prefixe] as $indice => $valeur){
								echo "				<input class=\"filtre_image\" type=\"image\" name=\"filtre_".$prefixe."\" onclick=\"submit()\" src=\"".$mesGBL["table_info"][$listing][$prefixe][$indice][$prefixe."_".$mesGBL["table_info"]["suffixe"]]."\" value=\"".$mesGBL["table_info"][$listing][$prefixe][$indice][$prefixe."_".$mesGBL["table_info"]["suffixe"]]."\"";
								if($mesGBL["table_info"][$listing][$prefixe][$indice][$prefixe."_".$mesGBL["table_info"]["suffixe"]]==$mesGBL["form_get"]["filtre_".$prefixe]){ echo " style=\"border : 2px solid red;\"";}
									echo ">\n";
								}
						}else{
							echo "<!-- AUCUNE IMAGE A RETOURNER -->";
						}
					}
					echo "			</div>\n";
					break;
		case "radio-list" :
					echo "			<h3>...".ucfirst($prefixe)."</h3>\n";
					echo "			<div style=\"text-align:left;\">\n";
					echo "				<input type=\"radio\" name=\"filtre_".$prefixe."\" onchange=\"submit()\" value=\"*\"";
					if($mesGBL["form_get"]["filtre_".$prefixe]=="*"){echo " checked";}
					echo ">[ TOUT ]<br/>\n";
					echo "				<input type=\"radio\" name=\"filtre_".$prefixe."\" onchange=\"submit()\" value=\"NULL\"";
					if($mesGBL["form_get"]["filtre_".$prefixe]=="NULL"){echo " checked";}
					echo ">[ VIDE ]<br/>\n";
					echo "				<input type=\"radio\" name=\"filtre_".$prefixe."\" onchange=\"submit()\" value=\"NOTNULL\"";
					if($mesGBL["form_get"]["filtre_".$prefixe]=="NOTNULL"){echo " checked";}
					echo ">[ REMPLIS ]<br/>\n";
					switch($infos_champs["type"]){
							case "image" :
							case "cat" :
									$listing="cats";
									if($infos_champs["type"]=="image"){$listing="images";}
									if($mesGBL["table_info"][$listing][$prefixe]){
										foreach($mesGBL["table_info"][$listing][$prefixe] as $indice => $valeur){
											echo "				<input type=\"radio\" name=\"filtre_".$prefixe."\" onchange=\"submit()\" value=\"".$mesGBL["table_info"][$listing][$prefixe][$indice][$prefixe."_".$mesGBL["table_info"]["suffixe"]]."\"";
											if($mesGBL["table_info"][$listing][$prefixe][$indice][$prefixe."_".$mesGBL["table_info"]["suffixe"]]==$mesGBL["form_get"]["filtre_".$prefixe]){ echo " checked";}
											echo ">".$mesGBL["table_info"][$listing][$prefixe][$indice][$prefixe."_".$mesGBL["table_info"]["suffixe"]]."<br/>\n";
										}
									}else{
										echo "<!-- AUCUNE CATEGORIE A RETOURNER -->";
									}
									break;
							case "bool" :
							case "int" :
							case "monnaie" :
									$label_negatif="[-] Négatifs";
									$label_positif="[+] Positifs";
									if($infos_champs["type"]=="bool"){$label_negatif="[ NON ]";$label_positif="[ OUI ]";}
									if($infos_champs["type"]=="monnaie"){$label_negatif="[-] Débits";$label_positif="[+] Crédits";}
									echo "				<input type=\"radio\" name=\"filtre_".$prefixe."\" onchange=\"submit()\" value=\"positif\"";
									if($mesGBL["form_get"]["filtre_".$prefixe]=="plus"){echo " checked";}
									echo ">".$label_positif."<br/>\n";
									echo "				<input type=\"radio\" name=\"filtre_".$prefixe."\" onchange=\"submit()\" value=\"negatif\"";
									if($mesGBL["form_get"]["filtre_".$prefixe]=="moins"){echo " checked";}
									echo ">".$label_negatif."<br/>\n";
									break;
					}
					echo "			</div>\n";
				break;
		case "texte" :
					// echo "			<h3>voir champs \"Texte\" => ".ucfirst($prefixe)."</h3>\n";
				break;
		DEFAULT :
					// echo "			<h3>masquer : ".ucfirst($prefixe)."</h3>\n";
				break;
	}
}
?>

</div>
 
		</form>
	</div>

	<!-- ************** -->
	<!-- * HTML - CONTENUS * -->
	<!-- ************** -->
		<!-- ************************************ -->
		<!-- AFFICHER : compte -->
		<!-- ************************************ -->
	<div id="zone_contenus_accueil" <?php if(!$mesGBL["display"]["zone_contenus_accueil"]){echo "style=\"display:none;\"";} ?>>
	 Bienvenue sur l'outil de gestion<br/>
	 
	</div>
	<div id="zone_contenus_ajouter" <?php if(!$mesGBL["display"]["zone_contenus_ajouter"]){echo "style=\"display:none;\"";} ?>>
	 zone_contenus_ajouter
	</div>
	<div id="zone_contenus_editer" <?php if(!$mesGBL["display"]["zone_contenus_editer"]){echo "style=\"display:none;\"";} ?>>
	 zone_contenus_editer
	</div>
	<div id="zone_contenus_lister" <?php if(!$mesGBL["display"]["zone_contenus_lister"]){echo "style=\"display:none;\"";} ?>>
<?php
	echo "	<br/>Nombre de résultats : ".count($mesGBL["display"]["resultat-liste"])."<br/>\n";
	echo "	<table>\n";
	echo "		<tr>\n";
	foreach($mesGBL["table_struct"] as $prefixe => $infos_champs){
		if($infos_champs["voir"]){
			echo "			<th>".$prefixe."<br/><a href=\"".$mesGBL["home"]."?tri=".$prefixe."_asc\">ASC</a> - <a href=\"".$mesGBL["home"]."?tri=".$prefixe."_desc\">DESC</a></th>\n";
		}
	}
	echo "		</tr>\n";
	$mesGBL["display"]["resultat-liste"];
	echo "		<tr>\n";
	foreach($mesGBL["display"]["resultat-liste"] as $indice_enr => $enregistrement){
		echo "		<tr>\n";
		foreach($mesGBL["table_struct"] as $prefixe => $infos_champs){
			if($infos_champs["voir"]){
				if($infos_champs["type"]=="image"){
					echo "			<td><img src=\"".$enregistrement[$prefixe."_".$mesGBL["table_info"]["suffixe"]]."\"/></td>\n";
				}else{
					echo "			<td>".$enregistrement[$prefixe."_".$mesGBL["table_info"]["suffixe"]]."</td>\n";
				}
			}
		}
		echo "		</tr>\n";
		}
	echo "		</tr>\n";
	echo "	</table>\n";
?>
	</div>
	<div id="zone_contenus_rapport" <?php if(!$mesGBL["display"]["zone_contenus_rapport"]){echo "style=\"display:none;\"";} ?>>
	 zone_contenus_rapport
	</div>
	<div id="zone_pied" <?php if(!$mesGBL["display"]["zone_pied"]){echo "style=\"display:none\"";} ?>>
	 zone_pied
	</div>

</body>
<html>
