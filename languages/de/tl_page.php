<?php // with ♥ and Contao

/**
 * anyStores for Contao Open Source CMS
 *
 * @copyright   (c) 2015 Tastaturberuf <mail@tastaturberuf.de>
 * @author      Daniel Jahnsmüller <mail@jahnsmueller.net>
 * @license     http://opensource.org/licenses/lgpl-3.0.html
 * @package     anyStores
 */


$GLOBALS['TL_LANG']['tl_page'] = array_replace($GLOBALS['TL_LANG']['tl_page'] ?? [], array
(
    'anystores_legend'     => 'anyStores-Einstellungen',
    'anystores_sitemap'    => array('Zur Sitemap hinzufügen', 'Aktivieren um definierte Standorte in der Sitemap anzuzeigen.'),
    'anystores_detailPage' => array('Detailseite', 'Wählen Sie eine Seite auf der sich das Modul "anyStores-Details" befindet.'),
    'anystores_categories' => array('Kategorien', 'Wählen Sie die Kategorien die in der Sitemap erscheinen sollen.')
));
