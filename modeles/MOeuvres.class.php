<?php
/**
 * Class Modele Oeuvres
 * 
 * @author German Mahecha
 * @version 1.0
 * @update 2015-12-14
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class MOeuvres {
	
    /**
	 *
	 * @var int Identifiant Artiste
	**/
    
    public $idOeuvre;
    public $titreOeuvre;
	public $titreVariante;
	public $technique;
    public $techniqueAng;
	public $noInternetOeuvre;
	public $description;
	public $validationOeuvre;
	public $nomArrondissement;
	public $adresse;
	public $batiment;
	public $parc;
	public $latitude;
	public $longitude;
	public $prenomArtiste;
	public $nomArtiste;
	public $collectif;
	public $noInterneArtiste;
	public $photoArtiste;
	public $nomCategorie;
	public $nomCategorieAng;
	public $nomSousCat;
	public $nomSousCatAng;
	public $nomMateriaux;
	public $nomMateriauxAng;
	
    
	  /**
	 * @var database Objet base de données qui permet la connexion
	 */
	static $database;
        
	function __construct ($idOeuvre,$titreOeuvre,$titreVariante,$technique,$techniqueAng,$noInternetOeuvre,$description,$validationOeuvre,$nomArrondissement,$adresse,$batiment,$parc, $latitude, $longitude, $prenomArtiste, $nomArtiste, $collectif, $noInterneArtiste, $photoArtiste, $nomCategorie, $nomCategorieAng, $nomSousCat, $nomSousCatAng, $nomMateriaux, $nomMateriauxAng)
	{
		if (!isset(self::$database))
			self::$database = new PdoBDD();

    	$this->idOeuvre = $idOeuvre;
   		$this-> titreOeuvre = $titreOeuvre;
		$this-> titreVariante =  $titreVariante;
		$this-> technique =  $technique;
        $this-> techniqueAng =  $techniqueAng;
		$this-> noInternetOeuvre =  $noInternetOeuvre;
		$this-> description =  $description;
		$this-> validationOeuvre =  $validationOeuvre;
		$this-> nomArrondissement =  $nomArrondissement;
		$this-> adresse =  $adresse;
		$this-> batiment =  $batiment;
		$this-> parc =  $parc;
		$this-> latitude =  $latitude;
		$this-> longitude =  $longitude;
		$this-> prenomArtiste =  $prenomArtiste;
		$this-> nomArtiste =  $nomArtiste;
		$this-> collectif =  $collectif;
		$this-> noInterneArtiste =  $noInterneArtiste;
		$this-> photoArtiste =  $photoArtiste;
		$this-> nomCategorie =  $nomCategorie;
		$this-> nomCategorieAng =  $nomCategorieAng;
		$this-> nomSousCat =  $nomSousCat;
		$this-> nomSousCatAng =  $nomSousCatAng;
		$this-> nomMateriaux =  $nomMateriaux;
		$this-> nomMateriauxAng =  $nomMateriauxAng;
	}
	
	function __destruct ()
	{
		
	}
	
    
	/** Getters
	 * @access public
	 * @return 
	 */
	
    public function getIdOeuvre() 
	{
		return $this->idOeuvre;		
	}
    public function getTitreOeuvre() 
	{
		return $this->titreOeuvre;		
	}
	public function getTitreVariante() 
	{
		return $this->titreVariante;		
	}
	public function getTechnique() 
	{
		return $this->technique;		
	}
    public function getTechniqueAng() 
	{
		return $this->technique;		
	}
	public function getNoInternetOeuvre() 
	{
		return $this->noInternetOeuvre;		
	}
	public function getDescription() 
	{
		return $this->description;		
	}
	public function getValidationOeuvre() 
	{
		return $this->validationOeuvre;		
	}
	public function getNomArrondissement() 
	{
		return $this->nomArrondissement;		
	}
	public function getAdresse() 
	{
		return $this->adresse;		
	}
	public function getBatiment() 
	{
		return $this->batiment;		
	}
	public function getParc() 
	{
		return $this->parc;		
	}
	public function getLatitude() 
	{
		return $this->latitude;		
	}
	public function getLongitude() 
	{
		return $this->longitude;		
	}
	public function getPrenomArtiste() 
	{
		return $this->prenomArtiste;		
	}
	public function getNomArtiste() 
	{
		return $this->nomArtiste;		
	}
	public function getCollectif() 
	{
		return $this->collectif;		
	}
	public function getNoInterneArtiste() 
	{
		return $this->noInterneArtiste;		
	}
	public function getPhotoArtiste() 
	{
		return $this->photoArtiste;		
	}
	public function getNomCategorie() 
	{
		return $this->nomCategorie;		
	}
	public function getNomCategorieAng() 
	{
		return $this->nomCategorieAng;		
	}
	public function getNomSousCat() 
	{
		return $this->nomSousCat;		
	}
	public function getNomSousCatAng() 
	{
		return $this->nomSousCatAng;		
	}
	public function getNomMateriaux() 
	{
		return $this->nomMateriaux;		
	}
	public function getNomMateriauxAng() 
	{
		return $this->nomMateriauxAng;		
	}
    
	/*****************************************/
	
/*
	public function setIdOeuvre($valeur) 
	{
		$this->idOeuvre = $valeur;	
	}
    public function setTitreOeuvre($valeur) 
	{
		$this->titreOeuvre = $valeur;	
	}
	public function setTitreVariante($valeur) 
	{
		$this->titreVariante = $valeur;	
	}
	public function setTechnique($valeur) 
	{
		$this->technique = $valeur;	
	}
    public function setTechniqueAng($valeur) 
	{
		$this->techniqueAng = $valeur;	
	}
	public function setNoInternetOeuvre($valeur) 
	{
		$this->noInternetOeuvre = $valeur;	
	}
	public function setDescription($valeur) 
	{
		$this->description = $valeur;	
	}
	public function setValidationOeuvre($valeur) 
	{
		$this->validationOeuvre = $valeur;	
	}
	public function setNomArrondissement($valeur) 
	{
		$this->nomArrondissement = $valeur;		
	}
	public function setAdresse($valeur) 
	{
		$this->adresse = $valeur;
	}
	public function setBatiment($valeur) 
	{
		$this->batiment = $valeur;
	}
	public function setParc($valeur) 
	{
		$this->parc = $valeur;
	}
	public function setLatitude($valeur) 
	{
		$this->latitude = $valeur;	
	}
	public function setLongitude($valeur) 
	{
		$this->longitude = $valeur;		
	}
	public function setPrenomArtiste($valeur) 
	{
		$this->prenomArtiste = $valeur;	
	}
	public function setNomArtiste($valeur) 
	{
		$this->nomArtiste = $valeur;	
	}
	public function setCollectif($valeur) 
	{
		$this->collectif = $valeur;	
	}
	public function setNoInterneArtiste($valeur) 
	{
		$this->noInterneArtiste = $valeur;
	}
	public function setPhotoArtiste($valeur) 
	{
		$this->photoArtiste = $valeur;	
	}
	public function setNomCategorie($valeur) 
	{
		$this->nomCategorie = $valeur;
	}
	public function setNomCategorieAng($valeur) 
	{
		$this->nomCategorieAng = $valeur;	
	}
	public function setNomSousCat($valeur) 
	{
		$this->nomSousCat = $valeur;	
	}
	public function setNomSousCatAng($valeur) 
	{
		$this->nomSousCatAng = $valeur;		
	}
	public function setNomMateriaux($valeur) 
	{
		$this->nomMateriaux = $valeur;	
	}
	public function setNomMateriauxAng($valeur) 
	{
		$this->nomMateriauxAng = $valeur;	
	}
	
*/	
			
    /**
	 * @access public static
     * @author German Mahecha
	 * @return Array Tableau contenant la liste de tous 
	 */
	public static function listeOeuvres() {
		self::$database->query('
		SELECT oeuvre.idOeuvre, oeuvre.titreOeuvre, arrondissement.nomArrondissement, artiste.prenom,artiste.nom, artiste.collectif, categorie.nomCategorie 
		FROM oeuvre JOIN artiste ON oeuvre.idArtiste = artiste.idArtiste 
		JOIN arrondissement ON oeuvre.idArrondissement = arrondissement.idArrondissement 
		JOIN categorie ON oeuvre.idCategorie = categorie.idCategorie ');
		
        $lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$uneOeuvre = new MOeuvres($ligne['idOeuvre'],$ligne['titreOeuvre'],'','','','','','',$ligne['nomArrondissement'],'','','','','',$ligne['prenom'],$ligne['nom'],$ligne['collectif'],'','',$ligne['nomCategorie'],'','','','','');
			$oeuvres[] = $uneOeuvre;
		}
		return $oeuvres;
	}
    
    /**
	 * @access public static
     * @author Gautier Piatek
	 * @return Array Tableau contenant la liste de tous les objets oeuvres selon un id d'artiste
	 */
	public static function listeOeuvresParArtiste($idArtiste) {
		self::$database->query('SELECT * FROM oeuvre WHERE idArtiste = :idArtiste ORDER BY oeuvre.idOeuvre ASC');
        self::$database->bind(':idArtiste', $idArtiste);
		$lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$uneOeuvre = new MOeuvres($ligne['idOeuvre'], $ligne['titreOeuvre'], '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
			$oeuvres[] = $uneOeuvre;
		}
		return $oeuvres;
    }

    /**
	 *
	 * @return Array Tableau contenant la liste de toutes les oueuvres par arrondissement
     * @author Jorge Blanco
     * @version 1.0
     * 
     */
    /////////////////////////////// DEVELOPPEMENT ////////////////////////////////////
	//public static function listerOueuvresParArr($id_arrondissement) {
	public static function listerOeuvresParArr() {
		self::$database->query('SELECT oeuvre.titreOeuvre FROM oeuvre JOIN arrondissement on arrondissement.idArrondissement=oeuvre.idArrondissement WHERE oeuvre.idArrondissement="1"');
		//self::$database->query('SELECT oeuvre.titreOeuvre FROM oeuvre JOIN arrondissement on arrondissement.idArrondissement=oeuvre.idArrondissement WHERE oeuvre.idArrondissement=:id_arrondissement');

		$lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$unOeuvreParArr = new MOeuvres('',$ligne['titreOeuvre'],'','','','','','','','','','','','','','','','','','','','','','','');
			$OuvresParArr[] = $unOeuvreParArr;
		}
		return $OuvresParArr;

}//FIN FUNCTION listerOeuvresParArr
    
    /**
	 * @access public static
     * @author Gautier Piatek
	 * @return Array Tableau contenant les détails d'une oeuvre
	 */
	/*public static function detailsOeuvreParId($idOeuvre) {
		self::$database->query('
		SELECT oeuvre.idOeuvre, oeuvre.titreOeuvre, arrondissement.nomArrondissement, categorie.nomCategorie, artiste.prenom, artiste.nom, artiste.collectif, photo.nomPhoto 
		FROM oeuvre JOIN artiste ON oeuvre.idArtiste = artiste.idArtiste 
		JOIN arrondissement ON oeuvre.idArrondissement = arrondissement.idArrondissement 
		JOIN categorie ON oeuvre.idCategorie = categorie.idCategorie 
		JOIN est_identifie_par ON oeuvre.idOeuvre = est_identifie_par.idOeuvre 
		JOIN photo ON photo.idPhoto = est_identifie_par.idPhoto 
        WHERE oeuvre.idOeuvre = :idOeuvre'); 
        self::$database->bind(':idOeuvre', $idOeuvre);
		$lignes = self::$database->resultset();
		foreach ($lignes as $ligne) {
			$uneOeuvre = new MOeuvres($ligne['idOeuvre'],$ligne['titreOeuvre'],'','','','','','',$ligne['nomArrondissement'],'','','','','',$ligne['prenom'],$ligne['nom'],$ligne['collectif'],'',$ligne['photoArtiste'],$ligne['nomCategorie'],'','','','','');
			$oeuvres[] = $uneOeuvre;
		}
		return $oeuvres;
	}*/
    
}




?>