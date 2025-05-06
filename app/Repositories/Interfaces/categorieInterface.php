<?php
namespace App\Repositories\Interfaces;
use App\Models\Categorie;

Interface CategorieInterface
{
    public function index();
    public function create(array $request);
    public function update(array $request, $id);
    public function delete($id);
    public function getCategorieByName($name);
}