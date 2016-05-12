<?php
/**
     * {LICENSE}
     */
namespace Pbxg33k\VocaDB;

class ReleaseEvent extends Base
{
    /**
     * {@inheritdoc}
     */
    public $endpoint = 'releaseEvents';

    /**
     * {@inheritdoc}
     */
    public $fields = ['Description', 'Series'];
}