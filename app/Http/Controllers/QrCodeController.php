<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function tableListView(){

        $data = DB::table('food_tables')->get();
        return view('admin_panel.table.table_list_view',compact('data'));

    
    }

    public function create_new_table_form_get(){
        return view('admin_panel.table.table_create_qr');
    }

    public function create_new_table_form_post(Request $req){
        $qrCodes = [];
        $qrCodes['simple'] = 

        $url = 'http://127.0.0.1:8000/menu/'.$req->table_number.'table';
        $qrCode = QrCode::size(150)->generate($url);
        $qrCodeData = base64_encode($qrCode);

        $data = DB::table('food_tables')->insert([
            'table_no' => $req->table_number,
            'url'=>$url,
            'qr_code_data' => $qrCodeData,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        return view('admin_panel.table.table_list_view');
    
    }
}
