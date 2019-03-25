<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $jobs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $affiliates;

    public function getId(): ?int
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

    public function getJobs(): ?string
    {
        return $this->jobs;
    }

    public function setJobs(string $jobs): self
    {
        $this->jobs = $jobs;

        return $this;
    }

    public function getAffiliates(): ?string
    {
        return $this->affiliates;
    }

    public function setAffiliates(string $affiliates): self
    {
        $this->affiliates = $affiliates;

        return $this;
    }
}
