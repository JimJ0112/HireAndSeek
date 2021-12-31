

<?php



$Accounts = array(

    array("John Carlo Saez","Level 2","Ratings: 5","asdsadsa","Php 500.00"),
    array("Razel Ruegas","Level 3","Ratings: 5","asdsadasd","Php 600.00"),
    array("Master Roki","Level 3","Ratings: 5","dfgrtygeg","Php 700.00"),
    array("Yujin Valentos","Level 3","Ratings: 5","bvnjytj","Php 800.00"),
    array("safdasf","Level 5","Ratings: 5","tryfhgf ","Php 1000.00")
    );


    echo json_encode($Accounts);
/*
foreach($PhpArrayObj as $key => $value){
    echo $key."=>".$value."<br>";
}
*/




//$xml = new SimpleXMLElement('<root/>');
//array_walk_recursive($AccountName,array($xml,'addChild'));
//echo " xml created";


/*
function generateXML($data){
    $name = $data["name"];
    

    //create xml 
    $xmlDoc = new DOMDocument();
    $root = $xmlDoc->appendChild($xmlDoc->createElement("Account"));
    $root->appendChild($xmlDoc->createElement("name",$name));

    foreach($data["name"] as $account){
        if(!empty($account)){
            $user = $user->appendChild($xmlDoc->createElement("Account"));
            foreach($account as $key=>$val){   
            $user->appendChild($xmlDoc->createElement($key,$val));
            }
        }

    }
    

    header("Content-Type: text/plain");

    $xmlDoc->formatOutput = true;

    $file_name = str_replace(" ","_",$name).".xml";
    $xmlDoc->save($file_name);
    echo"xml created";

    return $file_name;
}

generateXML($AccountName);

*/



?>




