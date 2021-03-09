<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $htmlSelect;
    public function __construct()
    {
        $this->htmlSelect = '';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
//        foreach ($data as $value) {
//            if ($value['parent_id'] == 0) {
//                echo "<option>" . $value['name']  . "</option>";
//
//                foreach ($data as $value2) {
//                    if ($value2['parent_id'] == $value['id']) {
//                        echo "<option>" . '--' . $value2['name']  . "</option>";
//
//                        foreach ($data as $value3) {
//                            if ($value3['parent_id'] == $value2['id']) {
//                                echo "<option>" . '---' . $value3['name'] . "</option>";
//                            }
//                        }
//                    }
//                }
//            }
//        }
        $htmlOption = $this->catelogyRecusive('0');

        return view('category.create', compact('htmlOption'));
    }
    //hàm đệ quy danh mục
    function catelogyRecusive($id ,$text= '')
    {
        $data = Category::all();
        foreach ($data as $value) {
            if ($value['parent_id'] == $id) {
                $this->htmlSelect.= "<option>" . $text . $value['name'] . "</option>";
                $this->catelogyRecusive($value['id'], $text.'-');
            }
        }
        return $this->htmlSelect;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
