<?php namespace App\Onea\Page\Repo;

interface PageInterface {

    public function getAll();
    public function find($id);
    public function buildTree($data);
    public function getBySlug($slug);
    public function create(array $data);
    public function update(array $data);
    public function delete($id);

}
