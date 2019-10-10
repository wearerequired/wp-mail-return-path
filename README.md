# WP Mail Return Path

Sets sender/return path for mail if not set to prevent auto-filling it with a server name which isn't authorized to send emails.

## Installation

The package type is `wordpress-muplugin`. Example of a `composer.json`:

```json
{
  "name": "wearerequired/something",
  "description": "required.com",
  "license": "GPL-2.0-or-later",
  "authors": [
    {
      "name": "required gmbh",
      "email": "info@required.com"
    }
  ],
  "require": {
    "php": ">=5.6",
    "koodimonni/composer-dropin-installer": "dev-master",
    "johnpbloch/wordpress": "~4.9",
    "wearerequired/wp-mail-return-path": "^1.0"
  },
  "extra": {
    "wordpress-install-dir": "wordpress/wp",
    "installer-paths": {
      "wordpress/content/plugins/{$name}/": [
        "type:wordpress-plugin"
      ],
      "vendor/{$vendor}/{$name}/": [
        "type:wordpress-muplugin"
      ],
      "wordpress/content/themes/{$name}/": [
        "type:wordpress-theme"
      ]
    },
    "dropin-paths": {
      "wordpress/content/mu-plugins/": [
        "type:wordpress-muplugin"
      ]
    }
  },
  "minimum-stability": "dev",
  "prefer-stable": true
}
```
