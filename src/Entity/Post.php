<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $n1;
    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $n2;
    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $n3;
    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $n4;
    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $n5;
    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $n6;
    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $n7;
    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $n8;
    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $n9;
    /**
     * @ORM\Column(type="integer", length=5)
     */
    private $n10;

    public function getn1(): ?int
    {
        return $this->n1;
    }

    public function setn1(int $n1): self
    {
        $this->n1 = $n1;

        return $this;
    }
    public function getn2(): ?int
    {
        return $this->n2;
    }

    public function setn2(int $n2): self
    {
        $this->n2 = $n2;

        return $this;
    }
    public function getn3(): ?int
    {
        return $this->n3;
    }

    public function setn3(int $n3): self
    {
        $this->n3 = $n3;

        return $this;
    }
    public function getn4(): ?int
    {
        return $this->n4;
    }

    public function setn4(int $n4): self
    {
        $this->n4 = $n4;

        return $this;
    }
    public function getn5(): ?int
    {
        return $this->n5;
    }

    public function setn5(int $n5): self
    {
        $this->n5 = $n5;

        return $this;
    }
    public function getn6(): ?int
    {
        return $this->n6;
    }

    public function setn6(int $n6): self
    {
        $this->n6 = $n6;

        return $this;
    }
    public function getn7(): ?int
    {
        return $this->n7;
    }

    public function setn7(int $n7): self
    {
        $this->n7 = $n7;

        return $this;
    }
    public function getn8(): ?int
    {
        return $this->n8;
    }

    public function setn8(int $n8): self
    {
        $this->n8 = $n8;

        return $this;
    }
    public function getn9(): ?int
    {
        return $this->n9;
    }

    public function setn9(int $n9): self
    {
        $this->n9 = $n9;

        return $this;
    }
    public function getn10(): ?int
    {
        return $this->n10;
    }

    public function setn10(int $n10): self
    {
        $this->n10 = $n10;

        return $this;
    }

    public function geti(int $i): ?int
    {
        switch ($i) {
            case '1':
                return $this->n1;
                break;
            
            case '2':
                return $this->n2;
                break;
           
            case '3':
                return $this->n3;
                break;
                
            case '4':
                return $this->n4;
                break;
                
            case '5':
                return $this->n5;
                break;
                
            case '6':
                return $this->n6;
                break;
                
            case '7':
                return $this->n7;
                break;
                
            case '8':
                return $this->n8;
                break;
                
            case '9':
                return $this->n9;
                break;
                
            case '10':
                return $this->n10;
                break;
                
        }
    }

}