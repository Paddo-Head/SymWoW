SymWoW
========================

Welcome to SymWoW - a fully-functional Symfony2 application
that you can use as the skeleton for your WoW EMU server(s).

This document contains information on how to download, install, and start
using Symfony. For a more detailed explanation, see the [Installation][1]
chapter of the Symfony Documentation.

1) Installing the Standard Edition
----------------------------------

1. Make sure you added php.exe to your system variables so you can run php as a command.
2. Run the following command in the project root: "php composer.phar update".
3. Run the following command in the project root: "php composer.phar install".
3. In your browser, navigate to: "127.0.0.1/your_SymWoW_root_dir/web/config.php";

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

Congratulations! You're now ready to use SymWoW.

From the `config.php` page, click the "Bypass configuration and go to the
Welcome page" link to load up your first SymWoW page.

You can also use a web-based configurator by clicking on the "Configure your
Symfony Application online" link of the `config.php` page.

What's inside?
---------------
(To be developed...)
Login page
Registration page
Vote system
Donation system

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!