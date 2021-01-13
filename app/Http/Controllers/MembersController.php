<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $male_count = 0;
        $female_count = 0;
        $student_count = 0;
        $singles_count = 0;
        $married_count = 0;
        $civil_servants_count = 0;

        $records = Record::orderBy('gender','male')->get();

        foreach ($records as $record_key => $record_object) {
            $record_object['serial_number'] = ($record_key + 1);
            if (strtolower($record_object['gender']) == 'female') {
                $female_count = $female_count + 1; 
            }
            if (strtolower($record_object['gender']) == 'male') {
                $male_count = $male_count + 1; 
            }
            if (strtolower($record_object['occupation']) == 'student') {
                $student_count = $student_count + 1; 
            }
            if (strtolower($record_object['occupation']) == 'civil servant') {
                $civil_servants_count = $civil_servants_count + 1; 
            }
            if (strtolower($record_object['marital_status']) == 'married') {
                $married_count = $married_count + 1; 
            }
            if (strtolower($record_object['marital_status']) == 'single') {
                $singles_count = $singles_count + 1; 
            }            
        }

        $statistics_object = [
            'Female' => $female_count,
            'Male' => $male_count,
            'Students' => $student_count,
            'Civil Servants' => $civil_servants_count,
            'Married' => $married_count,
            'Singles' => $singles_count
        ];

        return view('records.index', compact('records','statistics_object'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('records.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'occupation' => 'required',
            'qualification' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'address' => 'required',
            'lga' => 'required',
            'state' => 'required'
        ]);

        $record = new Record([
            'first_name' => $request->get('first_name'),
            'middle_name' => $request->get('middle_name'),
            'last_name' => $request->get('last_name'),
            'phone_number' => $request->get('phone_number'),
            'occupation' => $request->get('occupation'),
            'qualification' => $request->get('qualification'),
            'gender' => $request->get('gender'),
            'marital_status' => $request->get('marital_status'),
            'address' => $request->get('address'),
            'state' => $request->get('state'),
            'lga' => $request->get('lga'),
        ]);

        $record->save();

        return redirect('/records/create')->with('success', 'Details saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Record::find($id);
        return view('records.edit', compact('record'));
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
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'occupation' => 'required',
            'qualification' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'address' => 'required',
            'lga' => 'required',
            'state' => 'required'
        ]);

        $record = Record::find($id);
        $record->first_name =  $request->get('first_name');
        $record->last_name = $request->get('last_name');
        $record->middle_name = $request->get('middle_name');
        $record->phone_number = $request->get('phone_number');
        $record->occupation = $request->get('occupation');
        $record->qualification = $request->get('qualification');
        $record->gender = $request->get('gender');
        $record->marital_status = $request->get('marital_status');
        $record->address = $request->get('address');
        $record->state = $request->get('state');
        $record->lga = $request->get('lga');
        $record->save();
        return redirect('/records')->with('success', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Record::find($id);
        $record->delete();
        return redirect('/records')->with('success', 'Record deleted!');
    }
}
