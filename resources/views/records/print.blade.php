@extends('base_record')

@section('main')

    <div class="row">

        <div class="col-lm-10">
        
            <h1 class="display-3">PAW Members Data</h1>
            
            <table class="table table-striped table-bordered">
                <thead>
                    <tr style="font-weight:bold;">
                        <td>S/N</td>
                        <td colspan = 5>Name</td>
                        <td>Phone Number</td>
                        <td>Occupation</td>
                        <td>Qualification</td>
                        <td>Gender</td>
                        <td>Marital Status</td>
                        <td>Address</td>
                        <td>LGA</td>
                        <td>State</td>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($records as $record)
                        <tr>
                            <td>{{$record->serial_number}}</td>
                            <td colspan = 5>{{$record->first_name}} {{$record->middle_name}} {{$record->last_name}}</td>
                            <td>{{$record->phone_number}}</td>
                            <td>{{$record->occupation}}</td>
                            <td>{{$record->qualification}}</td>
                            <td>{{$record->gender}}</td>
                            <td>{{$record->marital_status}}</td>
                            <td>{{$record->address}}</td>
                            <td>{{$record->lga}}</td>
                            <td>{{$record->state}}</td>                            
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
            
        <div>
        
    </div>
    
@endsection