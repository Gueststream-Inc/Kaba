# :package_name

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Install

Via Composer

``` bash
$ composer require codejet/kaba
```

## Usage

``` php
$kaba = new CodeJet\Kaba($username, $password);
echo $kaba->requestDoorCode('site name','door name','arrival date', 'departure date');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email josh@findsomehelp.com instead of using the issue tracker.

## Credits

- [Josh Houghtelin][https://github.com/jhoughtelin]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/codejet/kaba.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/thephpleague/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/thephpleague/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/thephpleague/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/league/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/codejet/kaba
[link-travis]: https://travis-ci.org/codejet/kaba
[link-scrutinizer]: https://scrutinizer-ci.com/g/codejet/kaba/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/codejet/kaba
[link-downloads]: https://packagist.org/packages/codejet/kaba
[link-author]: https://github.com/CodeJetNet
[link-contributors]: ../../contributors
