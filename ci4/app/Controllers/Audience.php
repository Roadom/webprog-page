<?php

namespace App\Controllers;

use App\Models\AudienceModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Audience extends BaseController
{
    public function index()
    {
        $model = model(AudienceModel::class);

        $data = [
            'comments'  => $model->getAnswers(),
            'title' => 'Comments Archive',
        ];

        return view('templates/header', $data)
            . view('comments/index');
    }

    public function show($slug = null)
    {
        $model = model(AudienceModel::class);
        $data['comments'] = $model->getAnswers($slug);

        if (empty($data['comments'])) {
            throw new PageNotFoundException('Cannot find the comments item: ' . $slug);
        }

        $data['alias'] = $data['comments']['alias'];


        return view('comments/view', $data);
        return view('templates/footer');
    }

    public function new()
    {
        helper('form');
        return view('templates/header', ['title' => 'Post a Comment'])
            . view('comments/create');

    }

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['alias', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'alias' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(AudienceModel::class);

        $model->save([
            'alias' => $post['alias'],
            'slug'  => url_title($post['alias'], '-', true),
            'body'  => $post['body'],
        ]);

        return view('templates/header', ['title' => 'Post a Comment'])
            . view('comments/success')
            . view('templates/footer');
    }
}