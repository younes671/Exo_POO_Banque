<?php

        class Titulaire {
            private string $nom;
            private string $prenom;
            private string $dateNaissance;
            private string $ville;
            private Compte $compte;
            
            public function __construct(string $libellé, int $soldeInitial, string $devise, Titulaire $titulaire){
                $this->libellé = $libellé;
                $this->soldeInitial = $soldeInitial;
                $this->devise = $devise;
                $this->titulaire = $titulaire;
            }

            public function getLibellé(): string {return $this->libellé;}
            public function getSoldeInitial(): int {return $this->soldeInitial;}
            public function getDevise(): string {return $this->devise;}
            public function getTitulaire(): Titulaire {return $this->titulaire;}

            public function setLibellé($libellé) {return $this->libellé = $libellé;}
            public function setSoldeInitial($soldeInitial) {return $this->soldeInitial = $soldeInitial;}
            public function setDevise($devise) {return $this->devise = $devise;}
            public function setTitulaire(Titulaire $titulaire) {return $this->titulaire = $titulaire;}

           

            // public function __toString(){
            //     return $this->firstName ." " . $this->name;
            // }

        }



?>