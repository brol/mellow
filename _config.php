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
if (!defined('DC_CONTEXT_ADMIN')) { return; }

global $core;

//PARAMS

# Translations
l10n::set(dirname(__FILE__).'/locales/'.$_lang.'/main');

# Default values
$default_color = 'green';

# Settings
$my_color = $core->blog->settings->themes->mellow_color;

# Color type
$mellow_color_combo = array(
	__('green') => 'green',
	__('red') => 'red',
	__('blue') => 'blue',
);

// POST ACTIONS

if (!empty($_POST))
{
	try
	{
		$core->blog->settings->addNamespace('themes');

		# Color type
		if (!empty($_POST['mellow_color']) && in_array($_POST['mellow_color'],$mellow_color_combo))
		{
			$my_color = $_POST['mellow_color'];

		} elseif (empty($_POST['mellow_color']))
		{
			$my_color = $default_color;

		}
		$core->blog->settings->themes->put('mellow_color',$my_color,'string','Color display',true);

		// Blog refresh
		$core->blog->triggerBlog();

		// Template cache reset
		$core->emptyTemplatesCache();

		dcPage::success(__('Theme configuration has been successfully updated.'),true,true);
	}
	catch (Exception $e)
	{
		$core->error->add($e->getMessage());
	}
}

// DISPLAY

# Color type
echo
'<div class="fieldset"><h4>'.__('Colors').'</h4>'.
'<p class="field"><label>'.__('Display:').'</label>'.
form::combo('mellow_color',$mellow_color_combo,$my_color).
'</p>'.
'</div>';