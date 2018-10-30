<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'ias',
        'protocol' => 'json',
//        'serviceFullName' => 'ias',
//        'serviceId' => 'ias',
    ],
    'operations' => [
        'CreateApp' => [
            'name' => 'CreateApp',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/app',
            ],
            'input' => [ 'shape' => 'CreateAppRequestShape', ],
            'output' => [ 'shape' => 'CreateAppResponseShape', ],
        ],
        'GetApp' => [
            'name' => 'GetApp',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/app/{clientId}',
            ],
            'input' => [ 'shape' => 'GetAppRequestShape', ],
            'output' => [ 'shape' => 'GetAppResponseShape', ],
        ],
        'UpdateApp' => [
            'name' => 'UpdateApp',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/app/{clientId}',
            ],
            'input' => [ 'shape' => 'UpdateAppRequestShape', ],
            'output' => [ 'shape' => 'UpdateAppResponseShape', ],
        ],
        'DeleteApp' => [
            'name' => 'DeleteApp',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/app/{clientId}',
            ],
            'input' => [ 'shape' => 'DeleteAppRequestShape', ],
            'output' => [ 'shape' => 'DeleteAppResponseShape', ],
        ],
        'GetApps' => [
            'name' => 'GetApps',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/apps',
            ],
            'input' => [ 'shape' => 'GetAppsRequestShape', ],
            'output' => [ 'shape' => 'GetAppsResponseShape', ],
        ],
    ],
    'shapes' => [
        'Application' => [
            'type' => 'structure',
            'members' => [
                'clientName' => [ 'type' => 'string', 'locationName' => 'clientName', ],
                'tokenEndpointAuthMethod' => [ 'type' => 'string', 'locationName' => 'tokenEndpointAuthMethod', ],
                'grantTypes' => [ 'type' => 'string', 'locationName' => 'grantTypes', ],
                'redirectUris' => [ 'type' => 'string', 'locationName' => 'redirectUris', ],
                'clientUri' => [ 'type' => 'string', 'locationName' => 'clientUri', ],
                'logoUri' => [ 'type' => 'string', 'locationName' => 'logoUri', ],
                'tosUri' => [ 'type' => 'string', 'locationName' => 'tosUri', ],
                'policyUri' => [ 'type' => 'string', 'locationName' => 'policyUri', ],
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'jwksUri' => [ 'type' => 'string', 'locationName' => 'jwksUri', ],
                'jwks' => [ 'type' => 'string', 'locationName' => 'jwks', ],
                'contacts' => [ 'type' => 'string', 'locationName' => 'contacts', ],
                'extension' => [ 'type' => 'string', 'locationName' => 'extension', ],
                'accessTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'accessTokenValiditySeconds', ],
                'refreshTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'refreshTokenValiditySeconds', ],
                'multiTenant' => [ 'type' => 'boolean', 'locationName' => 'multiTenant', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
            ],
        ],
        'ApplicationRes' => [
            'type' => 'structure',
            'members' => [
                'clientId' => [ 'type' => 'string', 'locationName' => 'clientId', ],
                'clientName' => [ 'type' => 'string', 'locationName' => 'clientName', ],
                'tokenEndpointAuthMethod' => [ 'type' => 'string', 'locationName' => 'tokenEndpointAuthMethod', ],
                'grantTypes' => [ 'type' => 'string', 'locationName' => 'grantTypes', ],
                'responseTypes' => [ 'type' => 'string', 'locationName' => 'responseTypes', ],
                'redirectUris' => [ 'type' => 'string', 'locationName' => 'redirectUris', ],
                'clientUri' => [ 'type' => 'string', 'locationName' => 'clientUri', ],
                'logoUri' => [ 'type' => 'string', 'locationName' => 'logoUri', ],
                'tosUri' => [ 'type' => 'string', 'locationName' => 'tosUri', ],
                'policyUri' => [ 'type' => 'string', 'locationName' => 'policyUri', ],
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'jwksUri' => [ 'type' => 'string', 'locationName' => 'jwksUri', ],
                'jwks' => [ 'type' => 'string', 'locationName' => 'jwks', ],
                'contacts' => [ 'type' => 'string', 'locationName' => 'contacts', ],
                'extension' => [ 'type' => 'string', 'locationName' => 'extension', ],
                'accessTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'accessTokenValiditySeconds', ],
                'refreshTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'refreshTokenValiditySeconds', ],
                'multiTenant' => [ 'type' => 'boolean', 'locationName' => 'multiTenant', ],
                'secretUpdateTime' => [ 'type' => 'long', 'locationName' => 'secretUpdateTime', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
            ],
        ],
        'GetAppsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'clientId' => [ 'type' => 'string', 'locationName' => 'clientId', ],
                'clientName' => [ 'type' => 'string', 'locationName' => 'clientName', ],
                'tokenEndpointAuthMethod' => [ 'type' => 'string', 'locationName' => 'tokenEndpointAuthMethod', ],
                'grantTypes' => [ 'type' => 'string', 'locationName' => 'grantTypes', ],
                'responseTypes' => [ 'type' => 'string', 'locationName' => 'responseTypes', ],
                'redirectUris' => [ 'type' => 'string', 'locationName' => 'redirectUris', ],
                'clientUri' => [ 'type' => 'string', 'locationName' => 'clientUri', ],
                'logoUri' => [ 'type' => 'string', 'locationName' => 'logoUri', ],
                'tosUri' => [ 'type' => 'string', 'locationName' => 'tosUri', ],
                'policyUri' => [ 'type' => 'string', 'locationName' => 'policyUri', ],
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'jwksUri' => [ 'type' => 'string', 'locationName' => 'jwksUri', ],
                'jwks' => [ 'type' => 'string', 'locationName' => 'jwks', ],
                'contacts' => [ 'type' => 'string', 'locationName' => 'contacts', ],
                'extension' => [ 'type' => 'string', 'locationName' => 'extension', ],
                'accessTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'accessTokenValiditySeconds', ],
                'refreshTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'refreshTokenValiditySeconds', ],
                'multiTenant' => [ 'type' => 'boolean', 'locationName' => 'multiTenant', ],
                'secretUpdateTime' => [ 'type' => 'long', 'locationName' => 'secretUpdateTime', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
            ],
        ],
        'CreateAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'clientId' => [ 'type' => 'string', 'locationName' => 'clientId', ],
                'clientName' => [ 'type' => 'string', 'locationName' => 'clientName', ],
                'tokenEndpointAuthMethod' => [ 'type' => 'string', 'locationName' => 'tokenEndpointAuthMethod', ],
                'grantTypes' => [ 'type' => 'string', 'locationName' => 'grantTypes', ],
                'responseTypes' => [ 'type' => 'string', 'locationName' => 'responseTypes', ],
                'redirectUris' => [ 'type' => 'string', 'locationName' => 'redirectUris', ],
                'clientUri' => [ 'type' => 'string', 'locationName' => 'clientUri', ],
                'logoUri' => [ 'type' => 'string', 'locationName' => 'logoUri', ],
                'tosUri' => [ 'type' => 'string', 'locationName' => 'tosUri', ],
                'policyUri' => [ 'type' => 'string', 'locationName' => 'policyUri', ],
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'jwksUri' => [ 'type' => 'string', 'locationName' => 'jwksUri', ],
                'jwks' => [ 'type' => 'string', 'locationName' => 'jwks', ],
                'contacts' => [ 'type' => 'string', 'locationName' => 'contacts', ],
                'extension' => [ 'type' => 'string', 'locationName' => 'extension', ],
                'accessTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'accessTokenValiditySeconds', ],
                'refreshTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'refreshTokenValiditySeconds', ],
                'multiTenant' => [ 'type' => 'boolean', 'locationName' => 'multiTenant', ],
                'secretUpdateTime' => [ 'type' => 'long', 'locationName' => 'secretUpdateTime', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
            ],
        ],
        'CreateAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'CreateAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientName' => [ 'type' => 'string', 'locationName' => 'clientName', ],
                'tokenEndpointAuthMethod' => [ 'type' => 'string', 'locationName' => 'tokenEndpointAuthMethod', ],
                'grantTypes' => [ 'type' => 'string', 'locationName' => 'grantTypes', ],
                'redirectUris' => [ 'type' => 'string', 'locationName' => 'redirectUris', ],
                'clientUri' => [ 'type' => 'string', 'locationName' => 'clientUri', ],
                'logoUri' => [ 'type' => 'string', 'locationName' => 'logoUri', ],
                'tosUri' => [ 'type' => 'string', 'locationName' => 'tosUri', ],
                'policyUri' => [ 'type' => 'string', 'locationName' => 'policyUri', ],
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'jwksUri' => [ 'type' => 'string', 'locationName' => 'jwksUri', ],
                'jwks' => [ 'type' => 'string', 'locationName' => 'jwks', ],
                'contacts' => [ 'type' => 'string', 'locationName' => 'contacts', ],
                'extension' => [ 'type' => 'string', 'locationName' => 'extension', ],
                'accessTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'accessTokenValiditySeconds', ],
                'refreshTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'refreshTokenValiditySeconds', ],
                'multiTenant' => [ 'type' => 'boolean', 'locationName' => 'multiTenant', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clientId' => [ 'type' => 'string', 'locationName' => 'clientId', ],
            ],
        ],
        'GetAppsResultShape' => [
            'type' => 'structure',
            'members' => [
                'apps' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApplicationRes', ], ],
            ],
        ],
        'DeleteAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'DeleteAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'UpdateAppResultShape', ],
            ],
        ],
        'CreateAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'clientName' => [ 'type' => 'string', 'locationName' => 'clientName', ],
                'tokenEndpointAuthMethod' => [ 'type' => 'string', 'locationName' => 'tokenEndpointAuthMethod', ],
                'grantTypes' => [ 'type' => 'string', 'locationName' => 'grantTypes', ],
                'redirectUris' => [ 'type' => 'string', 'locationName' => 'redirectUris', ],
                'clientUri' => [ 'type' => 'string', 'locationName' => 'clientUri', ],
                'logoUri' => [ 'type' => 'string', 'locationName' => 'logoUri', ],
                'tosUri' => [ 'type' => 'string', 'locationName' => 'tosUri', ],
                'policyUri' => [ 'type' => 'string', 'locationName' => 'policyUri', ],
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'jwksUri' => [ 'type' => 'string', 'locationName' => 'jwksUri', ],
                'jwks' => [ 'type' => 'string', 'locationName' => 'jwks', ],
                'contacts' => [ 'type' => 'string', 'locationName' => 'contacts', ],
                'extension' => [ 'type' => 'string', 'locationName' => 'extension', ],
                'accessTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'accessTokenValiditySeconds', ],
                'refreshTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'refreshTokenValiditySeconds', ],
                'multiTenant' => [ 'type' => 'boolean', 'locationName' => 'multiTenant', ],
                'secret' => [ 'type' => 'string', 'locationName' => 'secret', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'count' => [ 'type' => 'integer', 'locationName' => 'count', ],
            ],
        ],
        'DeleteAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clientId' => [ 'type' => 'string', 'locationName' => 'clientId', ],
            ],
        ],
        'GetAppsResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAppsResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'GetAppResponseShape' => [
            'type' => 'structure',
            'members' => [
                'result' =>  [ 'shape' => 'GetAppResultShape', ],
                'requestId' => [ 'type' => 'string', 'locationName' => 'requestId', ],
            ],
        ],
        'UpdateAppResultShape' => [
            'type' => 'structure',
            'members' => [
                'clientId' => [ 'type' => 'string', 'locationName' => 'clientId', ],
                'clientName' => [ 'type' => 'string', 'locationName' => 'clientName', ],
                'tokenEndpointAuthMethod' => [ 'type' => 'string', 'locationName' => 'tokenEndpointAuthMethod', ],
                'grantTypes' => [ 'type' => 'string', 'locationName' => 'grantTypes', ],
                'responseTypes' => [ 'type' => 'string', 'locationName' => 'responseTypes', ],
                'redirectUris' => [ 'type' => 'string', 'locationName' => 'redirectUris', ],
                'clientUri' => [ 'type' => 'string', 'locationName' => 'clientUri', ],
                'logoUri' => [ 'type' => 'string', 'locationName' => 'logoUri', ],
                'tosUri' => [ 'type' => 'string', 'locationName' => 'tosUri', ],
                'policyUri' => [ 'type' => 'string', 'locationName' => 'policyUri', ],
                'scope' => [ 'type' => 'string', 'locationName' => 'scope', ],
                'jwksUri' => [ 'type' => 'string', 'locationName' => 'jwksUri', ],
                'jwks' => [ 'type' => 'string', 'locationName' => 'jwks', ],
                'contacts' => [ 'type' => 'string', 'locationName' => 'contacts', ],
                'extension' => [ 'type' => 'string', 'locationName' => 'extension', ],
                'accessTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'accessTokenValiditySeconds', ],
                'refreshTokenValiditySeconds' => [ 'type' => 'integer', 'locationName' => 'refreshTokenValiditySeconds', ],
                'multiTenant' => [ 'type' => 'boolean', 'locationName' => 'multiTenant', ],
                'secretUpdateTime' => [ 'type' => 'long', 'locationName' => 'secretUpdateTime', ],
                'updateTime' => [ 'type' => 'long', 'locationName' => 'updateTime', ],
                'createTime' => [ 'type' => 'long', 'locationName' => 'createTime', ],
                'account' => [ 'type' => 'string', 'locationName' => 'account', ],
                'userType' => [ 'type' => 'string', 'locationName' => 'userType', ],
            ],
        ],
        'GetAppRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'clientId' => [ 'type' => 'string', 'locationName' => 'clientId', ],
            ],
        ],
    ],
];
