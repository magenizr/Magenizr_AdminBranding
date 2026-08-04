[![Latest Stable Version](https://poser.pugx.org/magenizr/magento2-adminbranding/v)](https://packagist.org/packages/magenizr/magento2-adminbranding) [![Total Downloads](https://poser.pugx.org/magenizr/magento2-adminbranding/downloads)](https://packagist.org/packages/magenizr/magento2-adminbranding) [![Latest Unstable Version](https://poser.pugx.org/magenizr/magento2-adminbranding/v/unstable)](https://packagist.org/packages/magenizr/magento2-adminbranding) [![License](https://poser.pugx.org/magenizr/magento2-adminbranding/license)](https://packagist.org/packages/magenizr/magento2-adminbranding) [![PHP Version Require](https://poser.pugx.org/magenizr/magento2-adminbranding/require/php)](https://packagist.org/packages/magenizr/magento2-adminbranding)

# Admin Branding
Create a unique Magento admin login by adding your company logo or a custom text ( HTML support ) underneath the login such as `Implemented by Your Company Ltd` or above the Magento navigation within the backend.

![Magenizr AdminBranding - Backend](https://images2.imgbox.com/0c/ef/BZK91Nqb_o.png)
![Magenizr AdminBranding - Backend](https://images2.imgbox.com/e6/5c/5lgJi5va_o.png)

## System Requirements
- Magento 2.3.x, 2.4.x
- PHP 7.x, 8.x

## Installation (Composer 2)

1. Update your composer.json `composer require "magenizr/magento2-adminbranding":"^1.0" --no-update`
2. Use `composer update magenizr/magento2-adminbranding --no-install` to update your composer.lock file.

```
Updating dependencies
Lock file operations: 1 install, 1 update, 0 removals
  - Locking magenizr/magento2-adminbranding (1.1.0)
```

3. And then `composer install` to install the package.

```
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Package operations: 1 install, 0 update, 0 removals
  - Installing magenizr/magento2-adminbranding (1.1.0): Extracting archive
```

4. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_AdminBranding --clear-static-content
```

## Installation (Manually)
1. Download the code.
2. Extract the downloaded tar.gz file. Example: `tar -xzf Magenizr_AdminBranding_1.1.0.tar.gz`.
3. Copy the code into `./app/code/Magenizr/AdminBranding/`.
4. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_AdminBranding --clear-static-content
```

## Features
* Enable / Disable module
* Upload your logo for login form or above the navigation
* Add a custom text ( HTML support ) underneath the login form

## Usage
Go to `Stores > Configuration > Advanced > Admin > Admin Branding` and enable the module. Upload your company logo for the login form or above the sidebar. An additional text can be added and enabled below the login form.

## Support
If you experience any issues, don't hesitate to open an issue on [Github](https://github.com/magenizr/Magenizr_AdminBranding/issues).

## History
===== 1.1.0 =====
* PHP 8.2/8.3 compatibility: declared protected class properties explicitly
* Added /* @noEscape */ annotation to template output
* Added php version constraint to composer.json
* Updated homepage URL to https://magenizr.com.au

===== 1.0.2 =====
* 2.4.6 compatibility tested
* Fix styling to support small logos
* Code improvements
* Setup version removed from module.xml
* PHP 5.6.x compatibility removed

===== 1.0.1 =====
* Cleanup various files to follow coding standard (EQP, ECG)

===== 1.0.0 =====
* Stable version

## License
[OSL - Open Software Licence 3.0](https://opensource.org/licenses/osl-3.0.php)

---

## About [Magenizr](https://magenizr.com.au/)

Built and maintained by [Magenizr](https://magenizr.com.au/) — an Australian [Adobe Commerce & Magento development agency](https://magenizr.com.au/services/adobe-commerce/) based in Bendigo, Victoria. We build custom Magento modules, handle platform migrations, and provide ongoing support for businesses across [Melbourne](https://magenizr.com.au/web-development-melbourne/), Sydney, Brisbane and the DACH region.

- [Our Services](https://magenizr.com.au/services/adobe-commerce/) — Custom modules, migrations, support
- [Book a Free Consultation](https://magenizr.com.au/book/) — 30-minute call, no obligation
- [All Open-Source Modules](https://github.com/magenizr) — Our full collection on GitHub

## Über [Magenizr](https://magenizr.com.au/de/)

Entwickelt und gepflegt von [Magenizr](https://magenizr.com.au/de/) — einer australischen [Magento & Adobe Commerce Agentur](https://magenizr.com.au/de/services/adobe-commerce/) mit Fokus auf die DACH-Region. Wir entwickeln individuelle Magento-Module, übernehmen Plattform-Migrationen und bieten laufenden Support für Unternehmen in Berlin, Hamburg, München, Frankfurt, Köln, Stuttgart, Düsseldorf, Wien, Graz, Salzburg, Zürich, Basel und Bern.

- [Unsere Leistungen](https://magenizr.com.au/de/services/adobe-commerce/) — Module, Migrationen, Support
- [Kostenlose Erstberatung](https://magenizr.com.au/de/book/) — 30 Minuten, unverbindlich
- [Alle Open-Source-Module](https://github.com/magenizr) — Unsere komplette Sammlung auf GitHub
