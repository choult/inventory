<?php

namespace chrishoult\Tagging;

use \chrishoult\Tagging\Taggable;
use \chrishoult\Tagging\Tag;

/**
 * An interface to model a tagging manager
 *
 * @author Christopher Hoult <choult@gmail.com>
 * @package Tagging
 */
interface Tagger
{

    /**
     * Tags the given item with the given tag
     *
     * @param \chrishoult\Tagging\Taggable $item
     * @param \chrishoult\Tagging\Tag $tag
     */
    public function tag(Taggable $item, Tag $tag);

    /**
     * Removes the given Tag from the given item
     *
     * @param \chrishoult\Tagging\Taggable $item
     * @param \chrishoult\Tagging\Tag $tag
     */
    public function untag(Taggable $item, Tag $tag);
    
}
