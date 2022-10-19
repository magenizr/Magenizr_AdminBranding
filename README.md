# Admin Branding
Create a unique Magento admin login by adding your company logo or a custom text ( HTML support ) underneath the login such as `Implemented by Your Company Ltd` or above the Magento navigation within the backend.

![Magenizr AdminBranding - Backend Login](https://images2.imgbox.com/5f/43/XpwjZvRQ_o.png)

## System Requirements
- Magento 2.3.x, 2.4.x
- PHP 5.6.x, 7.x

## Installation (Composer)

1. Update your composer.json `composer require "magenizr/magento2-adminbranding":"1.0.1" --no-update`
2. Install dependencies and update your composer.lock `composer update --lock`

```
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)              
Package operations: 1 install, 0 updates, 0 removals
  - Installing magenizr/magento2-adminbranding (1.0.1): Downloading (100%)         
Writing lock file
Generating autoload files
```

## Installation (Composer 2)

1. Update your composer.json `composer require "magenizr/magento2-adminbranding":"1.0.1" --no-update`
2. Use `composer update magenizr/magento2-adminbranding --no-install` to update your composer.lock file.

```
Updating dependencies
Lock file operations: 1 install, 1 update, 0 removals
  - Locking magenizr/magento2-adminbranding (1.0.1)
```

3. And then `composer install` to install the package.

```
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Package operations: 1 install, 0 update, 0 removals
  - Installing magenizr/magento2-adminbranding (1.0.1): Extracting archive
```

4. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_AdminBranding --clear-static-content
php bin/magento setup:upgrade
```

## Installation (Manually)
1. Download the code.
2. Extract the downloaded tar.gz file. Example: `tar -xzf Magenizr_AdminBranding_1.0.1.tar.gz`.
3. Copy the code into `./app/code/Magenizr/AdminBranding/`.
4. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_AdminBranding --clear-static-content
php bin/magento setup:upgrade
```

## Features
* Enable / Disable module
* Upload your logo for login form or above the navigation
* Add a custom text ( HTML support ) underneath the login form

## Usage
Go to `Stores > Configuration > Advanced > Admin > Admin Branding` and enable the module. Upload your company logo for the login form or above the sidebar. An additional text can be added and enabled below the login form.

## Support
If you experience any issues, don't hesitate to open an issue on [Github](https://github.com/magenizr/Magenizr_AdminBranding/issues). For a custom build, contact us on [Magento Marketplace](https://marketplace.magento.com/partner/magenizr).

## Purchase
This module is available for free on [GitHub](https://github.com/magenizr).

## Contact
Follow us on [GitHub](https://github.com/magenizr), [Twitter](https://twitter.com/magenizr) and [Facebook](https://www.facebook.com/magenizr).

## History
===== 1.0.1 =====
* Cleanup various files to follow coding standard (EQP, ECG)

===== 1.0.0 =====
* Stable version

## License
[OSL - Open Software Licence 3.0](https://opensource.org/licenses/osl-3.0.php)
