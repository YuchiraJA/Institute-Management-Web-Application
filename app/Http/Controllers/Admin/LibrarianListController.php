<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Librarian;

class LibrarianListController extends Controller
{
    function librarianList() {
        $data = Librarian::all();
        return view('dashboard/admin/librarian-list', ['data'=>$data]);  
    }

    function deleteLibrarian($id) {
        $data = Librarian::find($id);
        $data->delete();

        return redirect('admin/librarian-list');
    }
}
