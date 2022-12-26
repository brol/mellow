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
if (!defined('DC_RC_PATH')) {
    return;
}
$this->registerModule(
    'Mellow',
    'Thème en trois déclinaisons de couleur (vert, bleu, rouge)',
    'David Yim, Pierre Van Glabeke',
    '1.8',
    [
        'requires' => [['core', '2.24']],
        'type'     => 'theme',
        'tplset'   => 'mustek',
    ]
);
