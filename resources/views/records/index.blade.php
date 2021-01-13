@extends('base_record')

@section('main')

    <div class="row">

        <div class="col-sm-12">
            
            @if(session()->get('success'))
                
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            
            @endif
            
        </div>
        
        <div class="col-lm-12">
        
            <h1 class="display-3">Summary</h1>

            <table class="table table-bordered">
                
                <thead style="font-weight:bold;">
                    <tr>
                        <td>Total Members</td>
                        <td colspan = 2>Gender</td>
                        <td colspan = 2>Occupation</td>
                        <td colspan = 2>Marital Status</td>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>{{ count($records) }}</td>
                        @foreach($statistics_object as $object_key => $object_value)
                            <td>{{ $object_key }}: {{ $object_value }}</td>
                        @endforeach
                    </tr>
                </tbody>
                
            </table>

            <h1 class="display-3">Data</h1>
                      
            <table class="table table-striped table-bordered">
                <thead>
                    <tr style="font-weight:bold;">
                        <td>S/N</td>
                        <td>Name</td>
                        <td>Phone Number</td>
                        <td>Occupation</td>
                        <td>Qualification</td>
                        <td>Gender</td>
                        <td>Marital Status</td>
                        <td>Address</td>
                        <td>LGA</td>
                        <td>State</td>
                        <td colspan = 2>Actions</td>
                    </tr>
                </thead>
                
                <tbody>
                    
                    @foreach($records as $record)
                        <tr>
                            <td>{{$record->serial_number}}</td>
                            <td>{{$record->first_name}} {{$record->middle_name}} {{$record->last_name}}</td>
                            <td>{{$record->phone_number}}</td>
                            <td>{{$record->occupation}}</td>
                            <td>{{$record->qualification}}</td>
                            <td>{{$record->gender}}</td>
                            <td>{{$record->marital_status}}</td>
                            <td>{{$record->address}}</td>
                            <td>{{$record->lga}}</td>
                            <td>{{$record->state}}</td>
                            <td><a href="{{ route('records.edit', $record->id)}}" class="cuz-btn btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ route('records.destroy', $record->id)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="cuz-btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
            
        <div>
        
    </div>
    
@endsection