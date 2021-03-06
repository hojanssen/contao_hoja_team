<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * HoJa Teams
 *
 * @author Holger Janßen <contao@holgerjanssen.de>
 * @copyright Holger Janßen <http://www.holgerjanssen.de>
 * @package ptsv_teams
 * @filesource
 * @licence LGPL
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_hoja_team'] = array (
	"name" 			=> array ('Mannschaftsname','Eine eindeutiger Name für die Mannschaft'),
	'league' 		=> array ('Liga', 'Die Spielklasse der Mannschaft (in der aktuellen Saison)'),
	'team_image' 	=> array ('Mannschaftsfoto', 'Auswahl des Mannschaftsfotos. Die Größe wird automatisch umgerechnet'),
	'trainer' 		=> array ("Trainer", "Name des Trainers"),
	'trainer_email' => array ("E-Mail", "E-Mail-Adresse des Trainers"),
	'contact' 		=> array ("Ansprechpartner", "Name des Ansprechpartners"),
	'contact_email' => array ("E-Mail", "E-Mail-Adresse des Ansprechpartners"),
	'description'	=> array ('Beschreibung', "Freitext-Beschreibung"),
	'filePath'		=> array ("Bild-Verzeichnis", "Einschränkung für das Bildverzeichnis für diese Mannschaft" ),
	'useFilePath'	=> array ("Bild-Verzeichnis festlegen", "Soll diese Mannschaft ein festes Verzeichnis für Bilder bekommen?"),
	'training'	=> array ("Trainingszeiten", "Wochen-Trainingszeiten dieser Mannschaft"),
	'show_training' => array ("Trainingszeiten angeben", "Sollen (ein oder mehrere) Trainingszeiten eingegeben werden?"),
	'training_dayofweek' => array ("Wochentag", "Wochentag" ),
	'training_dayofweek_labels' => array 
	(
		"1" => "Montag",
		"2" => "Dienstag",
		"3" => "Mittwoch",
		"4" => "Donnerstag",
		"5" => "Freitag",
		"6" => "Samstag",
		"7" => "Sonntag"
	),
	'training_time_start' => array ("Start", "Uhrzeit" ),
	'training_time_end'   => array ("Ende", "Uhrzeit" ),
	'training_location'	=> array ("Ort", "Halle / Adresse" ),
);


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_hoja_team']['general_legend'] = 'Mannschaftsdaten';
$GLOBALS['TL_LANG']['tl_hoja_team']['filePath_legend'] = 'Dateipfad für Bilder etc. einschränken';
$GLOBALS['TL_LANG']['tl_hoja_team']['contact_legend'] = "Kontaktdaten";
$GLOBALS['TL_LANG']['tl_hoja_team']['training_legend'] = "Trainingszeiten";
$GLOBALS['TL_LANG']['tl_hoja_team']['info_legend'] = "Daten für die Beschreibungs-Seite";


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_hoja_team']['new']			= array('Neue Mannschaft', 'Eine neue Mannschaft anlegen');
$GLOBALS['TL_LANG']['tl_hoja_team']['show']			= array('Mannschaftsdetails', 'Die Details der Mannschaft ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_hoja_team']['edit_team']	= array('Mannschaftsdetails bearbeiten', 'Mannschaftsdaten ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_hoja_team']['copy']			= array('Mannschaft duplizieren', 'Mannschaft ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_hoja_team']['delete']		= array('Mannschaft löschen', 'Mannschaft ID %s löschen');

?>
