<?php
/**
 * Class Modele Utilisateurs
 * 
 * @author German Mahecha
 * @version 1.0
 * @update 2016-01-17
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MUtilisateurs {
	
    /**
	 *
	 * @var int Identifiant Utilisateur
	**/
    
    public $idUtilisateur;
    public $loginUtilisateur;
    public $passUtilisateur;
    public $bio;
    public $score;
    public $photoUtilisateur;
    
    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
        
	function __construct ($idUtilisateur, $loginUtilisateur, $passUtilisateur, $bio, $score, $photoUtilisateur)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idUtilisateur = $idUtilisateur;
        $this->loginUtilisateur = $loginUtilisateur;
        $this->passUtilisateur = $passUtilisateur;
        $this->bio = $bio;
        $this->score = $score;
        $this->photoUtilisateur = $photoUtilisateur;
	
	}
	
	function __destruct ()
	{
		
	}
	
    
	/** Getters
	 * @access public
	 * @return 
	 */
    
    public function getIdUtilisateur() 
	{
		return $this->idUtilisateur;		
			
	}
    
	public function getLoginUtilisateur() 
	{
		return $this->loginUtilisateur;		
			
	}
    
    public function getPassUtilisateur() 
	{
		return $this->passUtilisateur;		
			
	}
    
    public function getBio() 
	{
		return $this->bio;		
			
	}
    
    public function getScore() 
	{
		return $this->score;		
			
	}
    
    public function getPhotoUtilisateur() 
	{
		return $this->photoUtilisateur;		
			
	}
    
    /*
	 * @access public static
     * @author German Mahecha
	 * @return Array Tableau contenant la liste de tous les utilisateurs enregistrés
	 */
	public static function listeUtilisateurs() 
	{
		self::$database->query('SELECT * FROM utilisateur_enregistre ORDER BY utilisateur_enregistre.loginUtilisateur ASC');
		$lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unUtilisateur = new MUtilisateurs($ligne['idUtilisateur'], $ligne['loginUtilisateur'], $ligne['passUtilisateur'], $ligne['bio'],$ligne['score'], $ligne['photoUtilisateur']);
			$utilisateurs[] = $unUtilisateur;
		}
		return $utilisateurs;
	}
    
}




?>