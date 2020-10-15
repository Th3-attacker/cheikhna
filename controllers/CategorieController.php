<?php
class CategorieController
{
    public function showAllCategories()
    {
        $categories = Categorie::getAll();
        return $categories;
    }
    public function updateCategories()
    {
    }
    public function addCategories()
    {
        if (isset($_POST['submit'])) {
            $data = [
                'category-name' => $_POST['category-name']
            ];
            $result = Categorie::add($data);
        }
    }
}
