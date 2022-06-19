<?php 
session_start();

class Production
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getProduction(){
		$q = $this->con->query("SELECT p.id, p.object, p.quantity, p.price, p.date, p.description FROM production p");
		
		$production = [];
		if ($q->num_rows > 0) {
			while($row = $q->fetch_assoc()){
				$production[] = $row;
			}
		}

		return ['status'=> 202, 'message'=> $production];
	}
}

if (isset($_POST['GET_PRODUCTION'])) {
	$p = new Production();
	echo json_encode($p->getProduction());
	exit();
	
}

?>