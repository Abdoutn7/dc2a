<?php
$jour = $_POST["jour"];
$mois = $_POST["mois"];
$annes = $_POST["annes"];
$expediteur = $_POST["expediteur"];
$destinataire = $_POST["destinataire"];
$depart = $_POST["depart"];
$arrivee = $_POST["arrivee"];
$poids = (float)$_POST["poids"];
$express = $_POST["arrivee"];
$date = $jour . "/" . $mois . "/" . $annes;
require "config.php";
$conn = mysqli_connect($bd, $serveur, $username, $password);
$sql = "select * from livraison where $depart!= $arrivee ";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    if ($poids < 1 and isset($express)) {
        $prix = 8 * 1.5;
        $sql2="insert into livraison(date_liv,expediteur,destinataire,telephone,id_ville_depart,id_ville_arrivee,poids,express,Prix) values('$date','$expediteur','$destinataire','$tele','$depart','$arrivee','$poids','$express','$prix')";
        $res2 = mysqli_query($conn, $sql2);
        if(mysqli_affected_rows($conn)>0){
            echo"Livraison enregistrée avec succés";
        }
    } elseif ($poids < 1) {
        $prix = 8;
        $sql4="insert into livraison(date_liv,expediteur,destinataire,telephone,id_ville_depart,id_ville_arrivee,poids,express,Prix) values('$date','$expediteur','$destinataire','$tele','$depart','$arrivee','$poids','$express','$prix')";
        $res4 = mysqli_query($conn, $sql4);
        if(mysqli_affected_rows($conn)>0){
            echo"Livraison enregistrée avec succés";
        }
    } elseif ($poids >= 1 and isset($express)) {
        $sql1 = "select d.distance from distance d,livraison l where l.id_ville_arrivee=d.id_ville_arrivee and l.id_ville_depart=d.id_ville_depart";
        $res1 = mysqli_query($conn, $sql1);
        $l = mysqli_fetch_array($res1);
        if (mysqli_num_rows($res1) > 0) {
            $s1 = $poids * 0.001;
            $s2 = $l[0] * 00.1;
            $s3 = $s1 + $s2;
            $prix=$s3*1.5;
            $sql3="insert into livraison(date_liv,expediteur,destinataire,telephone,id_ville_depart,id_ville_arrivee,poids,express,Prix) values('$date','$expediteur','$destinataire','$tele','$depart','$arrivee','$poids','$express','$prix')";
            $res3 = mysqli_query($conn, $sql3);
            if(mysqli_affected_rows($conn)>0){
                echo"Livraison enregistrée avec succés";
            }
        }
    }elseif ($poids >= 1) {
        $sql2 = "select d.distance from distance d,livraison l where l.id_ville_arrivee=d.id_ville_arrivee and l.id_ville_depart=d.id_ville_depart";
        $res2 = mysqli_query($conn, $sql2);
        $l = mysqli_fetch_array($res2);
        if (mysqli_num_rows($res1) > 0) {
            $s1 = $poids * 0.001;
            $s2 = $l[0] * 00.1;
            $prix=$s1 + $s2;
            $sql5="insert into livraison(date_liv,expediteur,destinataire,telephone,id_ville_depart,id_ville_arrivee,poids,express,Prix) values('$date','$expediteur','$destinataire','$tele','$depart','$arrivee','$poids','$express','$prix')";
            $res5 = mysqli_query($conn, $sql5);
            if(mysqli_affected_rows($conn)>0){
                echo"Livraison enregistrée avec succés";
            }
        }
    }
}
