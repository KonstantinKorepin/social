<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\PersonalRequest;

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

    /**
     * @return Void
     */
    public function add(PersonalRequest $request): Void
    {
//        $validation = $request->validate([
//            'name' => 'min:3|max:50',
//            'surname' => 'min:3|max:50'
//        ]);

//        $name = $request->input('name');
//        $surname = $request->input('surname');
//        $gender = $request->input('gender');
//        $birthday = $request->input('birthday');

        //dd($name.'-'.$surname.'-'.$gender.'-'.$birthday);
//        dd($surname);
//        dd($gender);
//        dd($birthday);
//        echo "<pre>";
//            print_r($request);
//            //print_r("Personal");
//        echo "</pre>";
//        exit();
        //$id = 1;

        return;
    }


}
