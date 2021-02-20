<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Http\Requests\PatientStoreRequest;


class PatientController extends Controller
{
   
    public function index()
    {
    //to display all, the function name is index
    //plural when displaying all records
       // $patients = Patient::paginate(25);
        $patients = Patient::paginate(25,['id','last_name','first_name','email']);
        return view('patients.index',compact('patients'));
    //in the view, the best practice is to create a folder named after the plural form of the Model + the function name
        
    }
    public function create()
    {
        return view('patients.create');
    }
    public function store(Request $request)
    {
        $patient = Patient::create($request->all());//if there are no images
        return back()->with('saved',' ');
    }
    
}