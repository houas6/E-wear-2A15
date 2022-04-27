<?PHP
	class Stock{
		
		private  $produit = null;
		private  $dispo= null;
		private  $nbrarticle= null;
		private  $datearr = null;
		
		function __construct( $produit,$dispo,  $nbrarticle,  $datearr){
			$this->produit=$produit;
			$this->dispo=$dispo;
			$this->nbrarticle=$nbrarticle;
			$this->datearr=$datearr;
			
		}
		
		
        function getproduit() {
			return $this->produit;
		}
		function getnbrarticle() {
			return $this->nbrarticle;
		}
		
		function getdispo(){
			return $this->dispo;
		}
		function getdatearr() {
			return $this->datearr;
		}
		
		function setproduit( int $produit) {
			$this->produit=$produit;
		}
		function setnbrarticle(int $nbrarticle) {
			$this->nbrarticle=$nbrarticle;
		}
		function setdispo(string $dispo) {
			$this->dispo=$dispo;
		}
		function setdatearr(string $datearr) {
			$this->datearr=$datearr;
		}
		
		
	}
?>