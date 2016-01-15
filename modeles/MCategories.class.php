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
    
    /**
	 * @brief méthode qui affiche un objet produit
	 *
	 */
	//public function afficher() 
	//{
		//echo $this->nomCategorie;

	//}


	public function getnomCategorie() 
	{
		return $this->nomCategorie;

		//echo $this->nomCategorie;							
	}
    
     /**
	 *
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




?>