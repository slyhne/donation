<?php
/**
 * Elgg Donation plugin
 * @license: GPL v 2.
 * @author slyhne/ura soul
 * @copyright Tiger Inc I/S
 * @link http://tiger-inc.eu
 */

if($vars['entity']->donation > time()) {
	$date = date("j/n-Y", $vars['entity']->donation);
	$link = elgg_view('output/url', array(
					'text' => elgg_echo('donation:donator', array(elgg_get_config('sitename'))),
					'title' => elgg_echo('donation:show:everyone'),
					'href' => 'donation',
					));
	echo "<div class=\"even\"><div class=\"profile_donation\">";
	echo $link;
	echo "</div></div>";
}

