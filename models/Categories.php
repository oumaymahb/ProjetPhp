<?php
/**
 * Description of Categories
 *
 * @author oumayma
 */
class Categories {
    private $libelle;
    private $bd ;
 function __construct( $libelle,$conx)
    {
        $this->libelle = $libelle;
        $this->bd=$conx;
    }


    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
     public function ajouterCategorie(){
        $sql = "INSERT INTO `categorie`(`lib_cat`) VALUES (:lib)";
        $q = $this->bd->prepare($sql);
        $q->bindValue(':lib', $this->libelle);
        $q->execute();
        echo "well done";
    }
    public function getCategoryByLib($lib){
       
        $stmt = $this->bd->prepare("SELECT  id_cat  FROM categorie WHERE lib_cat= :lib ");
        $stmt->bindValue('lib' ,$lib);
        $res=$stmt->execute();
        return $res;
    }
}