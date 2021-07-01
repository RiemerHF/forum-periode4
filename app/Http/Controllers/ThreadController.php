<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThreadController extends Controller
{
    public function __invoke() {
        return view('forum', [
            'threads' => DB::table('threads')->get()
        ]);
    }

    public function index()
    {
        return view('forum', [
            'threads' => DB::table('threads')->get()
        ]);
        //return response(DB::table('threads')->get());
    }

    public function edit()
    {
        //
    }

    public function store(Request $request)
    {
        //Thread::create($request->only(['title', 'description', 'user_id']));
        $user_id = $request->input('user_id');
        $title = $request->input('title');
        $description = $request->input('description');
        $data=array('title'=>$title,'description'=>$description,'user_id'=>$user_id);
        DB::table('threads')->insert($data);
        return redirect('/', 201);
    }
}
