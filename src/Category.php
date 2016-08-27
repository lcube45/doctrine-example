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
   * @var \DateTime $created
   *
   * @Gedmo\Timestampable(on="create")
   * @Column(type="datetime")
   */
  private $created;

  /**
   * @var \DateTime $updated
   *
   * @Gedmo\Timestampable(on="update")
   * @Column(type="datetime")
   */
  private $updated;

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
}
