<?php
class Product
{

    public static function getAll()
    {
        $stmt = Database::connect()->prepare('SELECT p.id,p.name_p,c.name,p.price
        , p.qty,p.description,a.lastname,f.lastname_f
         FROM products AS p inner join categories AS c On p.category_id=c.id  inner join admins AS a ON p.admin_id=a.id 
          inner join Fournisseurs AS f ON p.fournissur_id=f.id');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
