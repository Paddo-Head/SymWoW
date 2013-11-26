SymWoW
========================

Welcome to SymWoW - a fully-functional Symfony2 application
that you can use as the skeleton for your WoW EMU server(s).

This document contains information on how to download, install, and start
using Symfony. For a more detailed explanation, see the [Installation][1]
chapter of the Symfony Documentation.

(Supported frameworks)

Trinity: yes

Arcemu: no

~

1) Installing the Standard Edition
----------------------------------

1. Make sure you added php.exe to your system variables so you can run php as a command.
2. Run the following command in the project root: "php composer.phar update".
3. Run the following command in the project root: "php composer.phar install".
4. In your browser, navigate to: "127.0.0.1/path/to/symwow/web/config.php" and follow the setup.
5. Make sure your auth database exists and run the following
command in the project root: "php app/console doctrine:schema:update --force".
(Symfony requires every table to have a identifying key so we update an auto increment to: "auth.logs" and "auth.ip2nation")


2) Checking your System Configuration
-------------------------------------

Before starting coding, make sure that your local system is properly
configured for Symfony.

Execute the `check.php` script from the command line:

    php app/check.php

The script returns a status code of `0` if all mandatory requirements are met,
`1` otherwise.

Access the `config.php` script from a browser:

    http://localhost/path/to/symfony/app/web/config.php

If you get any warnings or recommendations, fix them before moving on.

3) Browsing the Demo Application
--------------------------------

In your browser, navigate to : "127.0.0.1/path/to/symwow/web/app_dev.php/hello/Paddo-Head".

Congratulations! You're now ready to use SymWoW.

More information about Symfony 2
http://symfony.com/doc/current/book/index.html

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

What's inside?
---------------

Character Entity's

Auth Entity's

Registration system (BETA)
Path: "127.0.0.1/path/to/symwow/web/app_dev.php/register"

Account system (To be developed...)

Vote system (To be developed...)

Donation system (To be developed...)

All libraries and bundles included in the SymWoW are released
under the MIT or BSD license.


Enjoy!