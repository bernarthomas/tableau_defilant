<?php

class Table
{
    /**
     * @var array
     */
    private $titres;

    /**
     * @var array
     */
    private $donnees;

    /**
     * Constructeur
     *
     * @param array $titres
     * @param array $donnees
     */
    public function __construct(array $titres, array $donnees)
    {
        $this->titres = $titres;
        $this->donnees= $donnees;
    }

    /**
     * Retourne le code html5 pour rendre la table
     *
     * @return string
     */
    public function affiche()
    {
        //https://codepen.io/nikhil8krishnan/pen/WvYPvv
        $table = '<table><tr>';
        foreach ($this->titres as $titre) {
            $table .= "<th>$titre</th>";
        }
        $table .= '</tr><table>';
        foreach ($this->donnees as  $valeurs) {
            $table .= '<tr>';
            foreach($valeurs as $valeur) {
                $table .= "<td>$valeur</td>";
            }
            $table .= '</tr>';
        }
        $table .= '</table>';

        return $table;
    }
}