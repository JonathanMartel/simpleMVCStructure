<?php
/**
 * Class Modele Catégorie
 * 
 * @author Thuy Tien Vo
 * @version 1.0
 * @update 2015-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MCategories 

{
	
    /**
	 *
	 * @var int Identifiant Categorie
	**/
    
    public $idCategorie;
	public $nomCategorie;
    public $nomCatAng;
    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
    
	function __construct ($idCategorie, $nomCategorie, $nomCatAng)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idCategorie = $idCategorie;
        $this->nomCategorie = $nomCategorie;
        $this->nomCatAng = $nomCatAng;
    }
	
	function __destruct ()
	{
		
	}
	
		
	/**
	 * @access public
	 * @return Int
	 */
	public function getidCategorie() 
	{
		return $this->idCategorie;		
			
	}
    
    public function getnomCategorie() 
	{
		return $this->nomCategorie;				
	}
    
    public function getnomCatAng() 
	{
		return $this->nomCatAng;				
	}
    
     /**
	 * @author Gautier Piatek
	 * @return Array Tableau contenant la liste de toutes les categories
	 */
	public static function listeCategories() 
		{
			self::$database->query('SELECT * FROM categorie');
			$lignes = self::$database->resultset();
			foreach ($lignes as $ligne) 
			{
				$uneCategorie = new MCategories('', $ligne['nomCategorie'], $ligne['nomCatAng']);
				$categories[] = $uneCategorie;
			}
			return $categories;
		}

    //public static function listeOeuvresParCat($uneCategorie) 
	//public static function listeOeuvresParCat($id_categorie) 
    //{
       // Oeuvre::$database->query('SELECT oeuvre.titreOeuvre, oeuvre.titreVariante, oeuvre.technique, oeuvre.description
                                 // FROM oeuvre INNER JOIN categorie ON oeuvre.idCategorie=categorie.idCategorie;
        	                     // AND categorie.nomCategorie = :categorie');
        //Oeuvre::$database->bind(':categorie', $id_categorie);
        //Oeuvre::$database->execute();
       // $lignes = Oeuvre::$database->resultset();
        //foreach ($lignes as $ligne) 
       // {  // $unOeuvre = new Oeuvre($ligne['titreOeuvre'], $ligne['titreVariante'], $ligne['technique'], $ligne['description']);
           // $aOeuvres[] = $unOeuvre;
       // }

       // return $aOeuvres;
    //}

  
}

/**
 * Class Modele Sous Catégorie
 * 
 * @author Gautier Piatek
 * @version 1.0
 * @update 2016-01-12
 * 
 */
class MSousCategories extends MCategories {
    
    public $idSousCategorie;
	public $nomSousCategorie;
    public $nomSousCatAng;
    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
    
	function __construct ($idSousCategorie, $nomSousCategorie, $nomSousCatAng)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idSousCategorie = $idSousCategorie;
        $this->nomSousCategorie = $nomSousCategorie;
        $this->nomSousCatAng = $nomSousCatAng;
    }
	
	function __destruct ()
	{
		
	}
	
	/**
	 * @access public
	 * @return Int
	 */
	public function getidSousCategorie() 
	{
		return $this->idSousCategorie;		
			
	}
    
    public function getnomSousCategorie() 
	{
		return $this->nomSousCategorie;				
	}
    
    public function getnomSousCatAng() 
	{
		return $this->nomSousCatAng;				
	}
    
     /**
	 * @author Gautier Piatek
	 * @return Array Tableau contenant la liste de toutes les sous categories
	 */
	public static function listeSousCategories() 
		{
			self::$database->query('SELECT * FROM souscategorie');
			$lignes = self::$database->resultset();
			foreach ($lignes as $ligne) 
			{
				$uneSousCategorie = new MSousCategories('', $ligne['nomSousCat'], $ligne['nomSousCatAng']);
				$SousCategories[] = $uneSousCategorie;
			}
			return $SousCategories;
		}
}
 

?>