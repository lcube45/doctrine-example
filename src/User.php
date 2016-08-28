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
}