<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 *
 * @package     MetaModels
 * @subpackage  AttributeLangcode
 * @author      Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author      Andreas Isaak <andy.jared@googlemail.com>
 * @author      Cliff Parnitzky <github@cliff-parnitzky.de>
 * @author      David Maack <maack@men-at-work.de>
 * @copyright   The MetaModels team.
 * @license     LGPL.
 * @filesource
 */

/**
 * Table tl_metamodel_attribute 
 */

$GLOBALS['TL_DCA']['tl_metamodel_attribute']['metapalettes']['langcode extends _simpleattribute_'] = array
(
    '+display' => array('langcodes after description')
);

$GLOBALS['TL_DCA']['tl_metamodel_attribute']['fields']['langcodes'] = array
(
    'label'                 => &$GLOBALS['TL_LANG']['tl_metamodel_attribute']['langcodes'],
    'exclude'               => true,
    'inputType'             => 'checkbox',
    'eval'                  => array
    (
        'doNotSaveEmpty' => true,
        'alwaysSave'     => true,
        'multiple'       => true
    ),
    'options' => $this->getLanguages()
);