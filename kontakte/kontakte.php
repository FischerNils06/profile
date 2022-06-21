<?php
/*
* Andy Dunkel
* Erweiterungsmodul für das Formmail-Script zur Speicherung der Daten
*
* uses dbclass.php
*/

$db = new dbaccess(kontakte.sql);

//Felder aus dem Formular auslesen
if (isset($_POST["vorname"]))         
    $form_vorname = $db->EscapeString($_POST["vorname"]); 
else $form_vorname = "";

if (isset($_POST["nachame"])) 
    $form_nachname = $db->EscapeString($_POST["nachname"]); 
else $form_nachname = "";

if (isset($_POST["meine_nachricht"])) 
    $form_meine_nachricht = $db->EscapeString($_POST["meine_nachricht"]);
else $form_meine_nachricht = "";

//Erklärung:
//Vorname = Name des Feldes im Formular


//SQL-Befehl erstellen - formulardaten = Tabellenname aus MySQL    
$sql = "INSERT INTO formulardaten (vorname, nachname, meine_nachricht)";
$sql .= " VALUES ('" . $form_vorname . "','" . $form_nachname . "','" . $form_meine_nachricht;
$sql .= "')";        

$db->ExecuteSQL($sql);            
?>