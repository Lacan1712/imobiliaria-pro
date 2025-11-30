<?php

namespace App\Models\Kanban;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Board extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function columns(): HasMany
    {
        return $this->hasMany(Column::class)->orderBy('sort_order');
    }

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }

}
