<?php
namespace Pbxg33k\VocaDB\Models;

/**
 * Class Tag
 * @package Pbxg33k\VocaDB\Models
 */
class Tag extends Base
{
    /**
     * @var string
     */
    public $additionalNames;

    /**
     * @var string
     */
    public $aliasedTo;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var \DateTimeInterface
     */
    public $createDate;

    /**
     * @var string
     */
    public $defaultNameLanguage;

    /**
     * @var string
     */
    public $description;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $mainPicture;

    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $names;

    /**
     * @var Tag
     */
    public $parent;

    /**
     * @var Tag
     */
    public $relatedTags;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $translatedDescription;

    /**
     * @var string
     */
    public $urlSlug;

    /**
     * @var integer
     */
    public $usageCount;

    /**
     * @var integer
     */
    public $version;

    /**
     * @var array
     */
    public $webLinks;
}