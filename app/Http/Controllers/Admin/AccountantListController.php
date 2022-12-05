<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accountant;

class AccountantListController extends Controller
{
    function accountantList() {
        $data = Accountant::all();
        return view('dashboard/admin/accountant-list', ['data'=>$data]);  
    }

    function accountantDelete($id) {
        $data = Accountant::find($id);
        $data->delete();

        return redirect('admin/accountant-list');
    }
}
