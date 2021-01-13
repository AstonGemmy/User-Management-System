@extends('base_record')

@section('main')

    <div class="flex-center position-ref row">
    
        <div class="col-sm-8 offset-sm-2">
            
            <h1 class="display-3">Update a Record</h1>
            
            @if ($errors->any())
                
                <div class="alert alert-danger">
                    
                    <ul>
                        
                        @foreach ($errors->all() as $error)                            
                            <li>{{ $error }}</li>
                        @endforeach
                        
                    </ul>
                    
                </div>
                <br/>
                
            @endif
            
            <form method="post" class="position-ref" action="{{ route('records.update', $record->id) }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                
                <div class="flex-left position-ref">

                    <div class="form-group form-group-margin">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" name="first_name" value="{{ $record->first_name }}" />
                    </div>
                        
                    <div class="form-group form-group-margin">
                        <label for="middle_name">Middle Name:</label>
                        <input type="text" class="form-control" name="middle_name" value="{{ $record->middle_name }}" />
                    </div>
                    
                    <div class="form-group form-group-margin">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" value="{{ $record->last_name }}" />
                    </div>
                    
                    <div class="form-group form-group-margin">
                        <label for="phone_number">Phone Number:</label>
                        <input type="text" class="form-control" name="phone_number" value="{{ $record->phone_number }}" />
                    </div>
                
                </div>

                <div class="flex-left position-ref">
                
                    <div class="form-group form-group-margin">
                        <label for="occupation">Occupation:</label>
                        <input type="text" class="form-control" name="occupation" value="{{ $record->occupation }}" />
                    </div>
                    
                    <div class="form-group form-group-margin">
                        <label for="qualification">Qualification:</label>
                        <input type="text" class="form-control" name="qualification" value="{{ $record->qualification }}" />
                    </div>
                    
                    <div class="form-group form-group-margin">
                        <label for="gender">Gender:</label>
                        <input type="text" class="form-control" name="gender" value="{{ $record->gender }}" />
                    </div>
                    
                    <div class="form-group form-group-margin">
                        <label for="marital_status">Marital Status:</label>
                        <input type="text" class="form-control" name="marital_status" value="{{ $record->marital_status }}" />
                    </div>
                
                </div>

                <div class="flex-left position-ref">

                    <div class="form-group form-group-margin">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="address" value="{{ $record->address }}" />
                    </div>
                    
                    <div class="form-group form-group-margin">
                        <label for="lga">LGA:</label>
                        <input type="text" class="form-control" name="lga" value="{{ $record->lga }}" />
                    </div>
                    
                    <div class="form-group form-group-margin">
                        <label for="state">State:</label>
                        <input type="text" class="form-control" name="state" value="{{ $record->state }}" />
                    </div>
                
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            
            </form>
            
        </div>
        
    </div>
    
@endsection