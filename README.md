[![Build Status](https://travis-ci.org/PBXg33k/vocadb-php.svg)](https://travis-ci.org/PBXg33k/vocadb-php)
# VocaDB API PHP Client #

**NOTE: This is an early alpha release which is still in development!**

## Installation ##

### Using composer (recommended) ###

Simply run: `composer require pbxg33k/vocadb dev-master`

or add the following line to your require in composer.json:
`"pbxg33k/vocadb":"dev-master"`

### Without composer ###

1. Download this repository as a zip file.
2. Extract to a directory in your application
3. Add files to your project
	* Map "pbxg33k/vocadb" to this directory if your autoloader is PSR-4 compatible
	* Include `autoload.php` to your project if either you don't have an autoloader or your autoloader is not PSR-4 compatible

## How to use ##
The goal of this project is an easy integration with VocaDB's public API.

Before you can do anything you must load the client
```php
	$client = new Pbxg33k\VocaDB\Client();
```
The client uses Guzzle to communicate with the API. You can pass any guzzle configuration in an array mapped to the 'guzzle' key.

Let's say for example your server is behind a proxy and cannot communicate directly with VocaDB's API. We can instruct Guzzle to use a proxy for communication by simply adding the proxy information to the constuctor.
```php
	$guzzleConfig = [
		'request.options' => [
			'proxy' => 'tcp://localhost:80/'
		]
	];
	
	// We assign the $guzzleConfig to array('guzzle' => data) so we don't mix up the library's own config.
	$clientConfig = ['guzzle' => $guzzleConfig];

	$client = new Pbxg33k\VocaDB\Client($clientConfig);
```

From this point on you can communicate with the API by simply calling the client's methods.
```php
	// Get Livetune's information
	$livetune = $client->artist->getByName('livetune');

	// $livetune is now an array with searchresults
```

## TODO ##
* Add all missing endpoints
	* `PARTIALLY DONE` Song
	* Entry
	* SongList
	* `PARTIALLY DONE` Album
	* User
	* `PARTIALLY DONE` Tag
	* `PARTIALLY DONE` Artist
	* `PARTIALLY DONE` ReleaseEvent
	* Discussion