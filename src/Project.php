<?php

/**
 * @Entity
 * @Table(name="project")
 */
class Project
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
   * @Column(name="code", type="string", length=10, unique=true)
   */
  private $code;

  /**
   * @var string
   *
   * @Column(name="label", type="string", length=255)
   */
  private $label;

  /**
   * @ManyToOne(targetEntity="Category")
   */
  protected $category;

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
     * Set code
     *
     * @param string $code
     *
     * @return Project
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Project
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
     * Set category
     *
     * @param \Category $category
     *
     * @return Project
     */
    public function setCategory(\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
