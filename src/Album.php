<?php
/**
 * {LICENSE}
 */
namespace Pbxg33k\VocaDB;

/**
 * Album class
 * 
 * @package Pbxg33k\VocaDB
 * @author Oguzhan Uysal <development@oguzhanuysal.eu>
 */
class Album extends Base
{
	public $endpoint = 'albums';

	public $fields = ['AdditionalNames', 'Artists', 'Identifiers', 'MainPicture', 'Names', 'PVs', 'Tags', 'Tracks', 'WebLinks'];
}