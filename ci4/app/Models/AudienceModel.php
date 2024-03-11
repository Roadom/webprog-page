<?php

namespace App\Models;

use CodeIgniter\Model;

class AudienceModel extends Model
{
    protected $table = 'answers';
    protected $allowedFields = ['alias', 'slug', 'body'];

    public function getAnswers($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}