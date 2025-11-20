# Changelog

## [4.5.0](https://github.com/googleapis/common-protos-php/compare/v4.4.0...v4.5.0) (2023-11-29)


### Features

* Add auto_populated_fields to google.api.MethodSettings ([#74](https://github.com/googleapis/common-protos-php/issues/74)) ([d739417](https://github.com/googleapis/common-protos-php/commit/d7394176eb95f0e92af4e93746dba8f515ba9bc2))

## [4.4.0](https://github.com/googleapis/common-protos-php/compare/v4.3.0...v4.4.0) (2023-10-02)


### Features

* Public google.api.FieldInfo type and extension ([#71](https://github.com/googleapis/common-protos-php/issues/71)) ([4002074](https://github.com/googleapis/common-protos-php/commit/40020744c65e7561dec08e1cd2994afcc51ec771))

## [4.3.0](https://github.com/googleapis/common-protos-php/compare/v4.2.0...v4.3.0) (2023-08-22)


### Features

* Add new FieldBehavior value IDENTIFIER ([#67](https://github.com/googleapis/common-protos-php/issues/67)) ([6c6c21f](https://github.com/googleapis/common-protos-php/commit/6c6c21fc4a2f4711aeddad11082ed17acaf4733c))

## [4.2.0](https://github.com/googleapis/common-protos-php/compare/v4.1.0...v4.2.0) (2023-07-25)


### Features

* Add a proto message to describe the `resource_type` and `resource_permission` for an API method ([#64](https://github.com/googleapis/common-protos-php/issues/64)) ([8a0ff5f](https://github.com/googleapis/common-protos-php/commit/8a0ff5f9ffcf3683fc4718e85e97f45a001a1925))

## [4.1.0](https://github.com/googleapis/common-protos-php/compare/v4.0.0...v4.1.0) (2023-05-06)


### Features

* Add ConfigServiceV2.CreateBucketAsync method for creating Log Buckets asynchronously ([b18d554](https://github.com/googleapis/common-protos-php/commit/b18d55421cbe1e55d62b5d149e56be23db8c4286))
* Add ConfigServiceV2.CreateLink method for creating linked datasets for Log Analytics Buckets ([b18d554](https://github.com/googleapis/common-protos-php/commit/b18d55421cbe1e55d62b5d149e56be23db8c4286))
* Add ConfigServiceV2.DeleteLink method for deleting linked datasets ([b18d554](https://github.com/googleapis/common-protos-php/commit/b18d55421cbe1e55d62b5d149e56be23db8c4286))
* Add ConfigServiceV2.GetLink methods for describing linked datasets ([b18d554](https://github.com/googleapis/common-protos-php/commit/b18d55421cbe1e55d62b5d149e56be23db8c4286))
* Add ConfigServiceV2.ListLinks method for listing linked datasets ([b18d554](https://github.com/googleapis/common-protos-php/commit/b18d55421cbe1e55d62b5d149e56be23db8c4286))
* Add ConfigServiceV2.UpdateBucketAsync method for creating Log Buckets asynchronously ([b18d554](https://github.com/googleapis/common-protos-php/commit/b18d55421cbe1e55d62b5d149e56be23db8c4286))
* Add LogBucket.analytics_enabled field that specifies whether Log Bucket's Analytics features are enabled ([b18d554](https://github.com/googleapis/common-protos-php/commit/b18d55421cbe1e55d62b5d149e56be23db8c4286))
* Add LogBucket.index_configs field that contains a list of Log Bucket's indexed fields and related configuration data ([b18d554](https://github.com/googleapis/common-protos-php/commit/b18d55421cbe1e55d62b5d149e56be23db8c4286))
* Log Analytics features of the Cloud Logging API ([#60](https://github.com/googleapis/common-protos-php/issues/60)) ([b18d554](https://github.com/googleapis/common-protos-php/commit/b18d55421cbe1e55d62b5d149e56be23db8c4286))

## [4.0.0](https://github.com/googleapis/common-protos-php/compare/v3.2.0...v4.0.0) (2023-05-01)


### ⚠ BREAKING CHANGES

* remove files unknown to owlbot ([#59](https://github.com/googleapis/common-protos-php/issues/59))
* add owlbot automated updates ([#54](https://github.com/googleapis/common-protos-php/issues/54))

### Features

* Add owlbot automated updates ([#54](https://github.com/googleapis/common-protos-php/issues/54)) ([6d9134d](https://github.com/googleapis/common-protos-php/commit/6d9134d2f927e9c4aa3165e823477e25ef8ff38f))
* Regenerate all common protos from new owlbot config ([#58](https://github.com/googleapis/common-protos-php/issues/58)) ([5dac653](https://github.com/googleapis/common-protos-php/commit/5dac653bdd60c4dbaec45e73e0ec487e5aeac9b1))


### Miscellaneous Chores

* Remove files unknown to owlbot ([#59](https://github.com/googleapis/common-protos-php/issues/59)) ([f541342](https://github.com/googleapis/common-protos-php/commit/f54134263a142e278c56f5e03e5a3d8c6f72aac3))

## [3.2.0](https://github.com/googleapis/common-protos-php/compare/v3.1.0...v3.2.0) (2023-01-12)


### Features

* Refresh types ([#49](https://github.com/googleapis/common-protos-php/issues/49)) ([bd71fc0](https://github.com/googleapis/common-protos-php/commit/bd71fc05cbca1ccd94b71a42c227f0d69c688f07))

## [3.1.0](https://github.com/googleapis/common-protos-php/compare/v3.0.0...v3.1.0) (2022-10-05)


### Features

* Make autoloader more efficient ([#45](https://github.com/googleapis/common-protos-php/issues/45)) ([cdff58a](https://github.com/googleapis/common-protos-php/commit/cdff58a3ff6c42e461f18f14c0bbd8e171456924))

## [3.0.0](https://github.com/googleapis/common-protos-php/compare/2.1.0...v3.0.0) (2022-07-29)


### ⚠ BREAKING CHANGES

* remove longrunning classes from common protos (#41)

### Miscellaneous Chores

* remove longrunning classes from common protos ([#41](https://github.com/googleapis/common-protos-php/issues/41)) ([e88dd1d](https://github.com/googleapis/common-protos-php/commit/e88dd1d5dfef93358dc0bd7f3d62d09bbfd750b6))
