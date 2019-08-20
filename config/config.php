<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Blockchain Username
    |--------------------------------------------------------------------------
    |
    | The blockchain wallet id.
    |
     */
    'wallet' => env('BLOCKCHAIN_WALLET'),

    /*
    |--------------------------------------------------------------------------
    | Blockchain Password
    |--------------------------------------------------------------------------
    |
    | The blockchain wallet password.
    |
     */
    'password' => env('BLOCKCHAIN_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | Blockchain Host
    |--------------------------------------------------------------------------
    |
    | The host name of the server which the blockchain-wallet-service is running
    | on.
    |
     */
    'host' => env('BLOCKCHAIN_HOST', 'localhost'),

    /*
    |--------------------------------------------------------------------------
    | Blockchain Port
    |--------------------------------------------------------------------------
    |
    | The port number the blockchain-wallet-service is running on.
    |
     */
    'port' => env('BLOCKCHAIN_PORT', 3000),

    /*
    |--------------------------------------------------------------------------
    | Blockchain Secure
    |--------------------------------------------------------------------------
    |
    | If the blockchain-wallet-service connection uses SSL. (HTTPS)
    |
     */
    'secure' => env('BLOCKCHAIN_SECURE', false),

];
