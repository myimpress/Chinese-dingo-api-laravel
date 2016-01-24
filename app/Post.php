<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @mixin \Eloquent
 * @mixin \Eloquent
 * @mixin \Eloquent
 */
class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['user_id', 'title', 'body'];

}
