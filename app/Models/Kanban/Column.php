<?php

namespace App\Models\Kanban;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Column extends Model
{
    protected $fillable = [
        'board_id',
        'title',
        'sort_order',
        'color',
    ];

    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class)->orderBy('sort_order');
    }
}
