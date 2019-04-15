<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;

        $this->validate($request, [
            'name'  => 'required|unique:categories',
            'image' => 'required|mimes:jpeg,bmp,png,jpg'
        ]);

        //Get form image
        $image =$request->file('image');
        $slug = str_slug($request->name);
        if(isset($image)){
            //make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            //Check category dir is exists
            if (!Storage::disk('public')->exists('category')){
                Storage::disk('public')->makeDirectory('category');
            }

            //resize image for category and upload
            $category = Image::make($image)->resize(1600,479)->save();
            Storage::disk('public')->put('category/'.$imagename,$category);

            //Check category slider dir is exists
            if (!Storage::disk('public')->exists('category/slider')){
                Storage::disk('public')->makeDirectory('category/slider');
            }

            //resize image for category slider and upload
            $slider = Image::make($image)->resize(500,333)->save();
            Storage::disk('public')->put('category/slider/'.$imagename,$slider);


        }else{
            $imagename = "default.png";
        }

        $category        = new Category();
        $category->name  = $request->name;
        $category->slug  = $slug;
        $category->image = $imagename;
        $category->save();

        Toastr::success('Category créé avec succes :)', 'Success');

        return redirect()->route('admin.category.index');

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
