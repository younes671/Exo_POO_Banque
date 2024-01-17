<?php
        spl_autoload_register(function ($class){
            require $class . '.php';
        });


        $titulaire = new Titulaire("Dupont", "Dupont", "01-01-1990", "Strasbourg");
        $compte1 = new Compte("Compte Courant", 100, "€uros", $titulaire);
        $compte2 = new Compte ("Livret A", 10000, "€uros", $titulaire);

        // echo $titulaire->afficherInfoTitulaire();
        
        $compte1->crediterCompte(200);
        $compte2->crediterCompte(25000);

        
        echo $titulaire->afficherInfoTitulaire();
             $compte1->effectuerVirement($compte2, 300);
        echo $titulaire->afficherInfoTitulaire();

             
        echo $compte1->afficherInfosCompte();

?>