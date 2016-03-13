<?php
/**
     * {LICENSE}
     */
namespace Pbxg33k\VocaDB;

class Song extends Base
{
    public $endpoint = 'songs';

    public $fields = ['Albums', 'Artists', 'Names', 'PVs', 'Tags', 'ThumbUrl', 'WebLinks'];
}