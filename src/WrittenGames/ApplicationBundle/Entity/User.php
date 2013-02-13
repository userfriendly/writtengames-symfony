<?php

namespace WrittenGames\ApplicationBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\Column(type="string", length=255, name="facebook_id", nullable=true) */
    protected $facebookId;

    /** @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) */
    protected $facebookAccessToken;

    /** @ORM\Column(type="string", length=255, name="google_id", nullable=true) */
    protected $googleId;

    /** @ORM\Column(name="google_access_token", type="string", length=255, nullable=true) */
    protected $googleAccessToken;

    /** @ORM\Column(type="string", length=255, name="yahoo_id", nullable=true) */
    protected $yahooId;

    /** @ORM\Column(name="yahoo_access_token", type="string", length=255, nullable=true) */
    protected $yahooAccessToken;

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
     * Set facebookId
     *
     * @param string $facebookId
     * @return User
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set facebookAccessToken
     *
     * @param string $facebookAccessToken
     * @return User
     */
    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebookAccessToken = $facebookAccessToken;

        return $this;
    }

    /**
     * Get facebookAccessToken
     *
     * @return string
     */
    public function getFacebookAccessToken()
    {
        return $this->facebookAccessToken;
    }

    /**
     * Set googleId
     *
     * @param string $googleId
     * @return User
     */
    public function setGoogleId($googleId)
    {
        $this->googleId = $googleId;

        return $this;
    }

    /**
     * Get googleId
     *
     * @return string
     */
    public function getGoogleId()
    {
        return $this->googleId;
    }

    /**
     * Set googleAccessToken
     *
     * @param string $googleAccessToken
     * @return User
     */
    public function setGoogleAccessToken($googleAccessToken)
    {
        $this->googleAccessToken = $googleAccessToken;

        return $this;
    }

    /**
     * Get googleAccessToken
     *
     * @return string
     */
    public function getGoogleAccessToken()
    {
        return $this->googleAccessToken;
    }

    /**
     * Set yahooId
     *
     * @param string $yahooId
     * @return User
     */
    public function setYahooId($yahooId)
    {
        $this->yahooId = $yahooId;
    
        return $this;
    }

    /**
     * Get yahooId
     *
     * @return string 
     */
    public function getYahooId()
    {
        return $this->yahooId;
    }

    /**
     * Set yahooAccessToken
     *
     * @param string $yahooAccessToken
     * @return User
     */
    public function setYahooAccessToken($yahooAccessToken)
    {
        $this->yahooAccessToken = $yahooAccessToken;
    
        return $this;
    }

    /**
     * Get yahooAccessToken
     *
     * @return string 
     */
    public function getYahooAccessToken()
    {
        return $this->yahooAccessToken;
    }
}