<?php

namespace App\Controllers;

class Me extends BaseController
{
    public function main()
    {
        $header = view('templates/header');
        $main = view('me/main');

        // Combine the header and main content
        $data['content'] = $header . $main;

        // Combine all content (header, main, footer)
        $fullContent = $header . $main;
        return $fullContent;
    }
}