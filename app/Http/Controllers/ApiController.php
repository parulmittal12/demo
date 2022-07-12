<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TreeEntryLang;
use App\Models\TreeEntry;

class ApiController extends Controller
{
   
    public function getStructureData(int $Id)
    { 
       
        $send = array();
        $parentEntries = TreeEntry::where('parent_entry_id',$Id)->get();  
 
        foreach($parentEntries as $key=> $value) {
            $send[$key] = TreeEntryLang::where('entry_id',$value->entry_id)->get();
        }
        return $this->sendSuccessAPIResponse([
            'details' => $send
        ]);
        
    }
}
