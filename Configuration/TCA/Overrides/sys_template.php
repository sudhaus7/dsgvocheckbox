<?php
/**
 * Markus Hofmann
 * 05.11.21 14:38
 * dsgvocheckbox
 */

(static function($extKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extKey,
        'Configuration/TypoScript',
        'Sudhaus7 Form Framework Extras'
    );
})('sudhaus7_formframework');