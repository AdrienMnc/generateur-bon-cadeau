<?php

/**
 * Classe produit
 */

class BonCadeau
{
    protected int $prix;
    protected string $nom_prenom_receveur;
    protected string $nom_prenom_offreur;
    protected string $date;
    protected string $numero_bon_cadeau;
    protected string $date_limite_utilisation;

    /**
     * Constructeur
     */


    public function __construct(int $prix, string $nom_prenom_receveur, string $nom_prenom_offreur, string $numero_bon_cadeau, string $date_limite_utilisation)
    {
        $this->prix = $prix;
        $this->nom_prenom_receveur = $nom_prenom_receveur;
        $this->nom_prenom_offreur = $nom_prenom_offreur;
        $this->date = date("Y/m/d");
        $this->numero_bon_cadeau = $numero_bon_cadeau;
        $this->date_limite_utilisation = $date_limite_utilisation;
    }

    /**
     * Getters
     */

    public function getPrix(): int
    {
        return $this->prix;
    }

    public function getNomPrenomReceveur(): string
    {
        return $this->nom_prenom_receveur;
    }

    public function getNomPrenomOffreur(): string
    {
        return $this->nom_prenom_offreur;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Setters
     */

    public function setNumeroBonCadeau(): string
    {
        return $this->numero_bon_cadeau = date("y.m." . rand(10, 99));
    }

    public function setDateLimiteUtilisation(): string
    {
        return $this->date_limite_utilisation = date("Y-m-d", strtotime("+1 year"));
    }

    /**
     * Affichage des données du produit
     */

    public function afficher()
    { ?>
        <ul>
            <li>Montant du bon: <?= $this->getPrix(); ?> €</li>
            <li>Nom et Prénom du bénéficiaire: <?= $this->getNomPrenomReceveur(); ?></li>
            <li>Le nom et le prénom de la personne offrant le bon: <?= $this->getNomPrenomOffreur(); ?></li>
            <li>La date du bon: <?= $this->getDate(); ?> </li>
            <li>Le numéro du bon: <?= $this->setNumeroBonCadeau(); ?> </li>
            <li>Dâte limite d'utilisation: <?= $this->setDateLimiteUtilisation(); ?> </li>
        </ul>
<?php }
}
