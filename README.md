[![TobyMaxham MegAPI Brawl Stars Endpoint][tobymaxham-megapi-brawlstars-image]][tobymaxham-megapi-brawlstars-edit-link]

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tobymaxham/megapi-brawlstars.svg?style=flat-square)](https://packagist.org/packages/tobymaxham/megapi-brawlstars)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/tobymaxham/megapi-brawlstars.svg?style=flat-square)](https://packagist.org/packages/tobymaxham/megapi-brawlstars)
[![Support me on Patreon](https://img.shields.io/endpoint.svg?url=https%3A%2F%2Fshieldsio-patreon.vercel.app%2Fapi%3Fusername%3DTobymaxham%26type%3Dpatrons&style=flat)](https://patreon.com/Tobymaxham)


This Package provides a wrapper for the [MegAPI](https://megapi.de) API for Brawl Stars.

You are free to use this package, but please note that you need an active account
on [MegAPI](https://megapi.de) to use the service.

The MegAPI is a service by [Zhylon.net](https://id.zhylon.net/).


For the Brawl Stars API, refer to the [Brawl Stars API Documentation](https://developer.brawlstars.com/#/).


## Installation

You can install the package via Composer:

```bash
composer require tobymaxham/megapi-brawlstars
```


## Usage

To register a new endpoint to the MegAPI, you can use the following code:

```php
<?php

use Zhylon\MegapiClient\Support\Facades\MegApi;

// Player related endpoints
MegApi::brawlstars('player', $playerTag);
MegApi::brawlstars('battlelog', $playerTag);

// Club related endpoints
MegApi::brawlstars('club', $clubTag);
MegApi::brawlstars('clubMembers', $clubTag);
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Security Vulnerabilities

If you've found a bug regarding security please mail [git@maxham.de](mailto:git@maxham.de) instead of using the issue tracker.


## Support me

[![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/Z8Z4NZKU)<br>
[![Support me on Patreon](https://img.shields.io/endpoint.svg?url=https%3A%2F%2Fshieldsio-patreon.vercel.app%2Fapi%3Fusername%3DTobymaxham%26type%3Dpatrons&style=flat)](https://patreon.com/Tobymaxham)


## Credits

- [TobyMaxham](https://github.com/TobyMaxham)
- [All Contributors](../../contributors)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[tobymaxham-megapi-brawlstars-image]: https://socialify.git.ci/tobymaxham/megapi-brawlstars/image?description=1&font=Raleway&issues=1&language=1&owner=1&pattern=Charlie%20Brown&pulls=1&stargazers=1&theme=Light
[tobymaxham-megapi-brawlstars-edit-link]: https://socialify.git.ci/tobymaxham/megapi-brawlstars?description=1&font=Raleway&issues=1&language=1&owner=1&pattern=Charlie%20Brown&pulls=1&stargazers=1&theme=Light
