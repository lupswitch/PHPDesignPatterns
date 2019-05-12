<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 07.05.2019
 * Time: 13:37
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\SocialNetworkPoster;


interface SocialNetworkConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}