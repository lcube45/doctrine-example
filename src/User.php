<?php

/**
* @Entity
* @Table(name="user")
*/
class User {

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
   * @Column(name="firstname", type="string", length=255)
   */
  private $firstname;

  /**
   * @var string
   *
   * @Column(name="lastname", type="string", length=255)
   */
  private $lastname;

  /**
   * @ManyToMany(targetEntity="Team", mappedBy="users")
   */
  private $teams;

  public function __construct() {
    $this->teams = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Add team
     *
     * @param \Team $team
     *
     * @return User
     */
    public function addTeam(\Team $team)
    {
        $this->teams[] = $team;

        return $this;
    }

    /**
     * Remove team
     *
     * @param \Team $team
     */
    public function removeTeam(\Team $team)
    {
        $this->teams->removeElement($team);
    }

    /**
     * Get teams
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeams()
    {
        return $this->teams;
    }
}
