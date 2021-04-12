<?php

namespace App\Controllers;

use App\Models\NoticiesModel;

class Noticies extends BaseController
{
    public function index()
    {
        $noticiesModel = new NoticiesModel();

        $data['noticies'] = $noticiesModel->findAll();

        return view('noticies',$data);
    }

    public function noticia($id = null)
    {
        $noticiesModel = new NoticiesModel();

        $data['noticia'] = $noticiesModel->find($id);

        return view('noticia',$data);
    }
}