<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    //with di gunakan untuk mengambil data dari model yang lain menggunakan eager loading
    protected $with = ['author', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters)
    {
        //versi isset
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'LIKE', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'LIKE', '%' . $filters['search'] . '%');
        // }

        //when adalah cara untuk menggunakan where in pada eloquent query builder
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('body', 'LIKE', '%' . $search . '%');
        });

        //?? adalah cara untuk menggunakan operator ternary pada eloquent query builder
        $query->when($filters['category'] ?? false, function ($query, $category) {
            //whereHas adalah join table yang digunakan untuk mengambil data dari model yang lain menggunakan eager loading
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // $query->when($filters['author'] ?? false, function ($query, $author) {
        //     return $query->whereHas('author', function ($query) use ($author) {
        //         $query->where('username', $author);
        //     });
        // });

        //arrow function: cara lain dari code diatas
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
