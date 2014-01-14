<?php

class CMS {

    public function selectPage($id,$db){
        echo "<div class=\"jumbotron\">";
        include_once $this->getCorrectPage($id,$db);
        echo "</div>";
    }

    private function getCorrectPage($id,$db){
        $mysqliObject = $db->query ("SELECT * FROM Menu;");

        while($row = $mysqliObject->fetch_array() ){
            if($row["MenuID"]==$id){
                $page = $row["Name"];
                return $page.".inc.php";

            }
        }

        return "default.inc.php";
    }


}
?>