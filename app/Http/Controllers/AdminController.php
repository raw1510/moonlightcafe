<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

    public function menuCategory_addForm_post(Request $req){
        $data = DB::table('menu_categories')->insert([
            'menuCategory'=>$req->menu_categoryName,
            'created_at'=>now(),
            'updated_at'=>now(),


        ]);
        return view('admin_panel.menu_category.menu_category');
        
    }
    public function get_menuCategory_data(Request $req){
        $data = DB::table('menu_categories')->get();
        // dd($data);
        $storeCount = [];
        foreach($data as $key=> $value){
                $countItems = DB::table('menu_sub_categories')->where('menu_category_id',$value->menuCategory)->count();
                $storeCount[$value->menuCategory] = $countItems;
            }
            // dd($storeCount);
            
            return view('admin_panel.menu_category.menu_category',compact('data'),compact('storeCount'));
            // return view('admin_panel.menu_category.menu_category',compact('data'));
            
        }
        public function menuCategory_sub_display_items(string $id){
            $data = $id;
            $fetchNameFromMenuCategoryTable = DB::table('menu_categories')->where('id',$data)->first();
            $fetchNameFromMenuCategoryTable = $fetchNameFromMenuCategoryTable->menuCategory;

            $FetchingAllList = DB::table("menu_sub_categories")->where('menu_category_id',$fetchNameFromMenuCategoryTable)->get();
            // dd($FetchingAllList);
            return view('admin_panel.menu_category.menu_sub_category',compact('data','FetchingAllList','fetchNameFromMenuCategoryTable'));
            // return view('admin_panel.menu_category.menu_sub_category',compact('data','fetchNameFromMenuCategoryTable'));
            
        }

        public function menuCategory_sub_items_form_get(string $id){
            $data = DB::table('menu_categories')->where('id',$id)->first();
            // dd($data->menuCategory);
            return view('admin_panel.menu_category.menu_sub_category_addForm',compact('data'));
        }

        public function menuCategory_sub_items_form_post(request $req){
            $foodImageName=time().'.'.$req->food_image->extension();
            $req->food_image->move(public_path('foodItemsImage'),$foodImageName);
            $data = DB::table('menu_sub_categories')->insert([
                'name'=>$req->item_name,
                'price'=>$req->price,
                'description'=>$req->food_description,
                'image_url'=>$foodImageName,
                'menu_category_id'=>$req->menu_category_name,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
    
            $getIdFromMenuCategory = DB::table('menu_categories')->where('menuCategory',$req->menu_category_name)->first();
            // dd($data);
            return Redirect()->route('menu.category.sub.items.display',$getIdFromMenuCategory->id);
        }

}
