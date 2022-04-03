<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LittlePrinceController extends Controller
{
    const BOOK_NAME = 'Little Prince';
    const BOOK_AUTHOR= 'Antoine de Saint-Exupery';
    const CHAPTERS = 3;
    public function index()
    {
        return view('index',[
            'book_name' => static::BOOK_NAME,
            'book_author' => static::BOOK_AUTHOR,
            'number_of_chapters' => static::CHAPTERS
        ]);
    }

    public function readByChapter($chapter_number)
    {
        return view('read-chapter', [
            'book_name' => static::BOOK_NAME,
            'book_author' => static::BOOK_AUTHOR,
            'number_of_chapters' => static::CHAPTERS,
            'chapter_number' => $chapter_number
        ]);
    }

    public function readAllChapters()
    {
        return view('all-chapters', [
            'book_name' => static::BOOK_NAME,
            'book_author' => static::BOOK_AUTHOR,
            'number_of_chapters' => static::CHAPTERS
        ]);
    }
}

