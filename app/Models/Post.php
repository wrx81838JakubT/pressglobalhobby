<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Http\Models\Cathegory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
	
	protected $fillable = [
		'title',
		'cathegory_id',
		'cathegory_name',
		'header',
		'author',
		'body',
		'image',
		'image_desc',
		'source'
	];
	
	public function cathegory(): BelongsTo
	{
		return $this->belongsTo(Cathegory::class);
	}
}
