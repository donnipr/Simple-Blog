<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;

class BookController extends Controller
{

     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $books = Book::all();
         return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$cover = $request->file('cover');
        $upload = 'upload/images';
        $filename = $cover->getClientOriginalName();
        Storage::put('images'.$filename,file_get_contents($request->file('cover')->getRealPath()));

        $books = new Book();
        $books->isbn = $request->isbn;
        $books->judul = $request->judul;
        $books->desk = $request->desk;
        $books->cover = $filename;
        $books->save();*/

        $this->validate($request,[
            'title' => ['required','min:5'],
            'photo' => ['mimes:jpg,jpeg,JPEG,png', 'max:2024'],
            ]);

        $data = $request->all();

        $photo = $request->file('photo')->getClientOriginalName();
        $destination = base_path().'/public/uploads';
        $request->file('photo')->move($destination,$photo);
        
        $data['photo'] = $photo;

    

        $data = new Book();
        $data->title =  $request->title;
        $data->photo =  $photo;
        $data->save();

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
