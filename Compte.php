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

           

            public function __toString(){
                return $this->libelle . " " . $this->soldeInitial . " " . $this->devise;
            }

        }



?>