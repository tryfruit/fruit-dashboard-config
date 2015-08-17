<?php

return array(
    /* Database related  variables */
    'DB_NAME'  => 'fruitdashboarddb',
    'DB_USER'  => 'FDRoot',
    'DB_PASS'  => 'FDPassword',

    /* General app related variables */
    'APP_URL'        => 'http://localhost:8001',
    'APP_SECRET_KEY' => 'fon4ECb12pD0d8AkaW39t0eCsbkD1D61',

    /* SMTP and mail settings */
    'SMTP_HOST'    => 'smtp.local.dev',
    'SMTP_PORT'    => 587,
    'SMTP_USER'    => 'hello@local.dev',
    'SMTP_PASS'    => 'smtppassword',
    'DEFAULT_FROM' => array('address' => 'hello@local.dev', 
                            'name'    => 'Local Development'),

    /* Google Analytics and event tracking */
    'GOOGLE_TRACKING_CODE' => 'UA-XXXXXXXX-XX',
    
    /* Intercom IO tracking app ID */
    'INTERCOM_APP_ID'  => 'a1b2c3d4',
    'INTERCOM_API_KEY' => 'the-intercom-api-secret-key-here',

    /* Mixpanel token */
    'MIXPANEL_TOKEN' => 'your-mixpanel-token-here',

    /* Braintree payment */    
    'BRAINTREE_ENVIRONMENT'     => 'sandbox',
    'BRAINTREE_MERCHANT_ID'     => 'your-braintree-merchant-id',
    'BRAINTREE_PUBLIC_KEY'      => 'your-braintree-public-key',
    'BRAINTREE_PRIVATE_KEY'     => 'your-braintree-private-key',
    'BRAINTREE_CLIENTSIDE_KEY'  => 'your-braintree-cse-key',
    'BRAINTREE_PREMIUM_PLAN_ID' => 'your-braintree-premium-plan-id',

    /* Stripe Oauth connection */
    'STRIPE_CONNECT_URI'      => 'https://connect.stripe.com/oauth/authorize',
    'STRIPE_ACCESS_TOKEN_URI' => 'https://connect.stripe.com/oauth/token',
    'STRIPE_SECRET_KEY'       => 'your-stripe-api-secret-key',
    'STRIPE_CLIENT_ID'        => 'your-stripe-client-ID',

    /* Twitter Oauth connection */
    'TWITTER_CONSUMER_KEY'      => 'your-twitter-consumer-key-here',
    'TWITTER_CONSUMER_SECRET'   => 'your-twitter-consumer-secret-here',

    /* Google Oauth connection */
    'GOOGLE_SECRET_JSON'    => 'app/config/local/client_secret.json',

    /* Quote widget | Quote feed */
    'QUOTE_FEED_CONNECT_URI'                        => 'http://spreadsheets.google.com/feeds/list/',
    'QUOTE_FEED_SPREADSHEET_EN_INSPIRATIONAL_URI'   => '<spreadsheet-token>/<worksheet-id>/public/values?alt=json',
    'QUOTE_FEED_SPREADSHEET_EN_FUNNY_URI'           => '<spreadsheet-token>/<worksheet-id>/public/values?alt=json',
    'QUOTE_FEED_SPREADSHEET_EN_FIRST_LINE_URI'      => '<spreadsheet-token>/<worksheet-id>/public/values?alt=json',
);