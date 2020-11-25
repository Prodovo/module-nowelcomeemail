# No Welcome Email - Magento 2 Module

This module as simple as it is will allow you to disable emails on new customer registration through out magento.
 
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [FAQ](#markdown-header-faq)



## Installation

### Type 1: Zip file

 - Unzip the zip file in `app/code/Prodovo/NoWelcomeEmail`
 - Enable the module by running `php bin/magento module:enable Prodovo_NoWelcomeEmail`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require imageineonline/module-nowelcomeemail`
 - enable the module by running `php bin/magento module:enable Prodovo_NoWelcomeEmail`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Disable Welcome Email (customer/create_account/disable_welcome_email)


## FAQ

###### Q. WIll this work on import either by the API or the backend admin panel?
##### A. Yes, this has been tested using all methods of account creation.

###### Q. I am not seeing the option within the customer section in the system configuration section
##### A. This is down to cache please run `bin/magento cache:clean` 



