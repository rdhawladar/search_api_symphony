<?php

namespace App\Entity\Api\v1;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Restaurants
 *
 * @ORM\Entity(repositoryClass="App\Repository\Api\v1\RestaurantRepository")
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
     * @ORM\Column(type="string", length=255, nullable=false)
     * @SerializedName("RestaurantName")
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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBranch(): ?string
    {
        return $this->branch;
    }

    public function setBranch(string $branch): self
    {
        $this->branch = $branch;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getHousenumber(): ?string
    {
        return $this->housenumber;
    }

    public function setHousenumber(string $housenumber): self
    {
        $this->housenumber = $housenumber;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getOpen(): ?int
    {
        return $this->open;
    }

    public function setOpen(int $open): self
    {
        $this->open = $open;

        return $this;
    }

    public function getBestmatch(): ?int
    {
        return $this->bestmatch;
    }

    public function setBestmatch(int $bestmatch): self
    {
        $this->bestmatch = $bestmatch;

        return $this;
    }

    public function getNewestscore(): ?int
    {
        return $this->newestscore;
    }

    public function setNewestscore(int $newestscore): self
    {
        $this->newestscore = $newestscore;

        return $this;
    }

    public function getRatingaverage(): ?int
    {
        return $this->ratingaverage;
    }

    public function setRatingaverage(int $ratingaverage): self
    {
        $this->ratingaverage = $ratingaverage;

        return $this;
    }

    public function getPopularity(): ?int
    {
        return $this->popularity;
    }

    public function setPopularity(int $popularity): self
    {
        $this->popularity = $popularity;

        return $this;
    }

    public function getAverageproductprice(): ?float
    {
        return $this->averageproductprice;
    }

    public function setAverageproductprice(?float $averageproductprice): self
    {
        $this->averageproductprice = $averageproductprice;

        return $this;
    }

    public function getDeliverycosts(): ?float
    {
        return $this->deliverycosts;
    }

    public function setDeliverycosts(?float $deliverycosts): self
    {
        $this->deliverycosts = $deliverycosts;

        return $this;
    }

    public function getMinimumorderamount(): ?float
    {
        return $this->minimumorderamount;
    }

    public function setMinimumorderamount(?float $minimumorderamount): self
    {
        $this->minimumorderamount = $minimumorderamount;

        return $this;
    }


}
