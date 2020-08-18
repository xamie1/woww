  
@extends('layouts.layout')

<style>
      .img-div{
        /* background: blue; */
        background-repeat: no-repeat;
        background-size: contain;
        background-position: 50% 50%;
        border-radius: 50%;
        width: 80px;
        height: 80px;
    }

    .display-comment .display-comment {
        margin-left: 40px;
    }
  </style>
 
@section('content')
   <!-- content-wrapper -->
<div class="container py-4">
	<div class="row">
		<div class="col-md-7">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4 class="text-heading">My Profile</h4>
                             @if (\Session::has('success'))
                            <div class="alert alert-success" id="success-alert">
                                <p>{{ \Session::get('success') }}</p>
                            </div><br />
                            @endif
		                    <hr>
		                </div>
		            </div>
		            <div class="row">         
		                <div class="col-md-12">
		                    <form  action="{{ route('profile.update', $user_id) }}" method="post" role="form" >
                                @csrf
                                
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Alias*</label> 
                                <div class="col-8">
                                  <input id="alias" name="alias" placeholder="Alias" class="form-control here"  type="text">
                                </div>
                              </div>
                             
                              <!--Occupation-->
                                <div class="form-group row">
                                
                                    <label for="occupation" class="col-md-4 col-form-label ">{{ __('Occupation') }}</label>

                                        <div class="col-md-6">
                                            <select name="occupation" id="occupation" class="form-control">
                                                <option disabled selected value style="display:none"></option>
                                                <option value="engineer">Engineer</option>
                                                <option value="lawyer">Lawyer</option>
                                                <option value="teacher">Teacher</option>
                                                <option value="doctor">Doctor</option>
                                                <option value="economist">Economist</option>
                                                <option value="nurse">Nurse</option>
                                                <option value="civil_servant">Civil servant</option>
                                                <option value="business">Buisness owner</option>
                                            </select>
                                        </div>
                                </div>
                              
                                <div class="form-group row">
                                    <label for="marital_status" class="col-md-4 col-form-label ">Marital Status</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="marital_status" id="marital_status">
                                            <option disabled selected value style="display:none"> </option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="dating">Dating</option>
                                            <option value="divorced">Divorced</option>
                                        </select> 
                                    </div>    
                                </div>

                              <div class="form-group row">
                                <label for="bio" class="col-4 col-form-label">Bio</label> 
                                <div class="col-8">
                                  <textarea id="bio" name="bio" cols="40" rows="4" class="form-control"></textarea>
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-success">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>

@endsection