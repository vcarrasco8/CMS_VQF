<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('media_vqf', 'Configuration/TypoScript', 'media_vqf');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_mediavqf_domain_model_media', 'EXT:media_vqf/Resources/Private/Language/locallang_csh_tx_mediavqf_domain_model_media.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mediavqf_domain_model_media');

    }
);
