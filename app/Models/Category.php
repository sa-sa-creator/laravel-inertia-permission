<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'cate_name',
        'cate_description',
    ];
    protected $primaryKey = 'cate_id';

    public function owner(): BelongsTo {
        return $this->belongsTo(
            \App\Models\User::class,
            'by_user_id');
    }
}
