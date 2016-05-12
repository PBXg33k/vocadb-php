<?php
/**
     * {LICENSE}
     */
namespace Pbxg33k\VocaDB;

class Song extends Base
{
    /**
     * {@inheritdoc}
     */
    public $endpoint = 'songs';

    /**
     * {@inheritdoc}
     */
    public $fields = ['Albums', 'Artists', 'Names', 'PVs', 'Tags', 'ThumbUrl', 'WebLinks'];
}