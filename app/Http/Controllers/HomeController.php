<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TreeEntryLang;
use App\Models\TreeEntry;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $parentEntries = TreeEntryLang::with('parentRel')->get();  
 
        return view('index',[
            'parentEntries' => $parentEntries
        ]);
    }

    public function home()
    { 
        return view('home');
    }

    public function ajaxRequest()
    { 
        $parentEntries = DB::table('tree_entry')
                            ->join('tree_entry_lang as I', 'I.entry_id', '=', 'tree_entry.entry_id')
                            ->orwhere('parent_entry_id',0)
                            ->get();
                      

 //dd($parentEntries);
        return view('ajax',[
            'parentEntries' => $parentEntries
        ]);
    }
}
