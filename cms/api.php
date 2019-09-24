<?php
return [
    'app' => [
        'env' => 'production',
        'timezone' => 'America/New_York'
    ],
    'settings' => [
        'logger' => [
            'path' => __DIR__ . '/../logs',
        ],
    ],
    'database' => [
        'type' => 'mysql',
        'host' => 'host.docker.internal',
        'port' => 3306,
        'name' => 'CMS',
        'username' => 'root',
        'password' => 'root',
        'engine' => 'InnoDB',
        'charset' => 'utf8mb4',
        // When using unix socket to connect to the database the host attribute should be removed
        // 'socket' => '/var/lib/mysql/mysql.sock',
        //'socket' => '',
    ],
    'cache' => [
        'enabled' => false,
        'response_ttl' => 3600, // seconds
        // 'pool' => [
        //    'adapter' => 'apc'
        // ],
        // 'pool' => [
        //    'adapter' => 'apcu'
        // ],
        // 'pool' => [
        //    'adapter' => 'filesystem',
        //    'path' => '../cache/', // relative to the api directory
        // ],
        // 'pool' => [
        //    'adapter'   => 'memcached',
        //    //'url' => 'localhost:11211;localhost:11212'
        //    'host'      => 'localhost',
        //    'port'      => 11211
        // ],
        // 'pool' => [
        //    'adapter'   => 'memcache',
        //    'url' => 'localhost:11211;localhost:11212'
        //    //'host'      => 'localhost',
        //    //'port'      => 11211
        //],
        // 'pool' => [
        //    'adapter'   => 'redis',
        //    'host'      => 'localhost',
        //    'port'      => 6379
        // ],
    ],
    'storage' => [
        'adapter' => 'local',
        // The storage root is the directus root directory.
        // All path are relative to the storage root when the path is not starting with a forward slash.
        // By default the uploads directory is located at the directus public root
        // An absolute path can be used as alternative.
        'root' => 'public/uploads/_/originals',
        // This is the url where all the media will be pointing to
        // here is where Directus will assume all assets will be accessed
        // Ex: (yourdomain)/uploads/_/originals
        'root_url' => '/uploads/_/originals',
        // Same as "root", but for the thumbnails
        'thumb_root' => 'public/uploads/_/thumbnails',
        //   'key'    => 's3-key',
        //   'secret' => 's3-secret',
        //   'region' => 's3-region',
        //   'version' => 's3-version',
        //   'bucket' => 's3-bucket',
        //   'options' => ['ACL' => 'public-read', 'Cache-Control' => 'max-age=604800']
        // Set custom S3 endpoint
        //   'endpoint' => 's3-endpoint',
        //   'OSS_ACCESS_ID' => 'aliyun-oss-id',
        //   'OSS_ACCESS_KEY' => 'aliyun-oss-key',
        //   'OSS_ENDPOINT' => 'aliyun-oss-endpoint',
        //   'OSS_BUCKET' => 'aliyun-oss-bucket'
        // Use an internal proxy for downloading all files
        //'proxy_downloads' => false,
    ],
    'mail' => [
        'default' => [
            'transport' => 'sendmail',
            'from' => 'admin@example.com'
        ],
    ],
    'cors' => [
        'enabled' => true,
        'origin' => ['*'],
        'methods' => [
            'GET',
            'POST',
            'PUT',
            'PATCH',
            'DELETE',
            'HEAD',
        ],
        'headers' => [],
        'exposed_headers' => [],
        'max_age' => null, // in seconds
        'credentials' => false,
    ],
    'rate_limit' => [
        'enabled' => false,
        'limit' => 100, // number of request
        'interval' => 60, // seconds
        'adapter' => 'redis',
        'host' => '127.0.0.1',
        'port' => 6379,
        'timeout' => 10
    ],
    'hooks' => [
        'actions' => [],
        'filters' => [],
    ],
    'feedback' => [
        'token' => 'a-kind-of-unique-token',
        'login' => true
    ],
    // These tables will not be loaded in the directus schema
    'tableBlacklist' => [],
    'auth' => [
        'secret_key' => '-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEAsFMc5ma39MI2KYuM7wSE6s68cNK4KZKMjpwRNiaN+wTwbciD
4qfovLPH0I+XIWb213wP5cptL6qUIFkkUFtx57+4ypDsdDG/l6JSKQ0ImCJuSZOH
Zt8DvYS0E4XBgFFpKoNW7oC0Nl5QLRvsqfjqXWH6R/7VwnrnSf5fPq5ElQQa1bif
XS4YgVLjNISVP2y8IlmRj8mqClCl6LuXC0zQKtd9EUSGJlSvGbPBGshEq7qIz8AV
2NN7HTbZWe+z5aJtDKm4AhMtgkcLXoQptaXxdeG3ep4E4q0RcukcNNdWFa9TuKY0
AETIGy+gmFQIAW/UqqRNFBjT+Eqd3EfJcf/l3wIDAQABAoIBAGSnzYOpd7H9fDXT
OCzqA4aXZfNyFzeENUDjzt9+uuZlN2s0YDVvbOjsKFDi539l69uvMtQW7qWbVtvw
h05oJWoKhE7+1DyweZLyUrykeBeA8DyIP292OAhkTPgoDwJVdxeRynp0dmvjAxn9
KukM851DZUDcNOLEjmwrDewWR4hYzwH1v8e7hIW4ph80R53deNFE+3ZImkPyzlpC
DhblAgKt5OmEukHQoaBkJau9b7lz9E8RnrqTbGoYkguyD1RIZaWc9hgY+d2TDsoF
Uyl3Yp5ZgmMnuvrknWV1o5b9MAdnmm4Tcg2BA8AN8FmMZmhJ09hCTXuyP5qD5qcy
UH8m58ECgYEA8TatspoV2OqhVZc05lGWKBrAQDVGZ7wYD64bXybNvt2E2rPdGWCg
hSBFcyMxZygM3gDdj7BUfAyX5Dvz/pkTYcnyogPXpWFMLnDesmHBfBDw2PpAhetc
Qoybuo+o+C+f5IG5ekWnmfRIEQteEb3uOu4Ua9+LOu7X9PWMYrp5EQcCgYEAuyIk
408aBpgN2VLKjzEGu4/WwqyR+xUsOhBcxij1B6tssbJTHgJBe9VtDwrPTshhrG4B
jOPczaZqRH2r0bis+Xuu/HLkx6qmM8vQrTqxmlVIq4FBA/+AmIbd1ny/vYdOBOT9
o8xiUwNklpalG8/V0eMq7IXtuqumthKn3ErQRmkCgYEAl3dvUSSirWiAUJ+3bx0y
PhK2QFtzz3X0YfxBYdma/sxZPYAOSX48rfvawHcL8avbkJhYiH8APjkmNAJVr7zt
x80pGAVzp3zWep8TqE3sUnzM0GMsmyt07rEepOLLBrXZIIM5NgeBPBKCInnR4zAx
5T1VA3wHEMWkRETgl6pilYcCgYAIE/A9s7Nu529pmy5NQhOFUy81FhfzG7XeB8jJ
cQkqvJajkQwPdo93Ff5wMMpEH1hABjug5lEou29I55fcJLmqx1EFarw/djlYcQrf
/3GdNOM/LAQvdP8LFn9K+/WW69lNUsk0IeV4qePUsEoOSklzlvfKX/mkHjbDE0kV
tFELSQKBgEilVKjurnp9jjC6S3moR5SNVyVVK8QwqsAwv/jPLVuVQhkDjLl0Ce9C
ITDo0ZhBOK73jUpxu6+hOzOIUaRi8VKVvcCiOxLQ4LlQpaIWb+ZHmF+malHPkOdN
aOR0aKXWlRmHny/0rcCklRh8fCc/kQE6kkMahU6AmjllA7HOumSr
-----END RSA PRIVATE KEY-----',
        'public_key' => '-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsFMc5ma39MI2KYuM7wSE
6s68cNK4KZKMjpwRNiaN+wTwbciD4qfovLPH0I+XIWb213wP5cptL6qUIFkkUFtx
57+4ypDsdDG/l6JSKQ0ImCJuSZOHZt8DvYS0E4XBgFFpKoNW7oC0Nl5QLRvsqfjq
XWH6R/7VwnrnSf5fPq5ElQQa1bifXS4YgVLjNISVP2y8IlmRj8mqClCl6LuXC0zQ
Ktd9EUSGJlSvGbPBGshEq7qIz8AV2NN7HTbZWe+z5aJtDKm4AhMtgkcLXoQptaXx
deG3ep4E4q0RcukcNNdWFa9TuKY0AETIGy+gmFQIAW/UqqRNFBjT+Eqd3EfJcf/l
3wIDAQAB
-----END PUBLIC KEY-----',
        'social_providers' => [
            // 'okta' => [
            //     'client_id' => '',
            //     'client_secret' => '',
            //     'base_url' => 'https://dev-000000.oktapreview.com/oauth2/default'
            // ],
            // 'github' => [
            //     'client_id' => '',
            //     'client_secret' => ''
            // ],
            // 'facebook' => [
            //     'client_id'          => '',
            //     'client_secret'      => '',
            //     'graph_api_version'  => 'v2.8',
            // ],
//             'google' => [
//                 'client_id'       => '',
//                 'client_secret'   => '',
//                 'hosted_domain'   => '*',
//                 // Uses OpenIDConnect to fetch the email instead of using the Google+ API
//                 // Disabling the OIDC Mode, requires you to enable the Google+ API otherwise it will fail
//                 'use_oidc_mode'   => true,
//             ],
            // 'twitter' => [
            //     'identifier'   => '',
            //     'secret'       => ''
            // ]
        ]
    ],
];
