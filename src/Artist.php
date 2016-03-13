<?php
/**
     * {LICENSE}
     */
namespace Pbxg33k\VocaDB;

use Pbxg33k\VocaDB\Models\Artist as ArtistModel;
/**
 * Artist class
 * 
 * @package Pbxg33k\VocaDB
 * @author Oguzhan Uysal <development@oguzhanuysal.eu>
 */
class Artist extends Base
{
    /**
     * {@inheritdoc}
     */
    public $endpoint = 'artists';

    /**
     * {@inheritdoc}
     */
    public $fields = ['Description', 'Groups', 'Members', 'Names', 'Tags', 'WebLinks'];

    /**
     * @return mixed
     */
    public function albums(ArtistModel $artist)
    {
        return $this->client->album->get(['artistId' => $artist->getId()]);
    }
}