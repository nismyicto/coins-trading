<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('home')->with('users', $users);
    }

    public function edit(User $user)
    {

        if (Gate::denies('admin-user')) {
            return redirect(route('index'));
        }

        return view('edit')->with([
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->coins = $user->coins + $request->coins;

        if ($user->save()) {
            $request->session()->flash('success', $user->name . ' has added coins');
        } else {
            $request->session()->flash('error', 'There was an error updating the user');
        }

        return redirect()->route('users.index');
    }

    public function store(Request $request, User $user)
    {
        $user->coins = $user->coins - $request->coins;

        if ($user->save()) {
            $request->session()->flash('success', $user->name . ' has added coins');
        } else {
            $request->session()->flash('error', 'There was an error updating the user');
        }

        return redirect()->route('users.index');
    }
}
