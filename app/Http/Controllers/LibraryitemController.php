<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libraryitem;

use App\Http\CreateValidationRequest;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Librarian;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class LibraryitemController extends Controller
{
    public function storelibraryitem(Request $request){

        //to check database connection, we use 'dd' command
        //dd($request->all());
     

        //create a new object for task model
        $Libraryitem = new Libraryitem;

//====================================================================================================
        //Method we can use on $request
        //guessExtension()
        //getMimeType()
        //store()
        //asStore()
        //storePublicly()
        //move()
        //getClientOriginalName() :- allow image to be uploaded with an other name and we can change that name to unique
        //guessClientExtension() 
        //getSize()
        //getError()
        //isValid()


        //$test = $request->file('image')->guessExtension();
        //$test = $request->file('image')->getMimeType();
        //$test = $request->file('image')->getClientOriginalName();
        //$test = $request->file('image')->getError();
        //$test = $request->file('image')->isValid();
        //dd($test);
//============================================================================================================================

       //validate Input data
       $this->validate($request,[
        'itemname'=>'required|max:70|min:5', 
        'author'=>'required|max:50|min:4', 
        'itemtype'=>'required|max:100|min:3', 
        'itemdetails'=>'required|max:100|min:3', 
        'image'=> '',
        'itemlink'=>'required|max:500|min:5', 
      ]);



    //    $request->validate([
      //      'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
        // ]);

         // Save the file locally in the storage/public/ folder under a new folder named /product
         //$request->file->store('product', 'public');

         // Store the record, using the new file hashname which will be it's new filename identity.
        // $product = new Product([
        //     "name" => $request->get('name'),
         //    "file_path" => $request->file->hashName()
        // ]);
//$product->save(); // Finally, save the record.
  
      
    
  


        $Libraryitem->Item_name=$request->itemname;
        $Libraryitem->Author=$request->author;
        $Libraryitem->Item_type=$request->itemtype;
        $Libraryitem->Item_details=$request->itemdetails;
        //$request->image->extension();

      if ($request->hasFile('file')) {

        $Libraryitem1 = $request->file('file');
        $extension = $Libraryitem1->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $Libraryitem1->move('uploads/',$filename);
        $Libraryitem->file=$filename;

        }

        $Libraryitem->Item_link=$request->itemlink;
        $Libraryitem->save();
    
        return redirect()->back()->with('message', 'The library item was added successfully to the system.');
        //to return to specific route or page
        //return view('/tasks');

  
        //data retriving using 'dd' cmd
      //  $data=Libraryitem::all();
        //dd($data);
      //  return view('dashboard.librarian.manage_libraryitems')->with('libraryitems',$data)->with('success','Item created successfully!');
    }


public function deletelibraryitem($id){
    //find task laravel method
    $Libraryitem=Libraryitem::find($id);

    //delete laravel method
    $Libraryitem->delete();
    return redirect()->back()->with('message', 'The library item was deleted successfully.');    
}




public function updatelibraryitemview($id){
    $Libraryitem=Libraryitem::find($id);

    return view('dashboard.librarian.updatelibraryitem')->with('libraryitemdata',$Libraryitem);
}

public function updatelibraryitem(Request $request){

         //validate Input data
         $this->validate($request,[
          'itemname'=>'required|max:100|min:5', 
          'author'=>'required|max:100|min:4', 
          'itemtype'=>'required|max:100|min:4', 
          'itemdetails'=>'required|max:100|min:5', 
          'image'=> '',
          'itemlink'=>'required|max:500|min:5', 
        ]);



   //dd($request);
  $id_var=$request->id;
  $Item_name_var=$request->itemname;
  $Author_var=$request->author;
  $Item_type_var=$request->itemtype;
  $Item_details_var=$request->itemdetails;
  $Item_link_var=$request->itemlink;

  $data=Libraryitem::find($id_var);
  $data->Item_name=$Item_name_var;
  $data->Author=$Author_var;
  $data->Item_type=$Item_type_var;
  $data->Item_details=$Item_details_var;
  $data->Item_link=$Item_link_var;
  $data->save();
  $datas=Libraryitem::all();
  //return view('manage_libraryitems')->with('libraryitems',$datas);
  //return redirect()->back();
  return redirect('/librarian/manage_libraryitems')->with('message', 'The library item was updated successfully.');
  }

  public function create()
  {
      return view('upload');
  }

  public function store(Request $request)
  {
      dd($request);
      //return view('upload');
  }

  public function search()
  {
  $Searchtext= $_GET['Searchtext'];
  $data = Libraryitem::where('Item_Name','LIKE',"%{$Searchtext}%")->get();

  return view('dashboard.librarian.manage_libraryitems')->with('libraryitems',$data);
 

  }


  public function search1()
  {
  $Searchtext1= $_GET['Searchtext1'];
  $data = Libraryitem::where('Item_Name','LIKE',"%{$Searchtext1}%")->get();

  return view('dashboard.user.view_libraryitems')->with('libraryitems',$data);
  }


  public function downloadPDF(){

    //data retriving using 'dd' cmd
    $data=Libraryitem::all();
    //dd($data);

    $pdf = PDF::setOptions(['defaultFont' => 'dejavu serif'])->loadView('dashboard.librarian.manage_libraryitems',compact('data'));

    //->with('libraryitems',$data);
    //return view('dashboard.librarian.manage_libraryitems')->with('libraryitems',$data);
    return $pdf->download('Library.pdf');

}



  
}