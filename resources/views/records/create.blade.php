@extends('base_record')

@section('main')

    <div class="flex-center position-ref row">

        <div class="col-sm-8 offset-sm-2">

            <h1 class="display-3">Add New Record</h1>  

            <div>

                @if ($errors->any())

                    <div class="alert alert-danger">

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        
                    </div>

                    <br />

                @endif
                    
                @if(session()->get('success'))
                    
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                
                @endif                  

                <form method="post" class="position-ref" action="{{ route('records.store') }}">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    
                    <div class="flex-left position-ref">
                        
                        <div class="form-group form-group-margin">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" name="first_name"/>
                        </div>
                        
                        <div class="form-group form-group-margin">
                            <label for="last_name">Middle Name:</label>
                            <input type="text" class="form-control" name="middle_name"/>
                        </div>

                        <div class="form-group form-group-margin">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" name="last_name"/>
                        </div>
                        
                        <div class="form-group form-group-margin">
                            <label for="phone_number">Phone Number:</label>
                            <input type="text" class="form-control" name="phone_number"/>
                        </div>
                    
                    </div>

                    <div class="flex-left position-ref">

                        <div class="form-group form-group-margin">
                            <label for="occupation">Occupation:</label>
                            <input type="text" class="form-control" name="occupation"/>
                        </div>
                        
                        <div class="form-group form-group-margin">
                            <label for="qualification">Qualification:</label>
                            <input type="text" class="form-control" name="qualification"/>
                        </div>

                        <div class="form-group form-group-margin">
                            <label for="gender">Gender:</label>
                            <input type="text" class="form-control" name="gender"/>
                        </div>
                        
                        <div class="form-group form-group-margin">
                            <label for="marital_status">Marital Status:</label>
                            <input type="text" class="form-control" name="marital_status"/>
                        </div>

                    </div>

                    <div class="flex-left position-ref">
                        
                        <div class="form-group form-group-margin">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address"/>
                        </div>
                        
                        <div class="form-group form-group-margin">
                            <label for="lga">LGA:</label>
                            <input type="text" class="form-control" name="lga"/>
                        </div>
                        
                        <div class="form-group form-group-margin">
                            <label for="state">State:</label>
                            <input type="text" class="form-control" name="state"/>
                        </div>
                    
                    </div>

                    <button type="submit" class="btn btn-success">Add record</button>
                    
                </form>
                
            </div>
            
        </div>
        
    </div>
    
@endsection