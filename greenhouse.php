<?php
require _once("db.php");
$plants_request = $bdd->prepare('SELECT * FROM Plant WHERE userID = $user_id');
$stmt = $bdd->prepareStatementForSqlObject($plants_request);
$plants_list= $stmt->execute();
foreach($plants_list as $plant) {
   echo $plant[id]."\t".
    $plant[name]."\t".
    $plant[description]."\t".
    $plant[notes]."\t".
    $plant[lastdate]."\t".
    $plant[nextdate]."\t".
    $plant[waterneed] ."\t".
    $plant[waterfrequency];
};


    
