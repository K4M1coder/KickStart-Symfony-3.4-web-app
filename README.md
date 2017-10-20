KickStart Symfony 3.4 web-app
========================
######  with UsersManagement Administration and more

this is a simple way to start a new web-app based on symfony 3.4 including advanced bundles  
this project require PHP 7.1 to work

What's inside?
--------------

The Symfony Standard Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;
  * Twig as the only configured template engine;
  * Doctrine ORM/DBAL;
  * Swiftmailer;
  * Annotations enabled for everything.
  
It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle
  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability
  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM
  * [**TwigBundle**][8] - Adds support for the Twig templating engine
  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component
  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails
  * [**MonologBundle**][11] - Adds support for Monolog, a logging library
  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar
  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions
  * [**SensioGeneratorBundle**][13] (in dev env) - Adds code generation
    capabilities
  * [**WebServerBundle**][14] (in dev env) - Adds commands for running applications
    using the PHP built-in web server
  * **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component
    integration

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

The following bundles have been added and preconfigured with their very basic configuration
I have just followed documentation for each and solved compatibility issues
Here they are...

  * [**SymfonyAssetic-bundle**][15] - Assetic combines two major ideas: assets and filters. This allows a separation between the asset files stored in the application and the files actually presented to the user.
  * [**FOSJsRoutingBundle**][16] - This bundle allows to expose Symfony Routes to JavaScript, so you can generate relative or absolute URLs in the browser using the same routes as in the backend.
  * [**FOSRest-bundle**][17] - This bundle is just a tool to help you in the job of creating a REST API with Symfony.
  * [**FOSUserBundle**][18] - persist and fetch the users in your system to and from a database
  * [**StofDoctrineExtensionsBundle**][19] - Provides integration for DoctrineExtensions for your Symfony2 Project.
  * [**KnpMenuBundle**][20] - The KnpMenuBundle integrates the KnpMenu PHP library with Symfony. This means easy-to-implement and feature-rich menus in your Symfony application!
  * [**AvanzuAdminThemeBundle**][21] - Admin Theme based on the AdminLTE Template for easy integration into symfony. This bundle integrates several commonly used javascripts and the awesome AdminLTE Template.
  * [**SonataCoreBundle**][22] - Provides base classes used by Sonata's Bundles.
  * [**SonataBlockBundle**][23] - Handle rendering of block element. A block is a small unit with its own logic and templates. A block can be inserted anywhere in a current template.
  * [**SonataEasyExtendsBundle**][24] - EasyExtends is a tool for generating a valid bundle structure from a Vendor Bundle.
  * [**SonataDoctrineORMAdminBundle**][25] - Integrates the Doctrine2 ORM into the Admin Bundle
  * [**SonataAdminBundle**][26] - The missing Symfony2 Admin Generator
  * [**SonataUserBundle**][28] - Enhanced user management with FOS/User integration
  * [**nelmio api-doc-bundle**][27] - The NelmioApiDocBundle bundle allows you to generate a decent documentation for your APIs.
  * [**NelmioCorsBundle**][29] - The NelmioCorsBundle allows you to send Cross-Origin Resource Sharing headers with ACL-style per-URL configuration.  
  * [**JMSSerializerBundlee**][30] - JMSSerializerBundle allows you to serialize your data into a requested output format such as JSON, XML, or YAML, and vice versa  
  * [**LexikJWTAuthenticationBundle**][31] - This bundle provides JWT (Json Web Token) authentication for your Symfony API.  
  * [**DoctrineFixturesBundle**][32] - Fixtures are used to load a "fake" set of data into a database that can then be used for testing or to help give you some interesting data while you're developing your application.  
  
requirements
 --------------

* you need node.js installed  
  * `npm install -g bower` if not installed  
  * `npm install -g grunt` if not installed  
  * `npm install -g uglifyjs` if not installed  
  * `npm install -g uglifycss` if not installed  
* you need to have Git installed  
* you need to have curl installed  
* you need to have openssh installed and variable OPENSSH_CONF defined to openssh binary   
* you need PHP>7.1 with curl.cainfo defined in your php.ini  
* you need a database : either MySQL, PostgresSQL or ORACLE can be used  
* you need a web server or use php since symfony comes with a built in server ``php bin/console server:start``

Installation
 -----------
 * download and extract the archive or clone this repo  
 * open a terminal with administrative rights on the root folder of the project 
 
Configuration
-------------
* generate the ssh Key
````bash
$ mkdir -p var/jwt # For Symfony3+, no need of the -p option
$ openssl genrsa -out var/jwt/private.pem -aes256 4096
$ openssl rsa -pubout -in var/jwt/private.pem -out var/jwt/public.pem
````
* execute `composer install -o` it will deploy the project and fetch all dependancies  
during the installation you will be asked to provide the passphrase you used to generate ssh key at the jwt_key_pass_phrase field


if you use apache check the virtual host config and make sure you have those settings  
````apache-config
RewriteEngine On
RewriteCond %{HTTP:Authorization} ^(.*)
RewriteRule .* - [e=HTTP_AUTHORIZATION:%1]
````

Execution
---------- 
 * configure your web server for production or use the builtin server for developement and tests
 * navigate to your project url with you favorite browser
   
Enjoy!

[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.4/doctrine.html
[8]:  https://symfony.com/doc/3.4/templating.html
[9]:  https://symfony.com/doc/3.4/security.html
[10]: https://symfony.com/doc/3.4/email.html
[11]: https://symfony.com/doc/3.4/logging.html
[13]: https://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html
[14]: https://symfony.com/doc/current/setup/built_in_web_server.html

[15]: https://symfony.com/doc/current/assetic/asset_management.html
[16]: https://symfony.com/doc/master/bundles/FOSJsRoutingBundle/index.html
[17]: https://symfony.com/doc/master/bundles/FOSRestBundle/index.html
[18]: https://symfony.com/doc/current/bundles/FOSUserBundle/index.html
[19]: https://symfony.com/doc/master/bundles/StofDoctrineExtensionsBundle/index.html
[20]: https://symfony.com/doc/master/bundles/KnpMenuBundle/index.html
[21]: https://github.com/avanzu/AdminThemeBundle
[22]: https://sonata-project.org/bundles/core/master/doc/index.html
[23]: https://sonata-project.org/bundles/block/master/doc/index.html
[24]: https://sonata-project.org/bundles/easy-extends/master/doc/index.html
[25]: https://sonata-project.org/bundles/doctrine-orm-admin/master/doc/index.html
[26]: https://sonata-project.org/bundles/admin/master/doc/index.html
[27]: https://symfony.com/doc/current/bundles/NelmioApiDocBundle/index.html
[28]: https://sonata-project.org/bundles/user/master/doc/index.html
[29]: https://github.com/nelmio/NelmioCorsBundle
[30]: http://jmsyst.com/bundles/JMSSerializerBundle
[31]: https://github.com/lexik/LexikJWTAuthenticationBundle/blob/master/Resources/doc/index.md#getting-started
[32]: https://symfony.com/doc/master/bundles/DoctrineFixturesBundle/index.html  