<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stdattachment;

class AttachmentController extends Controller
{
    public function addvedio(Request $request){

        $request->validate([
            'file' => 'required|mimes:csv,txt,png,docx,jpg,mp4,xlx,xls,pdf|max:50000'
         
        ]);
    
        $fileModel = new Stdattachment;
    
        $file=$request->file;
        $fileName = time().'_'.$file->getClientOriginalName();
        $request->file->move('uploads/', $fileName);
        //$file = $request->file('file')->storeAs('uploads', $fileName, 'public');
        $fileModel->attachment=$fileName;
        $fileModel->std_id=$request->std_id;
        $fileModel->feedback=$request->feedback;
        
        $fileModel->save();
        return redirect()->to('/user/progress-report'); 
     }
    
}
