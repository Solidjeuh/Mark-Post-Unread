<?php

/**
 *
 * @package phpBB Extension - Mark Post Unread
 * @copyright (c) 2015 kasimi - https://kasimi.net
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'MARKPOSTUNREAD_TITLE'						=> 'Markeer berichten als ongelezen',
	'MARKPOSTUNREAD_CONFIG'						=> 'Configuratie',
	'MARKPOSTUNREAD_CONFIG_UPDATED'				=> '<strong>Markeer berichten als ongelezen </strong>Extensie<br />» Configuratie geupdate',

	'MARKPOSTUNREAD_GROUP_MARKPOSTUNREAD'		=> '«Markeer berichten als ongelezen» knop in viewtopic',
	'MARKPOSTUNREAD_ENABLED'					=> '«Markeer berichten als ongelezen» knop',
	'MARKPOSTUNREAD_ENABLED_EXP'				=> 'Belangrijk: <strong>Activatie van Server onderwerp markering</strong> moet worden ingesteld op <strong>Ja</strong> in de laad instellingen.',
	'MARKPOSTUNREAD_ENABLE_FAILED'				=> 'Inschakelen van de «Markeer berichten als ongelezen» knop is mislukt omdat <strong>Server onderwerp markering</strong> is uitgeschakeld.',
	'MARKPOSTUNREAD_MAX_DAYS'					=> 'Maximale leeftijd van berichten, in dagen',
	'MARKPOSTUNREAD_MAX_DAYS_EXP'				=> 'Wanneer een gebruiker een ongelezen post markeert, wordt een rij in de topics_track tabel ingevoegd voor elk al gelezen onderwerp in het betreffende forum met een laatste_post_tijd nadat de post_time van het bericht ongelezen is gemarkeerd. Op een groot forum met een groot aantal berichten is het denkbaar dat er veel database opslag kan worden gebruikt voor deze functie (bijv. Als veel gebruikers je oude berichten ongelezen markeren), en ook het vertragen van grote forum met veel onderwerpen. Met deze optie kunt u de functie beperken tot berichten die niet meer dan een bepaald aantal dagen oud zijn. Voer 0 in om uw gebruikers toe te staan om<strong> alle </ strong> berichten als ongelezen te markeren.',

	'MARKPOSTUNREAD_GROUP_UNREADSEARCHLINK'		=> '«Ongelezen berichten» zoek link in de navbar',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK'			=> 'Gedrag van de «Ongelezen berichten» zoek link in de navbar',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_EXP'		=> 'Opties 2 en 3 hebben alleen invloed op ingelogde gebruikers. Gebruikers die niet ingelogd zijn, zien altijd «Ongelezen berichten».',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT1'		=> '1) Toon altijd «Ongelezen berichten» (phpBB standaard)',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT2'		=> '2) Toon «Ongelezen berichten» / «Geen ongelezen berichten»',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT2_EXP'	=> 'Kan de prestatie een beetje be&iuml;nvloeden.',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT3'		=> '3) Tppn «Ongelezen berichten in X topics» / «Geen ongelezen berichten»',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT3_EXP'	=> 'Kan de prestaties opmerkelijk be&iuml;nvloeden.',
));
