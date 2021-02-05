<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:oauth2_server/Resources/Private/Language/locallang_db.xlf:tx_oauth2server_domain_model_refreshtoken',
        'label' => 'identifier',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'enablecolumns' => [
        ],
        'searchFields' => 'identifier,access_token',
        'iconfile' => 'EXT:oauth2_server/Resources/Public/Icons/tx_oauth2server_domain_model_refreshtoken.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'identifier, expires_at, access_token, revoked',
    ],
    'types' => [
        '1' => ['showitem' => 'identifier, expires_at, access_token, revoked'],
    ],
    'columns' => [

        'identifier' => [
            'exclude' => false,
            'label' => 'LLL:EXT:oauth2_server/Resources/Private/Language/locallang_db.xlf:tx_oauth2server_domain_model_refreshtoken.identifier',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'expires_at' => [
            'exclude' => false,
            'label' => 'LLL:EXT:oauth2_server/Resources/Private/Language/locallang_db.xlf:tx_oauth2server_domain_model_refreshtoken.expires_at',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 10,
                'eval' => 'datetime',
                'default' => time()
            ],
        ],
        'access_token' => [
            'exclude' => false,
            'label' => 'LLL:EXT:oauth2_server/Resources/Private/Language/locallang_db.xlf:tx_oauth2server_domain_model_refreshtoken.access_token',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'revoked' => [
            'exclude' => false,
            'label' => 'LLL:EXT:oauth2_server/Resources/Private/Language/locallang_db.xlf:tx_oauth2server_domain_model_refreshtoken.revoked',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
    
    ],
];
