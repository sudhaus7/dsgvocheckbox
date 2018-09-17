<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 13.09.18
 * Time: 12:19
 */
$EM_CONF[$_EXTKEY] = array(
    'title' => '(Sudhaus7) Form Framework Extensions',
    'description' => 'Provides Additional Fields, Configs and Finishers',
    'category' => 'plugin',
    'author' => 'Frank Berger',
    'author_email' => 'fberger@sudhaus7.de',
    'author_company' => 'Sudhaus7 GmbH',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '1.0.3',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.7.99',
            'form' =>'7.6.0-8.7.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
