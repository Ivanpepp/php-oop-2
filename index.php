<?php 


/**
 * Online shop Class
 */
class OnlineShop
{
    protected $nome;
    protected $url;
    protected $online = true;

    // contruct
    /**
     * Online shop Class
     *
     * @param string $nome
     * @param string $url
     * @param boolean $online
     * 
     */
    protected function __construct($nome, $url,$online)
    {
        $this->nome = $nome;
        $this->url = $url;
        $this->online = $online;
    }

    
    protected function setOffline(){
        if($this->online){
            return $this->online = false;
        }
    }
    protected function setOnline(){
        if(!$this->online){
            return $this->online = true;
        }
    }

    protected function isOnline()
    {
        
        if($this->online){
            return 'il sito e` online';
        }
        return 'Il sito e` offline';
       
    }
    
   

}

class Utente {
    public $cognome;
    public $nome;
    public $indirizzo;
    public $codiceFiscale;

    public function __construct($cognome,$nome,$indirizzo,$codiceFiscale)
    {
        $this->cognome = $cognome;
        $this->nome = $nome;
        $this->indirizzo = $indirizzo;
        $this->codiceFiscale = $codiceFiscale;
         
    }
    public function cartaInserita($carta){
        foreach($carta as $dati){
            echo $dati;
        }
    }
}

class CartaCredito extends Utente{

    public $numeroCarta;

    /**
     * Undocumented function
     *
     * @param int $numeroCarta
     * @param string $cognome
     * @param string $nome
     * @param string $indirizzo
     * @param string $codiceFiscale
     */
    public function __construct($numeroCarta,$cognome,$nome,$indirizzo,$codiceFiscale){
        $this->numeroCarta = $numeroCarta;
        parent:: __construct($cognome,$nome,$indirizzo,$codiceFiscale);
    }

    public function isValida(){
        if(is_numeric($this->numeroCarta)){
            return true;
        }else{
            return false;
        }
    }

}



?>
