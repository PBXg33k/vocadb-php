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

    /**
     * @return string
     */
    public function getAdditionalNames ()
    {
        return $this->additionalNames;
    }

    /**
     * @param string $additionalNames
     * @return Tag
     */
    public function setAdditionalNames ($additionalNames)
    {
        $this->additionalNames = $additionalNames;
        return $this;
    }

    /**
     * @return string
     */
    public function getAliasedTo ()
    {
        return $this->aliasedTo;
    }

    /**
     * @param string $aliasedTo
     * @return Tag
     */
    public function setAliasedTo ($aliasedTo)
    {
        $this->aliasedTo = $aliasedTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName ()
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return Tag
     */
    public function setCategoryName ($categoryName)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate ()
    {
        return $this->createDate;
    }

    /**
     * @param \DateTime $createDate
     * @return Tag
     */
    public function setCreateDate ($createDate)
    {
        $this->createDate = $createDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultNameLanguage ()
    {
        return $this->defaultNameLanguage;
    }

    /**
     * @param string $defaultNameLanguage
     * @return Tag
     */
    public function setDefaultNameLanguage ($defaultNameLanguage)
    {
        $this->defaultNameLanguage = $defaultNameLanguage;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription ()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Tag
     */
    public function setDescription ($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Tag
     */
    public function setId ($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMainPicture ()
    {
        return $this->mainPicture;
    }

    /**
     * @param string $mainPicture
     * @return Tag
     */
    public function setMainPicture ($mainPicture)
    {
        $this->mainPicture = $mainPicture;
        return $this;
    }

    /**
     * @return string
     */
    public function getName ()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Tag
     */
    public function setName ($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getNames ()
    {
        return $this->names;
    }

    /**
     * @param array $names
     * @return Tag
     */
    public function setNames ($names)
    {
        $this->names = $names;
        return $this;
    }

    /**
     * @return Tag
     */
    public function getParent ()
    {
        return $this->parent;
    }

    /**
     * @param Tag $parent
     * @return Tag
     */
    public function setParent ($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return Tag
     */
    public function getRelatedTags ()
    {
        return $this->relatedTags;
    }

    /**
     * @param Tag $relatedTags
     * @return Tag
     */
    public function setRelatedTags ($relatedTags)
    {
        $this->relatedTags = $relatedTags;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus ()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Tag
     */
    public function setStatus ($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranslatedDescription ()
    {
        return $this->translatedDescription;
    }

    /**
     * @param string $translatedDescription
     * @return Tag
     */
    public function setTranslatedDescription ($translatedDescription)
    {
        $this->translatedDescription = $translatedDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlSlug ()
    {
        return $this->urlSlug;
    }

    /**
     * @param string $urlSlug
     * @return Tag
     */
    public function setUrlSlug ($urlSlug)
    {
        $this->urlSlug = $urlSlug;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsageCount ()
    {
        return $this->usageCount;
    }

    /**
     * @param int $usageCount
     * @return Tag
     */
    public function setUsageCount ($usageCount)
    {
        $this->usageCount = $usageCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getVersion ()
    {
        return $this->version;
    }

    /**
     * @param int $version
     * @return Tag
     */
    public function setVersion ($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return array
     */
    public function getWebLinks ()
    {
        return $this->webLinks;
    }

    /**
     * @param array $webLinks
     * @return Tag
     */
    public function setWebLinks ($webLinks)
    {
        $this->webLinks = $webLinks;
        return $this;
    }


}