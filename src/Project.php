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
   * @ManyToOne(targetEntity="Team", inversedBy="projects")
   */
  protected $team;

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

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Project
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Project
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set team
     *
     * @param \Team $team
     *
     * @return Project
     */
    public function setTeam(\Team $team = null)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \Team
     */
    public function getTeam()
    {
        return $this->team;
    }
}
