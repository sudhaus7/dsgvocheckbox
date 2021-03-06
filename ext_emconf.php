<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 13.09.18
 * Time: 12:19
 */
$EM_CONF[$_EXTKEY] = [
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
    'version' => '1.2.3',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-9.5.99',
            'form' =>'7.6.0-9.5.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
