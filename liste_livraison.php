<table border="1">
<tr>
        <th>ID</th>
    <th>Date Livraison</th>
    <th>Expediteur</th>
    <th>Destinataire</th>
    <th>telephone du destinateur</th>
    <th>Ville Depart</th>
    <th>Ville Arrivees</th>
    <th>Poids</th>-
    <th>Livraison Express</th>
    <th>Prix</th>
    <?php
        require("config.php");
        $conn=mysqli_connect($bd,$serveur,$username,$password) or die("echoué");
        $sql="select * from livrison;";
        $res=mysqli_query($conn,$sql);
        $nb=mysqli_num_rows($res);
        for ($i=0; $i <$nb ; $i++) { 
            $enreg=mysqli_fetch_array($res);
        
        ?>
           <tr>
        <td><?php echo $enreg[0] ?></td>
        <td><?php echo $enreg[1] ?></td>
        <td><?php echo $enreg[2] ?></td>
        <td><?php echo $enreg[3] ?></td>
        <td><?php echo $enreg[4] ?></td>
        <td><?php echo $enreg[5] ?></td>
        <td><?php echo $enreg[6] ?></td>
        <td><?php echo $enreg[7] ?></td>
        <td><?php if ($enreg([8]=='O')) echo 'Oui' ; else echo 'Non'; ?></td>
        <td><?php echo $enreg[9] ?></td>


    </tr>
    <?php
        }
    ?>

</table>