<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessageRepository")
 */
class Message
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
     * @var int
     *
     * @ORM\Column(name="expediteur", type="int", length=50)
     */
    private $expediteur;

    /**
     * @var int
     *
     * @ORM\Column(name="idDestinataire", type="int", length=50)
     */
    private $destinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;


    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userExpediteur;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }



    /**
     * Set expediteur
     *
     * @param \int $expediteur
     *
     * @return Message
     */
    public function setExpediteur(\int $expediteur)
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    /**
     * Get expediteur
     *
     * @return \int
     */
    public function getExpediteur()
    {
        return $this->expediteur;
    }

    /**
     * Set destinataire
     *
     * @param \int $destinataire
     *
     * @return Message
     */
    public function setDestinataire(\int $destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return \int
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set userExpediteur
     *
     * @param \AppBundle\Entity\User $userExpediteur
     *
     * @return Message
     */
    public function setUserExpediteur(\AppBundle\Entity\User $userExpediteur)
    {
        $this->userExpediteur = $userExpediteur;

        return $this;
    }

    /**
     * Get userExpediteur
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserExpediteur()
    {
        return $this->userExpediteur;
    }
}
