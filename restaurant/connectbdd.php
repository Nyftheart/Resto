<?php

// Pour se connecter à notre base de données
// cette page doit etre requise sur les pages qui la necessite afin de faire valoir ce que droit 
$pdo = new PDO("mysql:host=localhost;dbname=restaurant", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
?>

<?php

class connexiondb {
    private $host = '127.0.0.1';
    private $name = 'restaurant';
    private $user = 'root';
    private $pass = '';
    private $connexion;

    function __construct($host=null,$name=null,$user=null,$pass=null){
        if($host != null){
            $this->host = $host;
            $this->name = $name;
            $this->user = $user;
            $this->pass = $pass;
        }
        try{
            $this->connexion = new PDO('mysql:host='.$this->host.';dbname='.$this->name,$this->user,$this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }catch (PDOException $e){
            echo 'Erreur : Impossible de se connecter à la BDD !';die();
        }
        }
    
        public function query($sql, $data=array()){
            $req = $this->connexion->prepare($sql);
            $req->execute($data);
            return $req;
        }
        public function insert($sql, $data=array()){
            $req=$this->connexion->prepare($sql);
            $req->execute($data);
        }
        
    }
?>