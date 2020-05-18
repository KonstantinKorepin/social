<?php /** @noinspection PhpUnusedAliasInspection */

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\PersonalRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;

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

        $storageUploads = storage_path('app/public/uploads/avatars/'.$id);
        $file = $request->file('avatar');
        $orFileName = 'avatar_'.$id.'_original.jpg';
        if ($file instanceof UploadedFile) {
            if (!file_exists($storageUploads)) {
                mkdir($storageUploads, 0775);
            }
            // загружаем файл
            //$path =
            $file->storeAs(
                'uploads/avatars/'.$id, $orFileName, 'public'
            );

//            // получаем файл для дальнейшей работы с ним
//            $file = asset('storage/app/public/'.$path);
        }



        return redirect()->route('personal', ['id' => $id]);
    }

    public function test(): void
    {
       //print phpinfo();
       //return;
    }


}
