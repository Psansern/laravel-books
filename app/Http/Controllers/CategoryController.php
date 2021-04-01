<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function index()

    {

       $cats=category::latest()-> paginate(5);    // ให้ทำการแบ่งทุกๆ 5 หน้า find()= selct *form where=?
        //$cats=category::
        return view('admin.category.index',compact('cats'))
        ->with('i',(request()->input('page',1)-1)*5);

    }

    public function create()
    {

        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'

        ]);
        Category::create($request->all());

        return redirect()->route('category.index');
    }

    public function show(Category $id)
    {
        return view('admin.category.editcats',compact('id'));

    }
    public function edit($id)
    {
        $cats=Category::where('id',$id)->get();
        //select * from where id='??'

        return view('admin.category.editcats',compact('cats'));
    }
    public function update(Request $request,$cat)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        Category::whereId($cat)->update($validatedData);
        return redirect()->action('CategoryController@index');
    }
    public function destroy($cat)
    {
        $cat=Category::findOrFail($cat);
        $cat->delete();
        return redirect()->action('CategoryController@index');

    }

}
