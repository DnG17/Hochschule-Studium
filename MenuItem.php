<?php

class MenuItem{

	private $id;
	private $bezeichnung;

	public function __construct($id, $bezeichnung){

        $this->id = $id;
        $this->bezeichnung= $bezeichnung;

    }
    public function getId(){
        return $this->id;
    }

    public function getBezeichnung(){
        return $this->bezeichnung;
    }


    public function getItem(){

        return "<a href=\"website.php?id=".$this->getId()."\">".$this->getBezeichnung()."</a>";

    }
}

?>