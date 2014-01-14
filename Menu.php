<?php

include_once "MenuItem.php";

class Menu{

	private $itemarray = array();

	public function createMenu($db){

    $this->getAllItems($db);

	echo "
			<ul class=\"nav nav-justified navbar-inverse\">";
				foreach($this->itemarray as $item){
	
					echo "<li class=\"active\">";
						echo $item->getItem();
					echo "</li>";
				}
		echo "</ul>";

}

	private function getAllItems($db){

		$mysqliObject = $db->query('SELECT * FROM Menu;');
	
		while($row = $mysqliObject->fetch_array() ){
	
			$itemid =  $row["MenuID"];
			$itembezeichnung = $row["Name"];

			$this->itemarray[$itemid] = new MenuItem($itemid, $itembezeichnung);
		}


	}

}

?>