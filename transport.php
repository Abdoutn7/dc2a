<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="fonctions.js"></script>
</head>
<body>
    <form action="livraison.php" method="post" name="f1">
        
        <label for="">Date:</label><input type="text" name="jour" id="jour">/<input type="text" name="mois" id="mois">/<input type="text" name="annes" id="annees"><br>
        <label for="">Expediteur:</label><input type="text" name="expediteur" id="expediteur">
        <label for="">Destinataire:</label><input type="text" name="destinataire" id="destinataire"> <br>
        <label for="">De:</label><select name="depart" id="depart">
        <?php
        require("config.php");
        $conn=mysqli_connect($bd,$serveur,$username,$password) ;
        $sql="select libelle,id from ville;";
        $res=mysqli_query($conn,$sql);
        $nb=mysqli_num_rows($res);
        for ($i=0; $i <$nb ; $i++) { 
            $enreg1=mysqli_fetch_array($res);  
        ?>      
    <option value="<?php echo $enreg["id"];?>"><?php echo $enreg["libelle"];?></option>
    <?php
        }
    ?>
 </select>
        <label for="">Vers:</label><select name="arrivee" id="arrivee">
        <?php
        $sql="select libelle,id from ville;";
        $res1=mysqli_query($conn,$sql);
        $nb=mysqli_num_rows($res);
        for ($i=0; $i <$nb ; $i++); { 
            $enreg1=mysqli_fetch_array($res1);
        ?>
        
    <option value="<?php echo $enreg1["id"] ?>"><?php echo $enreg1["libelle"] ?></option>
    <?php
        }
    ?>
        </select><br>
        <label for="">Poids du colis:</label><input type="text" name="poids" id="poids">
        <label for="">telephone de destinateur:</label><input type="text" name="tel" id="tel">
        <label for="">Livraison Express:</label> <input type="checkbox" name="express" id="express" value="O">
        <input type="submit" value="Ajouter" >
    </form>
</body>
</html>