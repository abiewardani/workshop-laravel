<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * Instantiate a new HomeController instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function hello()
    {
        echo "hi nama saya abi";
    }

    public function cetakNama($nama)
    {
        echo "hi nama saya ".$nama;
    }
}

?>