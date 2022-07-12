<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class TreeEntryLang extends Model
{
    const TABLE = 'tree_entry_lang';
    const ID = 'entry_id';
    const LANG = 'lang';
    const NAME = 'name';

    protected $table = "tree_entry_lang";

    public function parentRel() {
        return $this->hasMany(TreeEntry::class, TreeEntry::PARENT_ID, self::ID);
    }

    public function childRel()
    {
        return $this->belongsTo(TreeEntry::class, self::ID, TreeEntry::PARENT_ID);
    }
}
