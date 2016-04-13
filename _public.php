<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
#
# This file is part of Mellow, a theme for Dotclear 2.
#
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK ------------------------------------
if (!defined('DC_RC_PATH')) { return; }

l10n::set(dirname(__FILE__).'/locales/'.$_lang.'/public');

$core->addBehavior('publicHeadContent','mellow_publicHeadContent');

function mellow_publicHeadContent($core)
{
	$style = $core->blog->settings->themes->mellow_color;
	if (!preg_match('/^green|blue|red$/',$style)) {
		$style = 'green';
	}

	$url = $core->blog->settings->system->themes_url.'/'.$core->blog->settings->system->theme;
	echo '<link rel="stylesheet" type="text/css" media="screen" href="'.$url."/".$style.".css\" />\n";
}