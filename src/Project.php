<?php
/**
 * @Entity @Table(name="project")
 **/
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
}