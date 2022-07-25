<?php

/* class Post
{
    public int $id;
    public int $likes = 0;
    public array $comments = [];
    private string $author;
 */
// Método Construtor
/* public function __construct($postId)
    {
        $this->id = $postId;
        //consultar banco de dados para pegar informações do POST $id
        $this->likes = 12 * $postId;
    } */


/* public function aumentarLike()
    {
        $this->likes++;
    } */

//Encapsulamento
/* public function setAuthor($nome)
    {
        if(strlen($nome) >=3){
            $this->author = ucfirst($nome);
        }
    }

    public function getAuthor()
    {
        return $this->author ?? 'Visitante';
    }
}

$post1 = new Post();
$post1->setAuthor('everaldo');

$post2 = new Post();
$post2->setAuthor('fulano');

echo "POST 1: " . $post1->likes . ' likes - ' . $post1->getAuthor() . '<br/>';
echo "POST 2: " . $post2->likes . ' likes - ' . $post2->getAuthor() . '<br/>';
 */


//Metodo estático
/* class Matematica
{
    public static string $nome = 'Everaldo';

    public static function somar($x, $y)
    {
        return $x + $y;
    }
}

echo "Resultado: " . Matematica::somar(20, 80).'<br/>';
echo Matematica::$nome; */

//Herança
/* class Post
{
    private int $id;
    private int $likes = 0;

    public function setId($i)
    {
        $this->id = $i;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setLikes($n)
    {
        $this->likes = $n;
    }
    public function getLikes()
    {
        return $this->likes;
    }
}

class Foto extends Post
{
    private $url;


    public function __construct($id)
    {
        $this->setId($id);
    }

    public function setUrl($u)
    {
        $this->url = $u;
    }

    public function getUrl()
    {
        return $this->url;
    }
}

$foto = new Foto(20);
$foto->setLikes(12);
$foto->setUrl('abc.com');

echo 'FOTO: #' . $foto->getId() . " - " . $foto->getLikes() . ' likes.' . ' - ' . 'URL: ' . $foto->getUrl();
 */

//Polimorfismo

/* interface Forma{
    public function getTipo();
    public function getArea();
}

class Quadrado implements Forma
{

    private $largura;
    private $altura;

    public function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura = $a;
    }

    public function getTipo()
    {
        return 'Quadrado';
    }
    public function getArea()
    {
        return $this->largura * $this->altura;
    }
}

class Circulo implements Forma
{

    private $raio;

    public function __construct($r)
    {
        $this->raio = $r;
    }

    public function getTipo()
    {
        return 'Circulo';
    }
    public function getArea()
    {
        return pi() * ($this->raio * $this->raio);
    }
}

$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);

$objetos = [
    $quadrado,
    $circulo
];

foreach ($objetos as $objeto) {
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();

    echo "AREA " . $tipo . " : " . $area . '<br/>';
} */


