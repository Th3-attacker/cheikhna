<?php

class Categorie
{
    public static function getAll()
    {
        $stmt = Database::connect()->prepare('SELECT * FROM categories');
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function update()
    {
        $db = Database::connect()->prepare('UPDATE categories SET id=?,name=?,admin_id=? where id="id" ');
        $db->execute();
        return $db->fetchAll();
    }
    public static function add($data)
    {
        $add = Database::connect()->prepare('INSERT into categories( name,admin_id) value (:category-name,:admin_id)');
        $add->bindParam(':name', $data['category-name']);
    }
}
