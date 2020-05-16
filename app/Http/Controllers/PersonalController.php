<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PersonalController extends Controller
{
    /**
     * @param $id
     * @return View
     */
    public function index($id): View
    {
//        echo "<pre>";
//            print_r($id);
//            print_r("Personal");
//        echo "</pre>";
//        exit();
        $id = 1;

        return view('personal');
    }
}
