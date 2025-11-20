# Changelog

## [1.35.1](https://github.com/googleapis/gax-php/compare/v1.35.0...v1.35.1) (2024-12-04)


### Bug Fixes

* Ensure hasEmulator client option is passed to createTransport ([#594](https://github.com/googleapis/gax-php/issues/594)) ([13bbe8a](https://github.com/googleapis/gax-php/commit/13bbe8a2e6df2bfd6c5febba735113f1abcba201))
* Remove implicit null, add php 8.4 ([#599](https://github.com/googleapis/gax-php/issues/599)) ([af0a0e7](https://github.com/googleapis/gax-php/commit/af0a0e708dfbea46de627965db0f63114fcfb67f))

## [1.35.0](https://github.com/googleapis/gax-php/compare/v1.34.1...v1.35.0) (2024-11-06)


### Features

* Add `InsecureRequestBuilder` for emulator ([#582](https://github.com/googleapis/gax-php/issues/582)) ([cc1d047](https://github.com/googleapis/gax-php/commit/cc1d0472a1caf31bb3ecd98da1d6b8588f95b63a))
* **docs:** Use doctum shared workflow for reference docs ([#578](https://github.com/googleapis/gax-php/issues/578)) ([021763f](https://github.com/googleapis/gax-php/commit/021763f255acaffda6ebe34a9d1a01c2bd187326))
* Support for API Key client option ([#351](https://github.com/googleapis/gax-php/issues/351)) ([ab7f04f](https://github.com/googleapis/gax-php/commit/ab7f04fd8c9f7ed33a58155ae6b9e740f365ac2a))


### Bug Fixes

* **tests:** Skip docs tests from forks ([#591](https://github.com/googleapis/gax-php/issues/591)) ([35ae9f7](https://github.com/googleapis/gax-php/commit/35ae9f708d3ef937308d266e3a012296ce8606fc))

## [1.34.1](https://github.com/googleapis/gax-php/compare/v1.34.0...v1.34.1) (2024-08-13)


### Bug Fixes

* Disable universe domain check for MDS ([#575](https://github.com/googleapis/gax-php/issues/575)) ([a47a469](https://github.com/googleapis/gax-php/commit/a47a469d9ef76613c5d320539646323a5e7b978d))

## [1.34.0](https://github.com/googleapis/gax-php/compare/v1.33.0...v1.34.0) (2024-05-29)


### Features

* Support new surface operations clients ([#569](https://github.com/googleapis/gax-php/issues/569)) ([fa06e73](https://github.com/googleapis/gax-php/commit/fa06e738fc63a3b9f70a26e6d20f30c582ef1870))

## [1.33.0](https://github.com/googleapis/gax-php/compare/v1.32.0...v1.33.0) (2024-05-10)


### Features

* Support V2 OperationsClient in OperationResponse ([#564](https://github.com/googleapis/gax-php/issues/564)) ([7f8bb13](https://github.com/googleapis/gax-php/commit/7f8bb13f78463b1e7f2289ce5514763992806e5e))

## [1.32.0](https://github.com/googleapis/gax-php/compare/v1.31.0...v1.32.0) (2024-04-24)


### Features

* Add a custom encoder in Serializer ([#554](https://github.com/googleapis/gax-php/issues/554)) ([be28b5a](https://github.com/googleapis/gax-php/commit/be28b5a859b674a3d398bdaab7ed86b93dd7a593))

## [1.31.0](https://github.com/googleapis/gax-php/compare/v1.30.1...v1.31.0) (2024-04-22)


### Features

* Add the api header to the GapicClientTrait ([#553](https://github.com/googleapis/gax-php/issues/553)) ([cc102eb](https://github.com/googleapis/gax-php/commit/cc102ebdfd63019b1e6bcd51515be2a2cb13534d))


### Bug Fixes

* Add caching and micro optimizations in Serializer ([5a5d8a7](https://github.com/googleapis/gax-php/commit/5a5d8a763d8e2d470a6d960b788e7d2a938cd64f))
* Pass auth http handler to update metadata call ([#557](https://github.com/googleapis/gax-php/issues/557)) ([6e04a50](https://github.com/googleapis/gax-php/commit/6e04a50d013f5686ec5e66c457b9b440b9bcde9e))

## [1.30.0](https://github.com/googleapis/gax-php/compare/v1.29.1...v1.30.0) (2024-02-28)


### Features

* Auto Populate fields configured for auto population in Rpc Request Message ([#543](https://github.com/googleapis/gax-php/issues/543)) ([99d6b89](https://github.com/googleapis/gax-php/commit/99d6b899ddf55d51fab976844c1e0f8fe9918a52))
* Make the default authHttpHandler in CredentialsWrapper null ([#544](https://github.com/googleapis/gax-php/issues/544)) ([2a25eea](https://github.com/googleapis/gax-php/commit/2a25eeacadf2f783f64b4eca4f94e067ddef3eaa))

## [1.29.1](https://github.com/googleapis/gax-php/compare/v1.29.0...v1.29.1) (2024-02-26)


### Bug Fixes

* Allow InsecureCredentialsWrapper::getAuthorizationHeaderCallback to return null ([#541](https://github.com/googleapis/gax-php/issues/541)) ([676f4f7](https://github.com/googleapis/gax-php/commit/676f4f7e3d8925d8aba00285616fdf89440b45f9))

## [1.29.0](https://github.com/googleapis/gax-php/compare/v1.28.1...v1.29.0) (2024-02-26)


### Features

* Add InsecureCredentialsWrapper for Emulator connection ([#538](https://github.com/googleapis/gax-php/issues/538)) ([b5dbeaf](https://github.com/googleapis/gax-php/commit/b5dbeaf33594b300a0c678ffc6a6946b09fce7dd))

## [1.28.1](https://github.com/googleapis/gax-php/compare/v1.28.0...v1.28.1) (2024-02-20)


### Bug Fixes

* Universe domain check for grpc transport ([#534](https://github.com/googleapis/gax-php/issues/534)) ([1026d8a](https://github.com/googleapis/gax-php/commit/1026d8aec73e0aad8949a86ee7575e3edb3d56be))

## [1.28.0](https://github.com/googleapis/gax-php/compare/v1.27.2...v1.28.0) (2024-02-15)


### Features

* Allow setting of universe domain in environment variable ([#520](https://github.com/googleapis/gax-php/issues/520)) ([6e6603b](https://github.com/googleapis/gax-php/commit/6e6603b03285f3f8d1072776cd206720e3990f50))

## [1.27.2](https://github.com/googleapis/gax-php/compare/v1.27.1...v1.27.2) (2024-02-14)


### Bug Fixes

* Typo in TransportOptions option name ([#530](https://github.com/googleapis/gax-php/issues/530)) ([6914fe0](https://github.com/googleapis/gax-php/commit/6914fe04554867bd827be6596fafc751a3d7621a))

## [1.27.1](https://github.com/googleapis/gax-php/compare/v1.27.0...v1.27.1) (2024-02-14)


### Bug Fixes

* Issues in Options classes ([#528](https://github.com/googleapis/gax-php/issues/528)) ([aa9ba3a](https://github.com/googleapis/gax-php/commit/aa9ba3a6bac9324ad894d9677da0e897497ebab2))

## [1.27.0](https://github.com/googleapis/gax-php/compare/v1.26.3...v1.27.0) (2024-02-07)


### Features

* Create ClientOptionsTrait ([#527](https://github.com/googleapis/gax-php/issues/527)) ([cfe2c60](https://github.com/googleapis/gax-php/commit/cfe2c60a36233f74259c96a6799d8492ed7c45d0))
* Implement ProjectIdProviderInterface in CredentialsWrapper ([#523](https://github.com/googleapis/gax-php/issues/523)) ([b56a463](https://github.com/googleapis/gax-php/commit/b56a4635abfeeec08895202da8218e9ba915413e))
* Update ArrayTrait to be consistent with Core ([#526](https://github.com/googleapis/gax-php/issues/526)) ([8e44185](https://github.com/googleapis/gax-php/commit/8e44185dd6f8f8f9ef5b136776cba61ec7a8b8f6))


### Bug Fixes

* Correct exception type for Guzzle promise ([#521](https://github.com/googleapis/gax-php/issues/521)) ([7129373](https://github.com/googleapis/gax-php/commit/712937339c134e1d92cab5fa736cfe1bbcd7f343))

## [1.26.3](https://github.com/googleapis/gax-php/compare/v1.26.2...v1.26.3) (2024-01-18)


### Bug Fixes

* CallOptions should use transportOptions ([#513](https://github.com/googleapis/gax-php/issues/513)) ([2d45ee1](https://github.com/googleapis/gax-php/commit/2d45ee187cdc3619b30c51b653b508718baf3af4))

## [1.26.2](https://github.com/googleapis/gax-php/compare/v1.26.1...v1.26.2) (2024-01-09)


### Bug Fixes

* Ensure modifyClientOptions is called for new surface clients ([#515](https://github.com/googleapis/gax-php/issues/515)) ([68231b8](https://github.com/googleapis/gax-php/commit/68231b896dec8efb86f8986aefba3d247d2a2d1c))

## [1.26.1](https://github.com/googleapis/gax-php/compare/v1.26.0...v1.26.1) (2024-01-04)


### Bug Fixes

* Widen google/longrunning version ([#511](https://github.com/googleapis/gax-php/issues/511)) ([b93096d](https://github.com/googleapis/gax-php/commit/b93096d0e10bde14c50480ea9f0423c292fbd5a6))

## [1.26.0](https://github.com/googleapis/gax-php/compare/v1.25.0...v1.26.0) (2024-01-03)


### Features

* Add support for universe domain ([#502](https://github.com/googleapis/gax-php/issues/502)) ([5a26fac](https://github.com/googleapis/gax-php/commit/5a26facad5c2e5c30945987c422bb78a3fffb9b1))
* Interface and methods for middleware stack ([#473](https://github.com/googleapis/gax-php/issues/473)) ([766da7b](https://github.com/googleapis/gax-php/commit/766da7b369409ec1b29376b533e7f22ee7f745f4))


### Bug Fixes

* Accept throwable for retry settings ([#509](https://github.com/googleapis/gax-php/issues/509)) ([5af9c3c](https://github.com/googleapis/gax-php/commit/5af9c3c650419c8f1a590783e954cd11dc1f0d56))

## [1.25.0](https://github.com/googleapis/gax-php/compare/v1.24.0...v1.25.0) (2023-11-02)


### Features

* Add custom retries ([#489](https://github.com/googleapis/gax-php/issues/489)) ([ef0789b](https://github.com/googleapis/gax-php/commit/ef0789b73ef28d79a08c354d1361a9ccc6206088))

## [1.24.0](https://github.com/googleapis/gax-php/compare/v1.23.0...v1.24.0) (2023-10-10)


### Features

* Ensure NewClientSurface works for consoldiated v2 clients ([#493](https://github.com/googleapis/gax-php/issues/493)) ([cb8706e](https://github.com/googleapis/gax-php/commit/cb8706ef9211a1e43f733d2c8f272a330c2fa792))

## [1.23.0](https://github.com/googleapis/gax-php/compare/v1.22.1...v1.23.0) (2023-09-14)


### Features

* Typesafety for new surface client options ([#450](https://github.com/googleapis/gax-php/issues/450)) ([21550c5](https://github.com/googleapis/gax-php/commit/21550c5bf07f178f2043b0630f3ac34fcc3a05e0))

## [1.22.1](https://github.com/googleapis/gax-php/compare/v1.22.0...v1.22.1) (2023-08-04)


### Bug Fixes

* Deprecation notice while GapicClientTrait-&gt;setClientOptions ([#483](https://github.com/googleapis/gax-php/issues/483)) ([1c66d34](https://github.com/googleapis/gax-php/commit/1c66d3445dca4d43831a2f4e26e59b9bd1cb76dd))

## [1.22.0](https://github.com/googleapis/gax-php/compare/v1.21.1...v1.22.0) (2023-07-31)


### Features

* Sets api headers for "gcloud-php-new" and "gcloud-php-legacy"  surface versions ([#470](https://github.com/googleapis/gax-php/issues/470)) ([2d8ccff](https://github.com/googleapis/gax-php/commit/2d8ccff419a076ee2fe9d3dc7ecd5509c74afb4c))

## [1.21.1](https://github.com/googleapis/gax-php/compare/v1.21.0...v1.21.1) (2023-06-28)


### Bug Fixes

* Revert "chore: remove unnecessary api endpoint check" ([#476](https://github.com/googleapis/gax-php/issues/476)) ([13e773f](https://github.com/googleapis/gax-php/commit/13e773f5b09f9a99b8425835815746d37e9c1da3))

## [1.21.0](https://github.com/googleapis/gax-php/compare/v1.20.2...v1.21.0) (2023-06-09)


### Features

* Support guzzle/promises:v2 ([753eae9](https://github.com/googleapis/gax-php/commit/753eae9acf638f3356f8149acf84444eb399a699))

## [1.20.2](https://github.com/googleapis/gax-php/compare/v1.20.1...v1.20.2) (2023-05-12)


### Bug Fixes

* Ensure timeout set by RetryMiddleware is int not float ([#462](https://github.com/googleapis/gax-php/issues/462)) ([9d4c7fa](https://github.com/googleapis/gax-php/commit/9d4c7fa89445c63ec0bf4745ed9d98fd185ef51f))

## [1.20.1](https://github.com/googleapis/gax-php/compare/v1.20.0...v1.20.1) (2023-05-12)


### Bug Fixes

* Default value for error message in createFromRequestException ([#463](https://github.com/googleapis/gax-php/issues/463)) ([7552d22](https://github.com/googleapis/gax-php/commit/7552d22241c2f488606e9546efdd6edea356ee9a))

## [1.20.0](https://github.com/googleapis/gax-php/compare/v1.19.1...v1.20.0) (2023-05-01)


### Features

* **deps:** Support google/common-protos 4.0 ([af1db80](https://github.com/googleapis/gax-php/commit/af1db80c22307597f0dfcb9fafa86caf466588ba))
* **deps:** Support google/grpc-gcp 0.3 ([18edc2c](https://github.com/googleapis/gax-php/commit/18edc2ce6a1a615e3ea7c00ede313c32cec4b799))

## [1.19.1](https://github.com/googleapis/gax-php/compare/v1.19.0...v1.19.1) (2023-03-16)


### Bug Fixes

* Simplify ResourceHelperTrait registration ([#447](https://github.com/googleapis/gax-php/issues/447)) ([4949dc0](https://github.com/googleapis/gax-php/commit/4949dc0c4cd5e58af7933a1d2ecab90832c0b036))

## [1.19.0](https://github.com/googleapis/gax-php/compare/v1.18.2...v1.19.0) (2023-01-27)


### Features

* Ensure cache is used in calls to ADC::onGCE ([#441](https://github.com/googleapis/gax-php/issues/441)) ([64a4184](https://github.com/googleapis/gax-php/commit/64a4184ab69d13104d269b15a55d4b8b2515b5a6))

## [1.18.2](https://github.com/googleapis/gax-php/compare/v1.18.1...v1.18.2) (2023-01-06)


### Bug Fixes

* Ensure metadata return type is loaded into descriptor pool ([#439](https://github.com/googleapis/gax-php/issues/439)) ([a40cf8d](https://github.com/googleapis/gax-php/commit/a40cf8d87ac9aa45d18239456e2e4c96653f1a6c))
* Implicit conversion from float to int warning ([#438](https://github.com/googleapis/gax-php/issues/438)) ([1cb62ad](https://github.com/googleapis/gax-php/commit/1cb62ad3d92ace0518017abc972e912b339f1b56))

## [1.18.1](https://github.com/googleapis/gax-php/compare/v1.18.0...v1.18.1) (2022-12-06)


### Bug Fixes

* Message parameters in required querystring ([#430](https://github.com/googleapis/gax-php/issues/430)) ([77bc5e1](https://github.com/googleapis/gax-php/commit/77bc5e1cb8f347601d9237bf5164cf8b8ad8aa0f))

## [1.18.0](https://github.com/googleapis/gax-php/compare/v1.17.0...v1.18.0) (2022-12-05)


### Features

* Add ResourceHelperTrait ([#428](https://github.com/googleapis/gax-php/issues/428)) ([0439efa](https://github.com/googleapis/gax-php/commit/0439efa926865be5fea25b699469b0c1f8c1c768))

## [1.17.0](https://github.com/googleapis/gax-php/compare/v1.16.4...v1.17.0) (2022-09-08)


### Features

* Add startAsyncCall support ([#418](https://github.com/googleapis/gax-php/issues/418)) ([fc90693](https://github.com/googleapis/gax-php/commit/fc9069373c329183e07f8d174084c305b2308209))

## [1.16.4](https://github.com/googleapis/gax-php/compare/v1.16.3...v1.16.4) (2022-08-25)


### Bug Fixes

* use interfaceOverride instead of param ([#419](https://github.com/googleapis/gax-php/issues/419)) ([9dd5bc9](https://github.com/googleapis/gax-php/commit/9dd5bc91c4becfd2a0832288ab2406c3d224618e))

## [1.16.3](https://github.com/googleapis/gax-php/compare/v1.16.2...v1.16.3) (2022-08-23)


### Bug Fixes

* add eager threshold ([#416](https://github.com/googleapis/gax-php/issues/416)) ([99eb172](https://github.com/googleapis/gax-php/commit/99eb172280f301b117fde9dcc92079ca03aa28bd))

## [1.16.2](https://github.com/googleapis/gax-php/compare/v1.16.1...v1.16.2) (2022-08-16)


### Bug Fixes

* use responseType for custom operations ([#413](https://github.com/googleapis/gax-php/issues/413)) ([b643adf](https://github.com/googleapis/gax-php/commit/b643adfc44dd9fe82b0919e5b34edd00c7cdbb1f))

## [1.16.1](https://github.com/googleapis/gax-php/compare/v1.16.0...v1.16.1) (2022-08-11)


### Bug Fixes

* remove typehint from extended method ([#411](https://github.com/googleapis/gax-php/issues/411)) ([fb37f73](https://github.com/googleapis/gax-php/commit/fb37f7365e888465d84fca304ca83360ddbae6c3))

## [1.16.0](https://github.com/googleapis/gax-php/compare/v1.15.0...v1.16.0) (2022-08-10)


### Features

* additional typehinting ([#403](https://github.com/googleapis/gax-php/issues/403)) ([6597a07](https://github.com/googleapis/gax-php/commit/6597a07019665d91e07ea0a016c7d99c8a099cd2))
* drop support for PHP 5.6 ([#397](https://github.com/googleapis/gax-php/issues/397)) ([b888b24](https://github.com/googleapis/gax-php/commit/b888b24e0e223784e22dbbbe27fe0284cdcdfc35))
* introduce startApiCall ([#406](https://github.com/googleapis/gax-php/issues/406)) ([1cfeb62](https://github.com/googleapis/gax-php/commit/1cfeb628070c9c6e57b2dde854b0a973a888a2bc))


### Bug Fixes

* **deps:** update dependency google/longrunning to ^0.2 ([#407](https://github.com/googleapis/gax-php/issues/407)) ([54d4f32](https://github.com/googleapis/gax-php/commit/54d4f32ba5464d1f5da33e1c99a020174cae367c))

## [1.15.0](https://github.com/googleapis/gax-php/compare/v1.14.0...v1.15.0) (2022-08-02)


### Features

* move LongRunning classes to a standalone package ([#401](https://github.com/googleapis/gax-php/issues/401)) ([1747125](https://github.com/googleapis/gax-php/commit/1747125c84dcc6d42390de7e78d2e326884e1073))

## [1.14.0](https://github.com/googleapis/gax-php/compare/v1.13.0...v1.14.0) (2022-07-26)


### Features

* support requesting numeric enum rest encoding ([#395](https://github.com/googleapis/gax-php/issues/395)) ([0d74a48](https://github.com/googleapis/gax-php/commit/0d74a4877c5198cfaf534c4e55d7e418b50bc6ab))
