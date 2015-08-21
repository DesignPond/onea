<?php namespace App\Onea\Page\Repo;

use App\Onea\Page\Repo\PageInterface;
use App\Onea\Page\Entities\Page as M;

class PageEloquent implements PageInterface{

    protected $page;

    public function __construct(M $page)
    {
        $this->page = $page;
    }

    public function getAll(){

        return $this->page->all();
    }

    public function getTree($key = null, $seperator = '  '){

        return $this->page->getNestedList('title', $key, $seperator);
    }

    public function getRoot(){

        return $this->page->whereNull('parent_id')->get();
    }

    public function find($id){

        return $this->page->with(['projet'])->findOrFail($id);
    }

    public function getBySlug($slug)
    {
        return $this->page->where('slug','=',$slug)->first();
    }

    public function buildTree($data)
    {
        return $this->page->buildTree($data);
    }

    public function create(array $data){

        $page = $this->page->create(array(
            'auteur'     => (isset($data['auteur']) ? $data['auteur'] : ''),
            'ouvrage'    => (isset($data['ouvrage']) ? $data['ouvrage'] : ''),
            'page'       => (isset($data['page']) ? $data['page'] : ''),
            'paragraphe' => (isset($data['paragraphe']) ? $data['paragraphe'] : ''),
            'projet_id'  => (isset($data['projet_id']) ? $data['projet_id'] : ''),
            'title'      => $data['title'],
            'content'    => $data['content'],
            'created_at' => date('Y-m-d G:i:s'),
            'updated_at' => date('Y-m-d G:i:s')
        ));

        if( ! $page )
        {
            return false;
        }

        if($data['parent_id'] > 0)
        {
            $parent = $this->page->findOrFail($data['parent_id']);
            $page->makeChildOf($parent);
        }

        return $page;

    }

    public function update(array $data){

        $page = $this->page->findOrFail($data['id']);

        if( ! $page )
        {
            return false;
        }

        $page->fill($data);

        $page->updated_at = date('Y-m-d G:i:s');
        $page->save();

        if($data['parent_id'] > 0)
        {
            $parent = $this->page->findOrFail($data['parent_id']);
            $page->makeChildOf($parent);
        }

        return $page;
    }

    public function delete($id){

        $page = $this->page->find($id);

        return $page->delete($id);
    }

}
