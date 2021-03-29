<?php
namespace App\Components;
use App\Models\Category;

class Recusive {

    private $data;
    private $htmlSelect;

    public function __construct($data)
    {
        $this->data = $data;
    }
        //hàm đệ quy danh mục
    public function catelogyRecusive($parentId, $id = 0, $text= '')
    {
//        $data = Category::all();
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                if (!empty($parentId) && $parentId == $value['id']) {
                    $this->htmlSelect .= "<option selected value=' " . $value['id'] . " '>" . $text . $value['name'] . "</option>";
                }else{
                    $this->htmlSelect .= "<option value=' " . $value['id'] . " '>" . $text . $value['name'] . "</option>";
                }
                $this->catelogyRecusive($parentId, $value['id'], $text.'-');
            }
        }
        return $this->htmlSelect;
    }
}
