<?php
/**
 * This is an EXAMPLE configuration file.
 * DO NOT use this file directly - it contains placeholder values.
 * 
 * For the actual deployment, configure:
 * /var/www/nextcloud/config/config.php
 */

$CONFIG = [
    // Database configuration
    'dbtype' => 'mysql',
    'dbname' => 'nextcloud',
    'dbhost' => 'localhost',
    'dbuser' => 'YOUR_DB_USER',
    'dbpassword' => 'YOUR_DB_PASSWORD',
    
    // Trusted domains (replace with your actual domains)
    'trusted_domains' => [
        'YOUR_LOCAL_IP',
        'YOUR_DOMAIN',
        'YOUR_SUBDOMAIN',
    ],
    
    // Overwrite URL for CLI
    'overwrite.cli.url' => 'https://YOUR_PUBLIC_DOMAIN',
    
    // Instance settings
    'instanceid' => 'YOUR_INSTANCE_ID',
    'secret' => 'YOUR_SECRET_KEY',
    
    // Miscellaneous
    'datadirectory' => '/var/www/nextcloud/data',
    'maintenance' => false,
    'theme' => '',
    
    // Memcache settings
    'memcache.local' => '\\OC\\Memcache\\APCu',
];
