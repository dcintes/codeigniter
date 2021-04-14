<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class NoticiesApi extends ResourceController
{
    protected $modelName = 'App\Models\NoticiesModel';
    protected $format    = 'json';

    public function noticies($page=1)
    {
        return $this->respond($this->model->paginate(10,"g1",$page));
    }

    public function noticia($id)
    {
        return $this->respond($this->model->find($id));
    }

    public function categoria($categoria=null, $page=1)
    {
        return $this->respond($this->model->perCategoria($categoria,$page));
    }
    
}