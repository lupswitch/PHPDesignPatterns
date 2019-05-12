<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 09.05.2019
 * Time: 16:27
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\SocialNetworkPoster;


class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}