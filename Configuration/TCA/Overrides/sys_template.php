<?php

defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'headless_navigations',
    'Configuration/TypoScript',
    'Headless Navigations'
);
