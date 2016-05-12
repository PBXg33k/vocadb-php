<?php

namespace Pbxg33k\VocaDB;

class Tag extends Base
{
    /**
     * {@inheritdoc}
     */
    public $endpoint = 'tags';

    /**
     * {@inheritdoc}
     */
    public $fields = ['AdditionalNames', 'AliasedTo', 'Description', 'MainPicture', 'Names', 'Parent', 'RelatedTags', 'TranslatedDescription', 'Weblinks'];
}