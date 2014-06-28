<?php
/**
 * Class Modele
 * 
 * @author 
 * @version 1.0
 * @update 2013-05-27 
 */
class BD {

    private static $instance = null;
    private $idbd;
    private $monArticle;

    private function __construct($base, $param) {

        require_once("./conf/".$param.".inc.php");
        $dsn  = "mysql:host=".HOST.";dbname=".$base;
		$user = USER;
		$pass = PASS;
        $this->idbd = new PDO($dsn,$user,$pass);

        if (!$this->idbd) {
            throw new Exception("Connexion Impossible à la base de données : ".HOST);
        }
    }
    // fonction qui va servir pour instancier cette classe 
    public static function getInstance($base, $param) {
        if(is_null(self::$instance)) {
            self::$instance = new BD($base, $param);
        }
        return self::$instance;
    }
    
    public function getBD(){
        return $this->idbd;
    }

   

     public function get_article_acceuil() {

        
       
            
            $req = $this->getBD()->query("SELECT *FROM article");
           
            
            if(!$req) {
                
                
                throw new Exception("Resultat introuvable sur le serveur : ".HOST);

            }else {

                     
                    while ($article = $req->fetch(PDO::FETCH_ASSOC)) {
                      $this->monArticle = $article; 
                    }
                    
                }
            
			return $this->monArticle; 

        
    }

    public function getData() 
	{
				
		
		
	}
    
    
}
?>