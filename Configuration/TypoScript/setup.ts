
plugin.tx_mediavqf_pi1 {
    view {
        templateRootPaths.0 = EXT:media_vqf/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_mediavqf_pi1.view.templateRootPath}
        partialRootPaths.0 = EXT:media_vqf/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_mediavqf_pi1.view.partialRootPath}
        layoutRootPaths.0 = EXT:media_vqf/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_mediavqf_pi1.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_mediavqf_pi1.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_mediavqf_pi2 {
    view {
        templateRootPaths.0 = EXT:media_vqf/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_mediavqf_pi2.view.templateRootPath}
        partialRootPaths.0 = EXT:media_vqf/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_mediavqf_pi2.view.partialRootPath}
        layoutRootPaths.0 = EXT:media_vqf/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_mediavqf_pi2.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_mediavqf_pi2.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_mediavqf_pi3 {
    view {
        templateRootPaths.0 = EXT:media_vqf/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_mediavqf_pi3.view.templateRootPath}
        partialRootPaths.0 = EXT:media_vqf/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_mediavqf_pi3.view.partialRootPath}
        layoutRootPaths.0 = EXT:media_vqf/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_mediavqf_pi3.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_mediavqf_pi3.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_mediavqf._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-media-vqf table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-media-vqf table th {
        font-weight:bold;
    }

    .tx-media-vqf table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
