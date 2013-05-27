Gaufrette Extras [![Build Status](https://travis-ci.org/K-Phoen/gaufrette-extras.png?branch=master)](https://travis-ci.org/K-Phoen/gaufrette-extras)
=========================

**Gaufrette Exras** is a PHP library providing extra features to the awesome
[Gaufrette](https://github.com/KnpLabs/Gaufrette).


Installation
============

The recommended way to install this library is through composer.

Just create a `composer.json` file for your project:

```json
{
    "require": {
        "kphoen/gaufrette-extras": "dev-master"
    }
}
```

And run these two commands to install it:

```bash
$ wget http://getcomposer.org/composer.phar
$ php composer.phar install
```


Now you can add the autoloader, and you will have access to the library:

```php
require 'vendor/autoload.php';
```


Features
========

URL resolvers
-------------

Resolvers provide a quick and easy way to resolve filesystem entries to a URL.

```php
$resolver = new PrefixResolver('http://www.my-website.com/uploads');
$adapter = new ResolvableAdapter(new LocalAdapter('/tmp'), $resolver);
$filesystem = new ResolvableFilesystem($adapter);

$filesystem->write('myFile.txt', 'Hello I am the new content');

var_dump($filesystem->resolve('myFile.txt')); // 'http://www.my-website.com/uploads/myFile.txt'
```


Tests
=====

To run unit tests, you'll need cURL and a set of dependencies you can install
using Composer:

```bash
php composer.phar install --dev
```

Once installed, just launch the following command:

```bash
./vendor/bin/phpunit
```


License
=======

This library is released under the MIT License. See the bundled LICENSE file
for details.
