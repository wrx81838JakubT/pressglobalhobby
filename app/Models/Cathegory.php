<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Cathegory extends Model
{
    /** @use HasFactory<\Database\Factories\CathegoryFactory> */
    use HasFactory, Notifiable;
	
	protected $fillable = [
		'name',
		'cathegory_id',
		'parent'
	];
	
	public function parent_cathegory(): HasOne
	{
		return $this->hasOne(Cathegory::class);
	}
	
	public function cathegory(): BelongsTo
	{
		return $this->belongsTo(Cathegory::class);
	}
	
	public function posts(): HasMany
	{
		return $this->hasMany(Post::class);
	}
}
