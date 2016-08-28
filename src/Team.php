<?php

/**
 * @Entity
 * @Table(name="team")
 */
class Team {

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

  // ...
  /**
   * @ManyToMany(targetEntity="User", inversedBy="teams")
   * @JoinTable(name="team_has_user")
   */
  private $users;

  /**
   * @OneToMany(targetEntity="Project", mappedBy="team")
   */
  private $projects;

  public function __construct() {
    $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
    $this->users = new \Doctrine\Common\Collections\ArrayCollection();
  }


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
     * @return Team
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
     * Add user
     *
     * @param \User $user
     *
     * @return Team
     */
    public function addUser(\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \User $user
     */
    public function removeUser(\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add project
     *
     * @param \Project $project
     *
     * @return Team
     */
    public function addProject(\Project $project)
    {
        $this->projects[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \Project $project
     */
    public function removeProject(\Project $project)
    {
        $this->projects->removeElement($project);
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjects()
    {
        return $this->projects;
    }
}
