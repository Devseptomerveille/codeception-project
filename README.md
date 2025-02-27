Symfony Demo Application + Codeception Example
========================

This is a fork of the ["Symfony Demo Application"][1].

[Codeception][2] has been added for browser testing.


Requirements
------------

  * PHP 8.1.0 or higher;
  * PDO-SQLite PHP extension enabled;
  * and the [usual Symfony application requirements][3].

Installation
------------

The best way to install this project is with [Composer][4], once it's installed
on your computer to run these commands:

```bash
# ...clone the code repository and install its dependencies
$ git clone https://github.com/sketchings/symfony-codeception-demo.git my_project
$ cd my_project/
$ composer install
```

Usage
-----

There's no need to configure anything before running the application. 

On your local machine, you can run this command to use the built-in PHP web server:

```bash
$ cd my_project/
$ php -S localhost:8000 -t public/
```

Tests
-----

Selenium is required to launch and control browsers from Codeception.
Selenium Server is required to be installed and started before running acceptance tests.

The fastest way of getting Selenium is using selenium-standalone NodeJS Package.
It automatically installs Selenium and all required dependencies and starts server. It requires NodeJS and Java to be installed.

```bash
$ npm install selenium-standalone -g
$ selenium-standalone install
```

Launch this command in a separate terminal:

```bash
$ selenium-standalone start
```

Execute this command to run all tests:

```bash
$ vendor/bin/codecept run
```

Or you can run individual suite, individual file, or individual test:

```bash
$ vendor/bin/codecept run functional
$ vendor/bin/codecept run functional readBlogCest.php
$ vendor/bin/codecept run functional readBlogCest.php:viewListAndLink
```

[1]: https://github.com/symfony/demo
[2]: https://codeception.com/
[3]: https://symfony.com/doc/current/setup.html#technical-requirements
[4]: https://getcomposer.org/
