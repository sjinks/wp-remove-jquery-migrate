# wp-remove-jquery-migrate

Simple WordPress plugin to remove jQuery Migrate from jQuery dependencies.

## Installation

**Via composer**

Run from WordPress root directory

```
composer require wildwolf/ww-remove-jquery-migrate
```

**Traditional way**

Upload the plugin to `wp-content/plugins/`, go to the Admin Dashboard => Plugins and activate the plugin.

## Configuration

The plugin works out of the box, surprise.

There is one hidden configuration constant though: if you add

```
define('WWRJQM_MOVE_JQUERY_TO_FOOTER', true);
```

to your `wp-config.php`, this will move jQuery invocation to the footer.

Please note that this could break some themes and plugins, this is why this option is hidden.
