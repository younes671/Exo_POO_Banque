<?php

        class Titulaire {
            private string $nom;
            private string $prenom;
            private DateTime $dateNaissance;
            private string $ville;
            // private Compte $compte;
            private array $compteTitulaire;
            
            public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville){
                $this->nom = $nom;
                $this->prenom = $prenom;
                $this->dateNaissance = new DateTime ($dateNaissance);
                $this->ville = $ville;
                // $this->compte = $compte;
                $this->compteTitulaire = [];
            }

            public function getNom(): string {return $this->nom;}
            public function getPrenom(): string {return $this->prenom;}
            public function getDateNaissance(): DateTime {return $this->dateNaissance;}
            public function getVille(): string {return $this->ville;}
            // public function getCompte(): Compte {return $this->compte;}
            public function getCompteTitulaire(): array {return $this->compteTitulaire;}
 
            public function setNom($nom): string {return $this->nom = $nom;}
            public function setPrenom($prenom): string {return $this->prenom = $prenom;}
            public function setDateNaissance($dateNaissance): DateTime {return $this->dateNaissance = $dateNaissance;}
            public function setVille($ville): string {return $this->ville = $ville;}
            // public function setCompte($compte): Compte {return $this->compte = $compte;}
            public function setCompteTitulaire($compteTitulaire){$this->compteTitulaire = $compteTitulaire; return $this;}


            public function addCompte(Compte $compteTitulaire){
                $this->compteTitulaire[] = $compteTitulaire;
                // array_push($this->livre, $livre);
            }

           

            public function __toString(){
                return $this->nom ." " . $this->prenom;
            }

        }



?>