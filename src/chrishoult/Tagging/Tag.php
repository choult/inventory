<?php

namespace chrishoult\Tagging;

/**
 * An interface to model a tag
 *
 * @author Christopher Hoult <choult@gmail.com>
 * @package Tagging
 */
interface Tag
{
    /**
     * Gets the id of the given tag
     *
     * @return integer
     */
    public function getId();

    /**
     * Gets the name of the given tag
     *
     * @return string
     */
    public function getName();

    /**
     * Sets the name of this tag
     *
     * @param string $name
     */
    public function setName($name);
}
