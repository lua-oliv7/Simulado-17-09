<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movimentacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantidade',
        'data_movimentacao',
        'tipo',
        'produto_id',
        'user_id'
    ];

    public function Produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }

        public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}