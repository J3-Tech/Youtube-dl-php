<?php

namespace Youtubedl\Option;

class Authentication extends AbstractOption
{
    protected $password;
    protected $username;
    protected $videoPassword;

    /**
     * Sets the value of username.
     *
     * @param mixed $username the username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Sets the value of password.
     *
     * @param mixed $password the password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Sets the value of videoPassword.
     *
     * @param mixed $videoPassword the video password
     *
     * @return self
     */
    public function setVideoPassword($videoPassword)
    {
        $this->videoPassword = $videoPassword;

        return $this;
    }
}
