<?php

return [
    /*
     * Your Quick Base domain, for example demo.quickbase.com
     */
    'default_realm_hostname' => env('QUICKBASE_DEFAULT_REALM', null),

    /*
     * User agent sent along with requests
     */
    'default_user_agent' => null,

    /*
     * Your default permanent user token to be sent along as authorization for requests.
     */
    'user_token' => env('QUICKBASE_DEFAULT_USER_TOKEN', null),
];
