<?php

namespace risul\LaravelLikeComment\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'laravellikecomment_comments';

    /**
	 * Fillable array
     */
    protected $fillable = [];
}
