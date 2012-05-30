<?php

namespace chrishoult\Bundle\TaggingBundle\Entity;

use chrishoult\Tagging\Tag as TagInterface;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @author Christopher Hoult <choult@gmail.com>
 * @package TaggingBundle
 * @subpackage Entity
 *
 * @Gedmo\Tree(type="nested")
 * @ORM\Entity
 * @ORM\Table(name="tag")
 */
class Tag implements TagInterface
{
    /**
     * The ID of this Tag
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var integer 
     */
    private $id;

    /**
     * The name of this Tag
     *
     * @ORM\Column(name="name", type="string")
     *
     * @var string
     */
    private $name;

    /**
     * In the nested set, the left value.
     * 
     * @Gedmo\TreeLeft
     * @ORM\Column(name="lft", type="integer")
     * @var integer 
     */
    private $lft;

    /**
     * In the nested set, the right value.
     *
     * @Gedmo\TreeRight
     * @ORM\Column(name="rgt", type="integer")
     * @var integer
     */
    private $rgt;

    /**
     * In the nested set, the level value.
     *
     * @Gedmo\TreeLevel
     * @ORM\Column(name="lvl", type="integer")
     * @var integer
     */
    private $lvl;

    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="Tag", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="CASCADE")
     *
     * @var \chrishoult\Bundle\TaggingBundle\Entity\Tag
     */
    private $parent;

    /**
     * The ID of the parent tag
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     *
     * @var integer
     */
    private $parentId;

    /**
     * The child Tags of this Tag
     *
     * @ORM\OneToMany(targetEntity="Tag", mappedBy="parent")
     * @ORM\OrderBy({"lft" = "ASC"})
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $children;

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

    /**
     * Gets the left value of this Tag
     * 
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Sets the left value of this Tag
     *
     * @param integer $lft
     */
    public function setLft($lft)
    {
        $this->lft = $lft;
    }

    /**
     * Gets the right value of this Tag
     *
     * @return integer
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Sets the right value of this Tag
     *
     * @param integer $rgt
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;
    }

    /**
     * Gets the level of this Tag
     *
     * @return integer
     */
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Sets the level of this Tag
     *
     * @param integer $lvl
     */
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;
    }

    /**
     * Gets the parent of this Tag
     *
     * @return \chrishoult\Bundle\TaggingBundle\Entity\Tag
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets the parent of this Tag
     *
     * @param \chrishoult\Bundle\TaggingBundle\Entity\Tag $parent
     */
    public function setParent(Tag $parent)
    {
        $this->parent = $parent;
    }

}