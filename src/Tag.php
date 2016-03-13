<?php

namespace Pbxg33k\VocaDB;

class Tag extends Base
{
    public $endpoint = 'tags';

    public $fields = ['AdditionalNames', 'AliasedTo', 'Description', 'MainPicture', 'Names', 'Parent', 'RelatedTags', 'TranslatedDescription', 'Weblinks'];
}