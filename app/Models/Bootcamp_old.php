<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Bootcamp
{
    public $id;
    public $name;
    public $overview;
    public $fee;
    public $total_joined;
    public $date_posted;
    public $description;
    public $slug;

    public function __construct($id, $name, $overview, $fee, $total_joined, $date_posted, $description, $slug)
    {
        $this->id = $id;
        $this->name = $name;
        $this->overview = $overview;
        $this->fee = $fee;
        $this->total_joined = $total_joined;
        $this->date_posted = $date_posted;
        $this->description = $description;
        $this->slug = $slug;
    }

    public static function all()
    {
        return collect(File::files(resource_path("temp database/")))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new Bootcamp(
                $document->id,
                $document->name,
                $document->overview,
                $document->fee,
                $document->total_joined,
                $document->date_posted,
                $document->body(),
                $document->slug,
            ));
            // ->sortByDesc('rating');            
        
        // return cache()->rememberForever('test.all', function () {
        //     return collect(File::files(resource_path("temp database/")))
        //         ->map(fn($file) => YamlFrontMatter::parseFile($file))
        //         ->map(fn($document) => new Bootcamp(
        //             $document->name,
        //             $document->overview,
        //             $document->fee,
        //             $document->total_joined,
        //             $document->slug,
        //             $document->date_posted,
        //             $document->description(),
        //         ));
        //         // ->sortByDesc('rating');            
        // });
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);

    }

    public static function findOrFail($slug)
    {
        $bootcamp = static::find($slug);

        if (!$bootcamp) {
            throw new ModelNotFoundException();
        }

        return $bootcamp;
    }


}