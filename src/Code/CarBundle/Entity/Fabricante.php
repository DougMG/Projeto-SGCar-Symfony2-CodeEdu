<?php
namespace Code\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Table()
* @ORM\Entity()
*/
class Fabricante
{
    /**
    * @var integer
    * @ORM\Column(name="id", type="integer", length=255 )
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
    * @var string
    * @ORM\Column(name="nome", type="string", length=100 )
    */
    private $nome;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
}
?>