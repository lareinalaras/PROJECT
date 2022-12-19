<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Book_Category;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function body()
    {
        $buku = Book::all();
        return view('body', [
            'book' => $buku
        ]);
    }

    public function detail_buku($id)
    {
        $buku = Book::findOrFail($id);
        return view('detail', [
            'book' => $buku
        ]);
    }

    public function book_category($id)
    {
        $category = Category::where('id', '=', $id)->get();
        $book_category = Book_Category::where('category_id', '=', $category[0]->id)->get();

        return view('category', [
            'book_category' => $book_category,
            'category' => $category[0],
        ]);
    }

    public function publisher()
    {
        $publish = Publisher::all();
        return view("publisher", [
            "publish" => $publish
        ]);
    }
}
