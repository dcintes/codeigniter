<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticiesModel extends Model
{
    protected $table = 'noticies';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    public function perCategoria($categoria,$page)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('noticies');
        $builder->select('*');
        $builder->join('categoria_noticia', 'categoria_noticia.id_noticia = noticies.id');
        $builder->join('categories', 'categories.id = categoria_noticia.id_categoria');
        $builder->where('categories.nom', $categoria);
        $query = $builder->get(($page-1)*10,10);

        return $query->getResult();
    }

}