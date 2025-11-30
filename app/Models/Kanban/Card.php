<?php

namespace App\Models\Kanban;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'board_id',
        'column_id',
        'cardable_id',
        'cardable_type',
        'card_type_id',
        'sort_order',
        'meta',
        'is_active',
    ];

    protected $casts = [
        'meta' => 'array',
        'is_active' => 'boolean',
    ];

    // -----------------------------
    // Relationships
    // -----------------------------

    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    public function column()
    {
        return $this->belongsTo(Column::class);
    }

    public function type()
    {
        return $this->belongsTo(CardType::class, 'card_type_id');
    }

    public function cardable()
    {
        return $this->morphTo();
    }

    // -----------------------------
    // Scopes úteis
    // -----------------------------

    public function scopeInColumn($query, $columnId)
    {
        return $query->where('column_id', $columnId)->orderBy('sort_order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
