<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class TreeEntry extends Model
{
    const ID = 'entry_id';
    const PARENT_ID = 'parent_entry_id';

    protected $table = "tree_entry";

    public function parentRel() {
        return $this->hasOne(TreeEntryLang::class, TreeEntryLang::ID, self::ID);
    }

    public function booking()
    {
        return $this->belongsTo(TreeEntryLang::class, self::PARENT_ID, TreeEntryLang::ID);
    }

}
