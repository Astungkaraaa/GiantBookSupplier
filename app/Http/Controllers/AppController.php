<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Models\Book;

class AppController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Book List', 
            'books' => Book::all(),
            'categories' => Category::all()
        ]);
    }

    public function detail(Book $book){ //$book yng diambil idnya sama dengan yg di index
        return view ('bdetail', [
            'title' => 'Book Detail',
            'book' => $book,
            'categories' => Category::all()
        ]);
    }

    public function category(Category $category){ //ini namanya harus sama dengan yang dipassing { } di web
        return view('index', [
            'title' => $category->name,
            'books' => $category->books, //ini berdaras di model category ada fungsi books
            'categories' => Category::all()
        ]);
    }

    public function publisher(){
        return view('publisher', [
            'title' => 'Publisher List', 
            'publishers' => Publisher::all(),
            'categories' => Category::all()
        ]);
    }

    public function pubdet(Publisher $publisher){ //ini namanya harus sama dengan yang dipassing { } di web
        return view('pubdet', [
            'title' => $publisher->name,
            'address' => $publisher->address,
            'phone' => $publisher->phone,
            'email' => $publisher->email,
            'books' => $publisher->books, //ini berdaras di model category ada fungsi books
            'categories' => Category::all()
        ]);
    }
}
