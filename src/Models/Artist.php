<?php
namespace pbxg33k\VocaDB\Models;

class Artist extends Base
{
	public $artistType;

	public $createDate;

	public $defaultName;

	public $defaultNameLanguage;

	public $id;

	public $name;

	public $pictureMime;

	public $status;

	public $version;

	public function __construct()
	{

	}

	public function fromApi($response)
	{
		if(is_array($response)) {
			if(isset($response['items'])) {
				$response = $response['items'][0];
			}
		}

		$this->convertFromstdClass($response);
		return $this;
	}
}