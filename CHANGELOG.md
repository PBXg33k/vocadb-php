# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [unreleased][unreleased] ##

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

[unreleased]: https://github.com/PBXg33k/vocadb-php/compare/v0.0.1...develop