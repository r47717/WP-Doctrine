<?php
//namespace DoctrineWrapper\Entity;

/**
 * @Entity
 * @Table(name="wp_users")
 **/
class MyUser
{
	/**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    private $ID;

    /** @Column(type="string") */
    private $user_login;

    /** @Column(type="string") */
    private $user_pass;

    /** @Column(type="string") */
    private $user_nicename;

    /** @Column(type="string") */
    private $user_email;

    /** @Column(type="string") */
    private $user_url;

    /** @Column(type="datetime") */
    private $user_registered;

    /** @Column(type="string") */
    private $user_activation_key;

    /** @Column(type="integer") */
    private $user_status;

    /** @Column(type="string") */
    private $display_name;

    public function __construct() {
    }


    /**
     * Gets the value of ID.
     *
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Gets the value of user_login.
     *
     * @return mixed
     */
    public function getUserLogin()
    {
        return $this->user_login;
    }

    /**
     * Gets the value of user_pass.
     *
     * @return mixed
     */
    public function getUserPass()
    {
        return $this->user_pass;
    }

    /**
     * Gets the value of user_nicename.
     *
     * @return mixed
     */
    public function getUserNicename()
    {
        return $this->user_nicename;
    }

    /**
     * Gets the value of user_email.
     *
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * Gets the value of user_url.
     *
     * @return mixed
     */
    public function getUserUrl()
    {
        return $this->user_url;
    }

    /**
     * Gets the value of user_registered.
     *
     * @return mixed
     */
    public function getUserRegistered()
    {
        return $this->user_registered;
    }

    /**
     * Gets the value of user_activation_key.
     *
     * @return mixed
     */
    public function getUserActivationKey()
    {
        return $this->user_activation_key;
    }

    /**
     * Gets the value of user_status.
     *
     * @return mixed
     */
    public function getUserStatus()
    {
        return $this->user_status;
    }

    /**
     * Gets the value of display_name.
     *
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }
}
