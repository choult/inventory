<?php

namespace chrishoult\Tagging;

/**
 * An interface to model taggable items
 * 
 * @author Christopher Hoult <choult@gmail.com>
 *
 * @package Taggable
 */
interface Taggable
{
    /**
     * Gets the unique ID for the taggable item
     *
     * @return mixed
     */
    public function getUid();
}