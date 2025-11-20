## Common Protos PHP

[![Latest Stable Version](https://poser.pugx.org/google/common-protos/v/stable)](https://packagist.org/packages/google/common-protos) [![Packagist](https://img.shields.io/packagist/dm/google/common-protos.svg)](https://packagist.org/packages/google/common-protos)

* [API documentation](https://cloud.google.com/php/docs/reference/common-protos/latest)

This repository is a home for the [protocol buffer][protobuf] types which are
common dependencies throughout the Google API ecosystem, generated for PHP.
The protobuf definitions for these generated PHP classes are provided by the
[Common Components AIP][common-components-aip] repository.

**NOTE:** This repository is part of [Google Cloud PHP](https://github.com/googleapis/google-cloud-php). Any
support requests, bug reports, or development contributions should be directed to
that project.

## Using these generated classes

These classes are made available under an Apache license (see `LICENSE`) and
you are free to depend on them within your applications. They are
considered stable and will not change in backwards-incompaible ways.

They are distributed as the [google/common-protos][packagist-common-protos]
composer package, available on [Packagist][packagist].

In order to depend on these classes, use composer from the command line in order
to add this package to your `composer.json` file in the `requires` section:

```bash
composer require google/common-protos
```

## License

These classes are licensed using the Apache 2.0 software license, a
permissive, copyfree license. You are free to use them in your applications
provided the license terms are honored.

[protobuf]: https://developers.google.com/protocol-buffers/
[common-components-aip]: https://google.aip.dev/213
[packagist-common-protos]: https://packagist.org/packages/google/common-protos/
[packagist]: https://packagist.org/
