<?php

    function connect_to_database (){
        $servername= "localhost";
        $username= "root";
        $password="root";
        $databasename= "basetest01";

        try{
            $pdo=new PDO ("mysql:host=$servername; dbname=$databasename", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

            echo "Connected successfully <br>";
            return $pdo;
        }
        catch (PDOException $e) {
            echo "Connection failed:". $e->getMessage();
        }
    }
        
        $pdo=connect_to_database();

        $réponse= $pdo->query ('SELECT * FROM produit');
        while ($données = $réponse->fetch())
        {
            echo '<ul><li>'  .$données['nom']. '</li></ul>';
        }
?>