<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace kssis\UrlopBundle\Entity;
use Symfony\Component\Form\Form;
use Doctrine\ORM\Mapping as ORM;


 /**
  * @ORM\Entity
  * @ORM\Table(name="pracownik")
  */


class Pracownik {
    
      /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
    
    
    protected $id;
    
     /**
      * @ORM\Column(type="string", length=100)
      */
    
    
    protected $firstName;
    
     /**
      * @ORM\Column(type="string", length=100)
      */
    
    protected $lastName;
    
     /**
      * @ORM\Column(type="date")
      */
    
    protected $emploeeDate;
    
    
     /**
      * @ORM\Column(type="string", length=100)
      */
    
    
    protected $position;
    
    /**
      * @ORM\Column(type="integer", length=2)
      */
    
    
    protected $leaveLimit;
    
    
    
    
   

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
     * Set firstName
     *
     * @param string $firstName
     * @return Pracownik
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Pracownik
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set emploeeDate
     *
     * @param \Date $emploeeDate
     * @return Pracownik
     */
    public function setEmploeeDate($emploeeDate)
    {
        $this->emploeeDate = $emploeeDate;

        return $this;
    }

    /**
     * Get emploeeDate
     *
     * @return \Date 
     */
    public function getEmploeeDate()
    {
        return $this->emploeeDate;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Pracownik
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set leaveLimit
     *
     * @param integer $leaveLimit
     * @return Pracownik
     */
    public function setLeaveLimit($leaveLimit)
    {
        $this->leaveLimit = $leaveLimit;

        return $this;
    }

    /**
     * Get leaveLimit
     *
     * @return integer 
     */
    public function getLeaveLimit()
    {
        return $this->leaveLimit;
    }
}
