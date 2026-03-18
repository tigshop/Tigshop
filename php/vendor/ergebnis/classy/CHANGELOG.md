# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## Unreleased

For a full diff see [`1.6.0...main`][1.6.0...main].

## [`1.6.0`][1.6.0]

For a full diff see [`1.5.0...1.6.0`][1.5.0...1.6.0].

### Added

- Added support for PHP 8.3 ([#795]), by [@localheinz]

## [`1.5.0`][1.5.0]

For a full diff see [`1.4.0...1.5.0`][1.4.0...1.5.0].

### Changed

- Dropped support for PHP 8.0 ([#702]), by [@localheinz]

## [`1.4.0`][1.4.0]

For a full diff see [`1.3.0...1.4.0`][1.3.0...1.4.0].

### Changed

- Dropped support for PHP 7.4 ([#619]), by [@localheinz]

## [`1.3.0`][1.3.0]

For a full diff see [`1.2.0...1.3.0`][1.2.0...1.3.0].

### Fixed

- Dropped support for PHP 7.2 ([#481]), by [@localheinz]
- Dropped support for PHP 7.3 ([#486]), by [@localheinz]

## [`1.2.0`][1.2.0]

For a full diff see [`1.1.1...1.2.0`][1.1.0...1.2.0].

### Added

- Added support for `enum` ([#478]), by [@localheinz]

### Deprecated

- Deprecated `Construct::__toString()` ([#467]), by [@localheinz]

## [`1.1.1`][1.1.1]

For a full diff see [`1.1.0...1.1.1`][1.1.0...1.1.1].

### Fixed

- Determine classy names within namespace with single segment on PHP 8.0 ([#343]), by [@localheinz]

## [`1.1.0`][1.1.0]

For a full diff see [`1.0.1...1.1.0`][1.0.1...1.1.0].

### Changed

- Added support for PHP 8.0 ([#235]), by [@localheinz]

## [`1.0.1`][1.0.1]

For a full diff see [`1.0.0...1.0.1`][1.0.0...1.0.1].

### Changed

- Dropped support for PHP 7.1 ([#231]), by [@localheinz]
*
## [`1.0.0`][1.0.0]

For a full diff see [`0.5.2...1.0.0`][0.5.2...1.0.0].

## [`0.5.2`][0.5.2]

For a full diff see [`0.5.1...0.5.2`][0.5.1...0.5.2].

### Fixed

- Brought back support for PHP 7.1 ([#103]), by [@localheinz]

## [`0.5.1`][0.5.1]

For a full diff see [`0.5.0...0.5.1`][0.5.0...0.5.1].

### Fixed

- Removed an inappropriate `replace` configuration from `composer.json` ([#100]), by [@localheinz]

## [`0.5.0`][0.5.0]

For a full diff see [`0.4.0...0.5.0`][0.4.0...0.5.0].

### Changed

- Renamed vendor namespace `Localheinz` to `Ergebnis` after move to [@ergebnis] ([#88]), by [@localheinz]

  Run

  ```
  $ composer remove localheinz/classy
  ```

  and

  ```
  $ composer require ergebnis/classy
  ```

  to update.

  Run

  ```
  $ find . -type f -exec sed -i '.bak' 's/Localheinz\\Classy/Ergebnis\\Classy/g' {} \;
  ```

  to replace occurrences of `Localheinz\Classy` with `Ergebnis\Classy`.

  Run

  ```
  $ find -type f -name '*.bak' -delete
  ```

  to delete backup files created in the previous step.

### Fixed

- Dropped support for PHP 7.1 ([#77]), by [@localheinz]

[0.5.0]: https://github.com/localheinz/ergebnis/classy/releases/tag/0.5.0
[0.5.1]: https://github.com/localheinz/ergebnis/classy/releases/tag/0.5.1
[0.5.2]: https://github.com/localheinz/ergebnis/classy/releases/tag/0.5.2
[1.0.0]: https://github.com/localheinz/ergebnis/classy/releases/tag/1.0.0
[1.0.1]: https://github.com/localheinz/ergebnis/classy/releases/tag/1.0.1
[1.1.0]: https://github.com/localheinz/ergebnis/classy/releases/tag/1.1.0
[1.1.1]: https://github.com/localheinz/ergebnis/classy/releases/tag/1.1.1
[1.2.0]: https://github.com/localheinz/ergebnis/classy/releases/tag/1.2.0
[1.3.0]: https://github.com/localheinz/ergebnis/classy/releases/tag/1.3.0
[1.4.0]: https://github.com/localheinz/ergebnis/classy/releases/tag/1.4.0
[1.5.0]: https://github.com/localheinz/ergebnis/classy/releases/tag/1.5.0
[1.6.0]: https://github.com/localheinz/ergebnis/classy/releases/tag/1.6.0

[0.4.0...0.5.0]: https://github.com/ergebnis/classy/compare/0.4.0...0.5.0
[0.5.0...0.5.1]: https://github.com/ergebnis/classy/compare/0.5.0...0.5.1
[0.5.1...0.5.2]: https://github.com/ergebnis/classy/compare/0.5.1...0.5.2
[0.5.2...1.0.0]: https://github.com/ergebnis/classy/compare/0.5.2...1.0.0
[1.0.0...1.0.1]: https://github.com/ergebnis/classy/compare/1.0.0...1.0.1
[1.0.1...1.1.0]: https://github.com/ergebnis/classy/compare/1.0.1...1.1.0
[1.1.0...1.1.1]: https://github.com/ergebnis/classy/compare/1.1.0...1.1.1
[1.1.1...1.2.0]: https://github.com/ergebnis/classy/compare/1.1.1...1.2.0
[1.2.0...1.3.0]: https://github.com/ergebnis/classy/compare/1.2.0...1.3.0
[1.3.0...1.4.0]: https://github.com/ergebnis/classy/compare/1.3.0...1.4.0
[1.4.0...1.5.0]: https://github.com/ergebnis/classy/compare/1.4.0...1.5.0
[1.5.0...1.6.0]: https://github.com/ergebnis/classy/compare/1.5.0...1.6.0
[1.6.0...main]: https://github.com/ergebnis/classy/compare/1.6.0...main

[#77]: https://github.com/ergebnis/classy/pull/77
[#88]: https://github.com/ergebnis/classy/pull/88
[#100]: https://github.com/ergebnis/classy/pull/100
[#103]: https://github.com/ergebnis/classy/pull/103
[#231]: https://github.com/ergebnis/classy/pull/231
[#235]: https://github.com/ergebnis/classy/pull/235
[#343]: https://github.com/ergebnis/classy/pull/343
[#467]: https://github.com/ergebnis/classy/pull/467
[#478]: https://github.com/ergebnis/classy/pull/478
[#481]: https://github.com/ergebnis/classy/pull/481
[#486]: https://github.com/ergebnis/classy/pull/486
[#619]: https://github.com/ergebnis/classy/pull/619
[#702]: https://github.com/ergebnis/classy/pull/702
[#795]: https://github.com/ergebnis/classy/pull/795

[@ergebnis]: https://github.com/ergebnis
[@localheinz]: https://github.com/localheinz
