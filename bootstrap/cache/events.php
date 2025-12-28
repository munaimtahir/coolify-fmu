<?php return array (
  'App\\Providers\\EventServiceProvider' => 
  array (
    'App\\Events\\CloudflareTunnelChanged' => 
    array (
      0 => 'App\\Listeners\\CloudflareTunnelChangedNotification@handle',
    ),
    'App\\Events\\ProxyStatusChanged' => 
    array (
      0 => 'App\\Listeners\\ProxyStatusChangedNotification@handle',
    ),
    'SocialiteProviders\\Manager\\SocialiteWasCalled' => 
    array (
      0 => 'SocialiteProviders\\Azure\\AzureExtendSocialite@handle',
      1 => 'SocialiteProviders\\Authentik\\AuthentikExtendSocialite@handle',
      2 => 'SocialiteProviders\\Clerk\\ClerkExtendSocialite@handle',
      3 => 'SocialiteProviders\\Discord\\DiscordExtendSocialite@handle',
      4 => 'SocialiteProviders\\Google\\GoogleExtendSocialite@handle',
      5 => 'SocialiteProviders\\Infomaniak\\InfomaniakExtendSocialite@handle',
      6 => 'SocialiteProviders\\Zitadel\\ZitadelExtendSocialite@handle',
    ),
  ),
);