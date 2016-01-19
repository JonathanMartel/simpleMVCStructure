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
     * Fonction qui liste tous les artistes
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
    
    /*
     * Fonction qui supprime un artiste
	 * @access public static
     * @author Gautier Piatek
	 * @return none
	 */
	public static function supprimerArtiste($idArtiste) 
	{
		self::$database->query("DELETE FROM artiste WHERE idArtiste=:idArtiste");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idArtiste', $idArtiste);

        return(self::$database->execute());
	}
    
    /*
     * Fonction qui récupère les infos d'un artiste selon son id
	 * @access public static
     * @author Gautier Piatek
	 * @return array
	 */
	public static function getArtisteParId($idArtiste) 
	{
		self::$database->query("SELECT * FROM artiste WHERE idArtiste=:idArtiste");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idArtiste', $idArtiste);
        
        $ligne = self::$database->uneLigne();
        
        return $ligne;
	}
    
    /*
     * Fonction qui récupère met à jour un artiste
	 * @access public static
     * @author Gautier Piatek
	 * @return none
	 */
	public static function modifierArtiste($idArtiste, $prenom, $nom, $collectif, $photoArtiste) 
	{
		self::$database->query("UPDATE artiste SET prenom = :prenom, nom = :nom, collectif = :collectif, photoArtiste = :photoArtiste WHERE idArtiste = :idArtiste");
        //On lie les paramètres auxvaleurs
        self::$database->bind(':idArtiste', $idArtiste);
        self::$database->bind(':prenom', $prenom);
        self::$database->bind(':nom', $nom);
        self::$database->bind(':collectif', $collectif);
        self::$database->bind(':photoArtiste', $photoArtiste);
        
        return(self::$database->execute());
        
	}
}




?>