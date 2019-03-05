<?php
/**
 * Created by PhpStorm.
 * User: florin
 * Date: 05.03.2019
 * Time: 17:24
 */

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 * @ORM\Table(name="users")
 * @UniqueEntity("email")
 * @UniqueEntity("username")
 */
class Users
{
    /**
     * @var int
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name",type="string")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="first_name",type="string")
     */

    private $firstName;

    /**
     * @var string
     * @ORM\Column(name="username",type="string")
     */
    private $username;

    /**
     * @var string
     * @ORM\Column(name="email",type="string")
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="acces_list",type="string")
     */
    private $accessList;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="App\Entity\Type")
     * @ORM\JoinColumn(name="type", referencedColumnName="id")
     */
    private $type;

    /**
     * @var int
     * @ORM\Column(name="account_status",type="integer")
     */
    private $status;

    /**
     * @var int
     * @ORM\Column(name="member_ccl",type="integer")
     */
    private $memberCCL;

    /**
     * @var \DateTime
     * @ORM\Column(name="dob", type="datetime" , options={"default": 0})
     */
    private $dob;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param \DateTime $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return int
     */
    public function getMemberCCL()
    {
        return $this->memberCCL;
    }

    /**
     * @param int $memberCCL
     */
    public function setMemberCCL($memberCCL)
    {
        $this->memberCCL = $memberCCL;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getAccessList()
    {
        return $this->accessList;
    }

    /**
     * @param string $accessList
     */
    public function setAccessList($accessList)
    {
        $this->accessList = $accessList;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }



}