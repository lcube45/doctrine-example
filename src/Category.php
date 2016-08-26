<?php

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

}
