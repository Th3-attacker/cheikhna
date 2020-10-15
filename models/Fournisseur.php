<?php

class Fournisseur
{
    public static function getAll()
    {
        $stmt = Database::connect()->prepare('SELECT fournisseurs.id,fournisseurs.lastname_f,fournisseurs.firstname_f,
        fournisseurs.phone_f , admins.lastname FROM fournisseurs inner join admins ON fournisseurs.admin_id = admins.id');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
