<?php
 $jour=$_POST["jour"];
 $mois=$_POST["mois"];
 $annes=$_POST["annes"];
 $expediteur=$_POST["expediteur"];
 $destinataire=$_POST["destinataire"];
 $depart=$_POST["depart"];
 $arrivee=$_POST["arrivee"];
 $poids=$_POST["poids"];
 $express=$_POST["arrivee"];
 $date=$jour."/".$mois."/".$annes;
 require("config.php");
 $conn=mysqli_connect($bd,$serveur,$username,$password) ;
 $sql="select * from livrison where $depart!= $arrivee ;";
 $res=mysqli_query($conn,$sql);
 $nb=mysqli_num_rows($res);
    if($pois<1){
        $prix=8;
    }
    elseif($pois>1){
       $prix=$prix+($prix*0.001);   
    }
    if(isset($express)){
        $prix=$prix*1.5;

    }
    
    $sql1="insert into livrison  valus('$date','$expediteur','$destinataire','$tele','$depart','$arrivee','$poids','$express','$prix')";
    $res1=mysqli_query($conn,$sql1);
    if(mysqli_affected_rows($conn)>0){
        echo"Livraison enregistrée avec succés";
    } 
?>