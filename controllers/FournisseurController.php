<?php
class FournisseurController
{
    public function showAllFournisseurs()
    {
        $fournisseurs = Fournisseur::getAll();
        return $fournisseurs;
    }
}
