# UI for parked domains (ui-parked-domain) v1.1.0

Placeholder content for domains without content

## Configuration

### Set the email address for admins

open the file "/public/.htaccess" and change this line

```htaccess
SetEnv SERVER_ADMIN email@domain.tld
```

### Set the default language

open the file "/public/.htaccess" and change this line

```htaccess
DefaultLanguage de-DE
```

### Set the redirect domain to https

open the file "/public/.htaccess" and change this lines

```htaccess
RewriteRule (.*) https://domain.tld%{REQUEST_URI} [R=301,L]
RewriteCond %{HTTP_HOST} !^domain\.tld$ [NC]
RewriteRule (.*) https://domain.tld%{REQUEST_URI} [R=301,L]
```

### Set the style

open the file "/src/style.scss" and change the style

```scss
$page-bg-color: #373f43;
$title-font-color: #ffffff;
$title-font-size: 24px;
```

after changing the style, render the style.css file and replace the new "style.css" file in the "/public/style" folder with the existing file.

### Set the content

open the file "/public/config.php" and change the content values

```php
public static $domain_name = 'domain.tld';
public static $page_title = 'domain.tld';
```

## How to use

### publish on webserver

upload the contents of the "/public" directory to your public server directory

## Requirements

PHP 5 or higher, Apache2 (with modules: mod_rewrite)

## License

This bundle is under the MIT license.
