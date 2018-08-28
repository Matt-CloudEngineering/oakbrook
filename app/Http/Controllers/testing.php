<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class UserController extends Controller
{
    /**
     * Show a list of all of the available apartments
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::select('select * from available', [1]);

        return view('available.index', ['users' => $users]);
    }
}