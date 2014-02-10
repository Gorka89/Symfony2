<?php

namespace MDW\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * appmodulesvoting
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MDW\DemoBundle\Entity\appmodulesvotingRepository")
 */
class appmodulesvoting
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="text")
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="option1", type="string", length=255)
     */
    private $option1;

    /**
     * @var string
     *
     * @ORM\Column(name="option2", type="string", length=255)
     */
    private $option2;

    /**
     * @var string
     *
     * @ORM\Column(name="option3", type="string", length=255)
     */
    private $option3;

    /**
     * @var string
     *
     * @ORM\Column(name="option4", type="string", length=255)
     */
    private $option4;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_votes", type="integer")
     */
    private $numVotes;

    /**
     * @var string
     *
     * @ORM\Column(name="resultxml", type="string", length=255)
     */
    private $resultxml;

    /**
     * @var string
     *
     * @ORM\Column(name="sendto", type="string", length=255)
     */
    private $sendto;

    /**
     * @var string
     *
     * @ORM\Column(name="tokenid", type="string", length=50)
     */
    private $tokenid;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return appmodulesvoting
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set option1
     *
     * @param string $option1
     * @return appmodulesvoting
     */
    public function setOption1($option1)
    {
        $this->option1 = $option1;

        return $this;
    }

    /**
     * Get option1
     *
     * @return string 
     */
    public function getOption1()
    {
        return $this->option1;
    }

    /**
     * Set option2
     *
     * @param string $option2
     * @return appmodulesvoting
     */
    public function setOption2($option2)
    {
        $this->option2 = $option2;

        return $this;
    }

    /**
     * Get option2
     *
     * @return string 
     */
    public function getOption2()
    {
        return $this->option2;
    }

    /**
     * Set option3
     *
     * @param string $option3
     * @return appmodulesvoting
     */
    public function setOption3($option3)
    {
        $this->option3 = $option3;

        return $this;
    }

    /**
     * Get option3
     *
     * @return string 
     */
    public function getOption3()
    {
        return $this->option3;
    }

    /**
     * Set option4
     *
     * @param string $option4
     * @return appmodulesvoting
     */
    public function setOption4($option4)
    {
        $this->option4 = $option4;

        return $this;
    }

    /**
     * Get option4
     *
     * @return string 
     */
    public function getOption4()
    {
        return $this->option4;
    }

    /**
     * Set numVotes
     *
     * @param integer $numVotes
     * @return appmodulesvoting
     */
    public function setNumVotes($numVotes)
    {
        $this->numVotes = $numVotes;

        return $this;
    }

    /**
     * Get numVotes
     *
     * @return integer 
     */
    public function getNumVotes()
    {
        return $this->numVotes;
    }

    /**
     * Set resultxml
     *
     * @param string $resultxml
     * @return appmodulesvoting
     */
    public function setResultxml($resultxml)
    {
        $this->resultxml = $resultxml;

        return $this;
    }

    /**
     * Get resultxml
     *
     * @return string 
     */
    public function getResultxml()
    {
        return $this->resultxml;
    }

    /**
     * Set sendto
     *
     * @param string $sendto
     * @return appmodulesvoting
     */
    public function setSendto($sendto)
    {
        $this->sendto = $sendto;

        return $this;
    }

    /**
     * Get sendto
     *
     * @return string 
     */
    public function getSendto()
    {
        return $this->sendto;
    }

    /**
     * Set tokenid
     *
     * @param string $tokenid
     * @return appmodulesvoting
     */
    public function setTokenid($tokenid)
    {
        $this->tokenid = $tokenid;

        return $this;
    }

    /**
     * Get tokenid
     *
     * @return string 
     */
    public function getTokenid()
    {
        return $this->tokenid;
    }
}
