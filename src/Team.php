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

  public function __construct() {
    $this->users = new \Doctrine\Common\Collections\ArrayCollection();
  }

}