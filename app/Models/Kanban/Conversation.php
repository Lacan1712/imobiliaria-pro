<?php

namespace App\Models\Kanban;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Conversation extends Model
{
    protected $fillable = [
        'customer_id',
        'channel',
        'external_id',
        'last_message_at',
        'unread_count',
        'status',
    ];

    protected $casts = [
        'last_message_at' => 'datetime',
        'unread_count'    => 'integer'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function card()
    {
        return $this->morphOne(Card::class, 'cardable');
    }
}
