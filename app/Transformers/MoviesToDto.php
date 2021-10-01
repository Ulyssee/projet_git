<?php namespace App\Transformers;

use App\Models\Movies;

class MoviesToDto
{
    public static function provideTransformer(Movies $movie)
    {
        switch ($movie->type) {
            case'Comedy':
                return ['id' => $movie->id, 'name' => $movie->name, 'category' => 'Comedy / Drama', 'time' => $movie->timestamps,];
            default:
                return ['id' => $movie->id, 'name' => $movie->name, 'category' => $movie->type, 'time' => $movie->timestamps,];
            case'Mystery/Crime':
                return ['id' => $movie->id, 'name' => $movie->name, 'category' => 'Mystery / Crime', 'time' => $movie->timestamps,];
            default:
                return ['id' => $movie->id, 'name' => $movie->name, 'category' => $movie->type, 'time' => $movie->timestamps,];
        }
    }
}