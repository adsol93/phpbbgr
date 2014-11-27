<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'APPROVE'								=> 'Έγκριση',
	'ATTACHMENT'						=> 'Συνημμένο',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Τα συνημμένα έχουν απενεργοποιηθεί.',

	'BOOKMARK_ADDED'		=> 'Παρακολούθηση θέματος επιτυχής.',
	'BOOKMARK_ERR'			=> 'Η παρακολούθηση του θέματος απέτυχε. Παρακαλώ ξαναδοκιμάστε.',
	'BOOKMARK_REMOVED'		=> 'Αφαίρεση παρακολούθησης θέματος επιτυχής.',
	'BOOKMARK_TOPIC'		=> 'Παρακολούθηση θέματος',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Αφαίρεση από τη λίστα σελιδοδεικτών',
	'BUMPED_BY'				=> 'Τελευταία ενημερώθηκε από %1$s την %2$s.',
	'BUMP_TOPIC'			=> 'Ενημέρωση θέματος',

	'CODE'					=> 'Κώδικας',

	'DELETE_TOPIC'			=> 'Διαγραφή θέματος',
	'DELETED_INFORMATION'	=> 'Διεγράφη από %1$s την %2$s',
	'DISAPPROVE'					=> 'Άρνηση έγκρισης',
	'DOWNLOAD_NOTICE'		=> 'Δεν έχετε τα απαιτούμενα δικαιώματα για να προβάλετε τα συνημμένα της δημοσίευσης.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Τελευταία επεξεργασία από %2$s την %3$s, επεξεργάστηκε %1$d φορά συνολικά.',
		2	=> 'Τελευταία επεξεργασία από %2$s την %3$s, επεξεργάστηκε %1$d φορές συνολικά.',
	),
	'EMAIL_TOPIC'			=> 'Αποστολή θέματος με email',
	'ERROR_NO_ATTACHMENT'	=> 'Το επιλεγμένο συνημμένο δεν υπάρχει πλέον.',

	'FILE_NOT_FOUND_404'	=> 'Το αρχείο <strong>%s</strong> δεν υπάρχει.',
	'FORK_TOPIC'			=> 'Αντιγραφή θέματος',
	'FULL_EDITOR'			=> 'Πλήρης επεξεργαστής &amp; Προεπισκόπηση',

	'LINKAGE_FORBIDDEN'		=> 'Δεν είστε εξουσιοδοτημένος για να προβάλετε, μεταφορτώσετε ή να δώσετε σύνδεσμο από/προς αυτή τη σελίδα.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Έχετε ενημερωθεί για αυτό το θέμα, παρακαλώ συνδεθείτε για να το δείτε.',
	'LOGIN_VIEWTOPIC'		=> 'Το σύστημα απαιτεί να είστε εγγεγραμμένος και συνδεδεμένος για να προβάλετε αυτό το θέμα.',

	'MAKE_ANNOUNCE'				=> 'Αλλαγή σε “Ανακοίνωση”',
	'MAKE_GLOBAL'				=> 'Αλλαγή σε “Καθολικό”',
	'MAKE_NORMAL'				=> 'Αλλαγή σε “Κανονικό θέμα”',
	'MAKE_STICKY'				=> 'Αλλαγή σε “Σημείωση”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Μπορείτε να επιλέξετε <strong>%d</strong> επιλογή',
		2	=> 'Μπορείτε να επιλέξετε έως <strong>%d</strong> επιλογές',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Το συνημμένο <strong>%s</strong> δεν είναι πλέον διαθέσιμο',
	'MOVE_TOPIC'				=> 'Μετακίνηση θέματος',

	'NO_ATTACHMENT_SELECTED'=> 'Δεν έχετε επιλέξει κάποιο σηνημμένο για μεταφόρτωση ή προβολή.',
	'NO_NEWER_TOPICS'		=> 'Δεν υπάρχουν νεότερα θέματα σε αυτή τη Δ. Συζήτηση.',
	'NO_OLDER_TOPICS'		=> 'Δεν υπάρχουν παλαιότερα θέματα σε αυτή τη Δ. Συζήτηση.',
	'NO_UNREAD_POSTS'		=> 'Δεν υπάρχουν νέες μη αναγνωσμένες δημοσιεύσεις για αυτό το θέμα.',
	'NO_VOTE_OPTION'		=> 'Πρέπει να επιλέξετε μια επιλογή στο δημοψήφισμα.',
	'NO_VOTES'				=> 'Δεν υπάρχουν ψήφοι',

	'POLL_ENDED_AT'			=> 'Το δημοψήφισμα έληξε την %s',
	'POLL_RUN_TILL'			=> 'Το δημοψήφισμα ισχύει μέχρι %s',
	'POLL_VOTED_OPTION'		=> 'Έχετε ψηφίσει για αυτή την επιλογή',
	'POST_DELETED_RESTORE'	=> 'Αυτή η δημοσίευση έχει διαγραφεί. Μπορεί να ανακτηθεί.',
	'PRINT_TOPIC'			=> 'Προβολή εκτύπωσης',

	'QUICK_MOD'				=> 'Εργαλεία γρήγορου συντονισμού',
	'QUICKREPLY'			=> 'Γρήγορη απάντηση',
	'QUOTE'					=> 'Παράθεση',

	'REPLY_TO_TOPIC'		=> 'Απάντηση στο θέμα',
	'RESTORE'				=> 'Επαναφορά',
	'RESTORE_TOPIC'			=> 'Επαναφορά θέματος',
	'RETURN_POST'			=> '%sΕπιστροφή στη δημοσίευση%s',

	'SUBMIT_VOTE'			=> 'Υποβολή ψήφου',

	'TOPIC_TOOLS'			=> 'Εργαλεία θέματος',
	'TOTAL_VOTES'			=> 'Συνολικές ψήφοι',

	'UNLOCK_TOPIC'			=> 'Ξεκλείδωμα θέματος',

	'VIEW_INFO'				=> 'Λεπτομέρειες δημοσίευσης',
	'VIEW_NEXT_TOPIC'		=> 'Επόεμενο θέμα',
	'VIEW_PREVIOUS_TOPIC'	=> 'Προηγούμενο θέμα',
	'VIEW_RESULTS'			=> 'Προβολή αποτελεσμάτων',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d δημοσίευση',
		2	=> '%d δημοσιεύσεις',
	),
	'VIEW_UNREAD_POST'		=> 'Πρώτη μη αναγνωσμένη δημοσίευση',
	'VOTE_SUBMITTED'		=> 'Η ψήφος σας έχει προσμετρηθεί.',
	'VOTE_CONVERTED'		=> 'Η αλλαγή ψήφου δεν υποστηρίζεται για δημοψηφίσματα που έχουν αλλαχθεί.',

));
