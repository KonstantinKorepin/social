<?php /** @noinspection PhpUnusedAliasInspection */

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\PersonalRequest;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{
    /**
     * @param $id
     * @return View
     */
    public function index($id): View
    {
        $personals = DB::table('personals')->where('id', $id)->first();
        return view('personal', ['personals' => $personals]);
    }

    /**
     * @param PersonalRequest $request
     * @return RedirectResponse
     */
    public function add(PersonalRequest $request): RedirectResponse
    {

        $id = $request->input('id');
        $name = $request->input('name');
        $surname = $request->input('surname');
        $gender = $request->input('gender');
        $maritalStatus = $request->input('maritalStatus');
        $edInst = $request->input('edInst');
        $birthday = $request->input('birthday');
        $status = $request->input('status');
        $about = $request->input('about');

//        echo "<pre>";
//            print_r($birthday);
//        echo "</pre>";
//        exit();

        DB::table('personals')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'surname' => $surname,
                'gender' => $gender,
                'maritalStatus' => $maritalStatus,
                'edInst' => $edInst,
                'birthday' => $birthday,
                'status' => $status,
                'about' => $about,
            ]);



        return redirect()->route('personal', ['id' => $id]);
    }


}
