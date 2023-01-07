<?php
/**
 * @brief Mellow, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Theme
 *
 * @author David Yim
 *
 * @contributeur Pierre Van Glabeke
 * @copyright http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

if (!defined('DC_RC_PATH')) {
    return;
}
$this->registerModule(
    'Mellow',
    'Thème en trois déclinaisons de couleur (vert, bleu, rouge)',
    'David Yim, Pierre Van Glabeke',
    '1.8.1',
    [
        'requires' => [['core', '2.24']],
        'type'     => 'theme',
        'tplset'   => 'mustek',
    ]
);
