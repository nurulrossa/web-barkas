<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LevelFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // mengecek apakah sudah login
        if (!session()->get('logged_in')) {
            return redirect()->to('login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}

?>