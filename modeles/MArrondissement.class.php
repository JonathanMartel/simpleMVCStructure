<?php
/**
 * Class Modele Arrondissement
 * 
 * @author Gautier Piatek
 * @version 1.0
 * @update 2015-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MArrondissement {
	
    /**
	 *
	 * @var int Identifiant Categorie
	**/
    
    public $idArrondissement;
	public $nomArrondissement;

    
    /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
    
	function __construct ($idArrondissement, $nomArrondissement)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

        $this->idArrondissement = $idArrondissement;
        $this->nomArrondissement = $nomArrondissement;

	}
	
	function __destruct ()
	{
		
	}

		public function getidArrondissement() 
	{
		return $this->idArrondissement;		
			
	}



	public function getnomArrondissement() 
	{
		return $this->nomArrondissement;		
			
	}
    
    /**
	 * @access public static
	 * @return Array Tableau contenant la liste de toutes les arrondissements
	 * @author Jorge Blanco
     * @version 1.0
     * 
     */
	public static function listeArrondissement() {
		self::$database->query('SELECT * FROM arrondissement');
		$lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unArrondissement = new MArrondissement($ligne['idArrondissement'], $ligne['nomArrondissement']);
			$arrondissement[] = $unArrondissement;
		}
		return $arrondissement;
	} //FIN FUNCTION listeArrondissement

// 	   /**
// 	 *
// 	 * @return Array Tableau contenant la liste de toutes les categories
// 	 */
// 	public static function listerOueuvresParArr() {
// 		self::$database->query('SELECT oeuvre.titreOeuvre FROM oeuvre JOIN arrondissement on arrondissement.idArrondissement=oeuvre.idArrondissement WHERE oeuvre.idArrondissement="1"');
// 		$lignes = self::$database->resultset();
// 		foreach ($lignes as $ligne) {
// 			$unArrondissement = new MArrondissement('', $ligne['nomArrondissement']);
// 			$arrondissement[] = $unArrondissement;
// 		}
// 		return $arrondissement;

// }
}

?>