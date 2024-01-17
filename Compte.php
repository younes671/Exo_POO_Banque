<?php

        class Compte {
            private string $libelle;
            private int $soldeInitial;
            private string $devise;
            private Titulaire $titulaire;
            
            public function __construct(string $libelle, int $soldeInitial, string $devise, Titulaire $titulaire){
                $this->libelle = $libelle;
                $this->soldeInitial = $soldeInitial;
                $this->devise = $devise;
                $this->titulaire = $titulaire;
                $this->titulaire->addCompte($this);
            }

            public function getLibelle(): string {return $this->libelle;}
            public function getSoldeInitial(): int {return $this->soldeInitial;}
            public function getDevise(): string {return $this->devise;}
            public function getTitulaire(): Titulaire {return $this->titulaire;}

            public function setLibelle($libelle) {return $this->libelle = $libelle;}
            public function setSoldeInitial($soldeInitial) {return $this->soldeInitial = $soldeInitial;}
            public function setDevise($devise) {return $this->devise = $devise;}
            public function setTitulaire(Titulaire $titulaire) {return $this->titulaire = $titulaire;}

           
            public function crediterCompte($montant){
                $this->soldeInitial += $montant;
            }

            public function debiterCompte($montant){
                if($this->soldeInitial >= $montant){
                    $this->soldeInitial -= $montant;
                }else {
                    echo "Solde insuffisant";
                }
            }

            
            public function effectuerVirement($compteDestinataire, $montant) {
                echo "<ul>";
                if ($this->soldeInitial >= $montant) {
                    $this->soldeInitial -= $montant;
                    $compteDestinataire->crediterCompte($montant);
                    echo "<li><b>Montant virement : " . $montant . " €</b></li>";
                }else{
                    echo "<li><b>Dernier virement : Solde insuffisant</b></li>";
                }
                echo "</ul>";
            }

            public function afficherInfosCompte(){
                echo "<h1>Titulaire du compte : " . $this->titulaire->getnom() . " " . $this->titulaire->getPrenom() . "</h1><br>";
                echo "<ul>";
                echo "<li><b>Compte bancaire : $this </b></li><br>";
                echo "</ul>";
                }

            public function __toString(){
                return $this->libelle . " " . $this->soldeInitial . " " . $this->devise;
            }

        }



?>