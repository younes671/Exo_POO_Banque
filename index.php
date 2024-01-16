<?php
        spl_autoload_register(function ($class){
            require $class . '.php';
        });


        $titulaire = new Titulaire("Dupont", "Dupont", "01-01-1990", "Strasbourg");
        $compte = new Compte("Compte Courant", 100, "€uros", $titulaire);

        echo $compte;

    //    $compte = new Compte ("Livret A", 10000, "€uros", )

?>