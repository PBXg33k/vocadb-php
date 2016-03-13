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
    protected $additionalNames;

    /**
     * @var string
     */
    protected $aliasedTo;

    /**
     * @var string
     */
    protected $categoryName;

    /**
     * @var \DateTime
     */
    protected $createDate;

    /**
     * @var string
     */
    protected $defaultNameLanguage;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $mainPicture;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $names;

    /**
     * @var Tag
     */
    protected $parent;

    /**
     * @var Tag
     */
    protected $relatedTags;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $translatedDescription;

    /**
     * @var string
     */
    protected $urlSlug;

    /**
     * @var integer
     */
    protected $usageCount;

    /**
     * @var integer
     */
    protected $version;

    /**
     * @var array
     */
    protected $webLinks;
}