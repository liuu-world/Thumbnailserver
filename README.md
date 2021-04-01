# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gregbrown/thumbnailserver.svg?style=flat-square)](https://packagist.org/packages/gregbrown/thumbnailserver)
[![Build Status](https://img.shields.io/travis/gregbrown/thumbnailserver/master.svg?style=flat-square)](https://travis-ci.org/gregbrown/thumbnailserver)
[![Quality Score](https://img.shields.io/scrutinizer/g/gregbrown/thumbnailserver.svg?style=flat-square)](https://scrutinizer-ci.com/g/gregbrown/thumbnailserver)
[![Total Downloads](https://img.shields.io/packagist/dt/gregbrown/thumbnailserver.svg?style=flat-square)](https://packagist.org/packages/gregbrown/thumbnailserver)

Serve images when found, if not a placeholder.

## Installation

You can install the package via composer:

```bash
composer require gregbrown/thumbnailserver
```

## Usage

``` php
thumb($path,$type,$size) - path is the name of the image, type is something like campaign and size might be thumbs or 400x300_folder
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email greg@liuu.world instead of using the issue tracker.

## Credits

- [Greg Brown](https://github.com/gregbrown)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
