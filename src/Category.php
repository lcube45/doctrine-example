<?php

use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @Entity
 * @Table(name="category")
 **/
class Category
{
  /**
   * @var int
   *
   * @Column(name="id", type="integer")
   * @Id
   * @GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var string
   *
   * @Column(name="label", type="string", length=255)
   */
  private $label;

  /**
   * @OneToMany(targetEntity="Category", mappedBy="parent")
   */
  private $children;

  /**
   * @ManyToOne(targetEntity="Category", inversedBy="children")
   * @JoinColumn(name="parent_id", referencedColumnName="id")
   */
  private $parent;

  /**
   * Get id
   *
   * @return integer
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * Set label
   *
   * @param string $label
   *
   * @return Category
   */
  public function setLabel($label)
  {
      $this->label = $label;

      return $this;
  }

  /**
   * Get label
   *
   * @return string
   */
  public function getLabel()
  {
      return $this->label;
  }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add child
     *
     * @param \Category $child
     *
     * @return Category
     */
    public function addChild(\Category $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \Category $child
     */
    public function removeChild(\Category $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \Category $parent
     *
     * @return Category
     */
    public function setParent(\Category $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Category
     */
    public function getParent()
    {
        return $this->parent;
    }
}
