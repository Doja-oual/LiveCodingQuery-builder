<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function queryBuilder(){

        $start =microtime(true);

        $books=DB::table('books')
        ->select('title','author','price')
        ->where('id','=',10000)
        ->get();

        $time=microtime(true)-$start;

        return "Query Builder: " . count($books) . " livres trouvés en " . $time . " secondes.<br>" .
           "<pre>" . print_r($books, true) . "</pre>";

    }

    public function eloquent(){
        $start =microtime(true);

        $books = Book::select('title', 'author', 'price')
        ->where('id','=',10000)
        ->get();

        $time=microtime(true)-$start;

        return "Eloquent: " . count($books) . " livres trouvés en " . $time . " secondes.<br>" .
           "<pre>" . print_r($books, true) . "</pre>";

    }
}
