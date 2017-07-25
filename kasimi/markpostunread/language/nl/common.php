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
	// Viewtopic
	'MARKPOSTUNREAD_MARK_UNREAD'			=> 'Markeer berichten als ongelezen',
	'MARKPOSTUNREAD_MARKED_UNREAD'			=> 'Bericht succesvol als ongelezen gemarkeerd.',

	/*
	 * %1$s => success message
	 * %2$s => link for returning to the last visited forum
	 * %3$s => link for returning to the index page
	 */
	'MARKPOSTUNREAD_REDIRECT_FORMAT'		=> '%1$s<br /><br />%2$s<br /><br />%3$s',

	// Navbar
	'MARKPOSTUNREAD_UNREAD_NUM_MAX'			=> 'Ongelezen berichten in meer dan %1$d topics',
	'MARKPOSTUNREAD_UNREAD_NUM'				=> array(
		0 => 'Geen ongelezen berichten',
		1 => 'Ongelezen berichten in %1$d topic',
		2 => 'Ongelezen berichten in %1$d topics',
	),
));
