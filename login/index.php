<?php
$usuaris = [
    0 => ["usuari"=>"Manel","contrasenya"=>"manelet"],
    1 => ["usuari"=>"Joan","contrasenya"=>"joanet"],
    2 => ["usuari"=>"Francesc","contrasenya"=>"francesquet"]
];
$nom = $_POST["usuari"];
$contrasenya = $_POST["contrasenya"];
foreach($usuaris as $usuari){
    if($nom == $usuari["usuari"] && $contrasenya == $usuari["contrasenya"]){
        $missatge = "<p>Hola $nom.</p>";
        break;
    }
    else{
        $missatge = "<p>$nom no es troba registrat.</p>";
    }
}
echo $missatge;
?>