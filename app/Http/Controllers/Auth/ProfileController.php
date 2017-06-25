<?php
/**
 * Created by PhpStorm.
 * User: nitpo
 * Date: 24/06/2017
 * Time: 10:52 AM
 */

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $user = Auth::user();
        if ($user != null) {
            return view('auth.profile', ['user' => $user]);
        } else {
            return redirect('/');
        }
    }

    public function update($id, Request $request){
        $user = $this->getUserById($id);
        $user->name = $request->input('name');
        $user->save();
        return $this->profile();
    }
     /**
     * Fetch user
     * (You can extract this to repository method)
     *
     * @param $id
     * @return mixed
     */
    public function getUserById($id)
    {
        return User::find($id)->firstOrFail();
    }
}
