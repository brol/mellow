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
$this->registerModule(
	/* Name */			"Mellow",
	/* Description*/		"Thème en trois déclinaisons de couleur (vert, bleu, rouge)",
	/* Author */			"David Yim (http://davidyim.com/), Pierre Van Glabeke",
	/* Version */			'1.4',
	array(
		'type'	 =>	'theme',
		'tplset' => 'mustek'
	)
);