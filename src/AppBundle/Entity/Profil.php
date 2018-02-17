<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profil
 *
 * @ORM\Table(name="profil")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProfilRepository")
 */
class Profil
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="pdp", type="string", length=150, nullable=true)
     */
    private $pdp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="date")
     */
    private $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="adrmail", type="string", length=150)
     */
    private $adrmail;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Profil
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Profil
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pdp
     *
     * @param string $pdp
     *
     * @return Profil
     */
    public function setPdp($pdp)
    {
        $this->pdp = $pdp;

        return $this;
    }

    /**
     * Get pdp
     *
     * @return string
     */
    public function getPdp()
    {
        return $this->pdp;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     *
     * @return Profil
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set adrmail
     *
     * @param string $adrmail
     *
     * @return Profil
     */
    public function setAdrmail($adrmail)
    {
        $this->adrmail = $adrmail;

        return $this;
    }

    /**
     * Get adrmail
     *
     * @return string
     */
    public function getAdrmail()
    {
        return $this->adrmail;
    }
}

