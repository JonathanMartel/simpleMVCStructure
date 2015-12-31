<?php
/**
 * Class Modele Artistes
 * 
 * @author Gautier Piatek
 * @version 1.0
 * @update 2015-12-15
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MArtistes {
	
    /**
	 *
	 * @var int Identifiant Artiste
	**/
    
    public $idArtiste;
    public $prenom;
    public $nom;
    public $collectif;
    private $noInterne;
    public $photoArtiste;
    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
        
	function __construct ($idArtiste, $prenom, $nom, $collectif, $noInterne, $photoArtiste)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idArtiste = $idArtiste;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->collectif = $collectif;
        $this->noInterne = $noInterne;
        $this->photoArtiste = $photoArtiste;
	
	}
	
	function __destruct ()
	{
		
	}
	
    
	/** Getters
	 * @access public
	 * @return 
	 */
    
    public function getIdArtiste() 
	{
		return $this->idArtiste;		
			
	}
    
	public function getPrenom() 
	{
		return $this->prenom;		
			
	}
    
    public function getNom() 
	{
		return $this->nom;		
			
	}
    
    public function getCollectif() 
	{
		return $this->collectif;		
			
	}
    
    public function getPhoto() 
	{
		return $this->photoArtiste;		
			
	}
    
    /*
	 * @access public static
     * @author Gautier Piatek
	 * @return Array Tableau contenant la liste de tous les artistes
	 */
	public static function listeArtistes() 
	{
		self::$database->query('SELECT * FROM artiste ORDER BY artiste.nom ASC');
		$lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unArtiste = new MArtistes($ligne['idArtiste'], $ligne['prenom'], $ligne['nom'], $ligne['collectif'],$ligne['noInterne'], $ligne['photoArtiste']);
			$artistes[] = $unArtiste;
		}
		return $artistes;
	}
    
}




?>