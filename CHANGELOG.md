# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [unreleased] ##
### Added ###
- Unit tests for Album
- PSR-4 autoloader added for *(clean)* usage without an existing PSR-4 compatible autoloader
- Tags
- Release Events

### Changed ###
- `Client->get(string $endpoint, [array $arguments = []])` arguments changed
	- First argument is the endpoint
	- Second argument is the *(optional)* arguments
- Moved shared logic to Base controller

## [v0.1.1] - 2015-05-06  ##
### Added ###
- Continiuous Integration
- unit tests

### Changed ###
- Guzzle is now a public property in `Client`
- API Uri can now be changed by calling `Client->setApiUri(string $uri)`

## [v0.1.0] - 2015-05-06 ##

### Fixed ###
- Removed `var_dump` in case no hits were found

### Added ###
- Exception if artist lookup yields no results
- Lookup songs by name
- Lookup albums
- Lookup related albums by song using fields
- Created Base classes that take over generic methods used by multiple classes
- Fields to Artist and Songs

## 0.0.1 - 2015-05-05 ##
### Added ###
- Initial client release
- Lookup artist by name

[unreleased]: https://github.com/PBXg33k/vocadb-php/compare/v0.1.1...develop
[v0.1.1]: https://github.com/PBXg33k/vocadb-php/compare/v0.1.0...v0.1.1
[v0.1.0]: https://github.com/PBXg33k/vocadb-php/compare/v0.0.1...v0.1.0