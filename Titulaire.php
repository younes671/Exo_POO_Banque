<?php

        class Titulaire {
            private string $nom;
            private string $prenom;
            private DateTime $dateNaissance;
            private string $ville;
            private array $comptesTitulaire;
            
            
            public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville){
                $this->nom = $nom;
                $this->prenom = $prenom;
                $this->dateNaissance = new DateTime ($dateNaissance);
                $this->ville = $ville;
                $this->comptesTitulaire = [];
            }

            public function getNom(): string {return $this->nom;}
            public function getPrenom(): string {return $this->prenom;}
            public function getDateNaissance(): DateTime {return $this->dateNaissance;}
            public function getVille(): string {return $this->ville;}
            // public function getCompte(): Compte {return $this->compte;}
            public function getComptesTitulaire(): array {return $this->comptesTitulaire;}
 
            public function setNom($nom): string {return $this->nom = $nom;}
            public function setPrenom($prenom): string {return $this->prenom = $prenom;}
            public function setDateNaissance($dateNaissance): DateTime {return $this->dateNaissance = $dateNaissance;}
            public function setVille($ville): string {return $this->ville = $ville;}
            // public function setCompte($compte): Compte {return $this->compte = $compte;}
            public function setComptesTitulaire($comptesTitulaire){$this->comptesTitulaire = $comptesTitulaire; return $this;}


            public function addCompte(Compte $comptesTitulaire){
                $this->comptesTitulaire[] = $comptesTitulaire;
                // array_push($this->livre, $livre);
            }

            public function calculerAge() {
                $dateActuelle = new DateTime();
                $dateNaissance = $this->dateNaissance;
                $age = $dateActuelle->diff($dateNaissance);
                return $age->y;
             }

            public function afficherInfoTitulaire(){
                $result = "<h1>Information client : " . $this ." " . $this->calculerAge() . " ans</h1><br><ul>";

                foreach($this->comptesTitulaire as $compteTitulaire){
                    $result .= "<li><b>" . $compteTitulaire . "</b></li><br>";
                }
                $result .= "</ul>";
                return $result;
            }
           

            public function __toString(){
                return $this->nom ." " . $this->prenom;
            }

        }



?>