<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restaurants
 *
 * @ORM\Table(name="restaurants")
 * @ORM\Entity
 */
class Restaurants
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=255, nullable=false)
     */
    private $branch;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="housenumber", type="string", length=255, nullable=false)
     */
    private $housenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=255, nullable=false)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=false)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255, nullable=false)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var int
     *
     * @ORM\Column(name="open", type="integer", nullable=false)
     */
    private $open;

    /**
     * @var int
     *
     * @ORM\Column(name="bestMatch", type="integer", nullable=false)
     */
    private $bestmatch;

    /**
     * @var int
     *
     * @ORM\Column(name="newestScore", type="integer", nullable=false)
     */
    private $newestscore;

    /**
     * @var int
     *
     * @ORM\Column(name="ratingAverage", type="integer", nullable=false)
     */
    private $ratingaverage;

    /**
     * @var int
     *
     * @ORM\Column(name="popularity", type="integer", nullable=false)
     */
    private $popularity;

    /**
     * @var float|null
     *
     * @ORM\Column(name="averageProductPrice", type="float", precision=10, scale=0, nullable=true)
     */
    private $averageproductprice;

    /**
     * @var float|null
     *
     * @ORM\Column(name="deliveryCosts", type="float", precision=10, scale=0, nullable=true)
     */
    private $deliverycosts;

    /**
     * @var float|null
     *
     * @ORM\Column(name="minimumOrderAmount", type="float", precision=10, scale=0, nullable=true)
     */
    private $minimumorderamount;


}
