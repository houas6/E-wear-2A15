<?PHP
	class Stock{
		private  $idCom = null;
		private  $idP = null;
		private  $dispo= null;
		private  $nbrarticle= null;
		private  $datearr = null;
		
		function __construct( $nbrarticle,  $dispo,  $datearr){
	
			$this->nbrarticle=$nbrarticle;
			$this->dispo=$dispo;
			$this->datearr=$datearr;
			
		}
		
		function getidCom() {
			return $this->idCom;
		}
        function getidP() {
			return $this->idP;
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
		

		function setnbrarticle( $nbrarticle) {
			$this->nbrarticle=$nbrarticle;
		}
		function setdispo( $dispo) {
			$this->dispo;
		}
		function setdatearr( $datearr) {
			$this->datearr;
		}
		
		
	}
?>