<?php

namespace chrishoult\Bundle\TaggingBundle\Entity;

use chrishoult\Tagging\Tag as TagInterface;

/**
 * @author Christopher Hoult <choult@gmail.com>
 * @package TaggingBundle
 * @subpackage Entity
 */
class Tag implements TagInterface
{
    /**
     * Gets the id of the given tag
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id of the given tag
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Gets the name of the given tag
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name of this tag
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}