@extends('layouts.layout')

<style>
select{
    width:70% !important;
}
</style>
 
@section('content')
    <div class="container content-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col pb-3">
                
                <div class="panel panel-default  p-4">
                    <div class="panel-heading">
                        
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                               <form method="post" action="{{url('posts')}}" enctype="multipart/form-data">
                                 @csrf
                                    <div class="form-group">
                                        <label>Crime</label>
                                        <input class="form-control" name="crime" required></input>
                                    </div>
                                    <div class="form-group">
                                        <label>Crime description</label>
                                        <textarea class="form-control" rows="3" name="description" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Where did it happen?</label>
                                         <select required class="form-control"  name="where_it_happened" >
                                            <option disabled selected value style="display:none"> -- select an option -- </option>
                                            <option value="facebook">Facebook</option>
                                            <option value="twitter">Twitter</option>
                                            <option value="instagram">Instagram</option>
                                            <option value="email">Email</option>
                                        </select>
                                    </div>   
                                    

                                        <div class="form-group">
                                            <label>Duration of attack</label>
                                            <select required class="form-control" placeholder="how long has the attack been going on" name="duration" >
                                                    <option disabled selected value style="display:none"> -- select an option -- </option>
                                                    <option value="0-3">0-3days</option>
													<option value="week">A week</option>
													<option value="month">A month</option>
													<option value="year">A year</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>What was the nature of the attack?</label>
                                            <select required class="form-control" name="nature">
                                                    <option disabled selected value style="display:none"> -- select an option -- </option>
                                                    <option value="abusive">Abusive</option>
													<option value="not-abusive">Not Abusive</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label> What is the status of the attack?</label>
                                            <select required class="form-control" name="status">
                                                    <option disabled selected value style="display:none"> -- select an option -- </option>
                                                    <option value="ongoing">Ongoing</option>
													<option value="resolved">Resolved</option>
													<option value="periodic">Periodic</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Did the attack escalate to physical abuse?</label>
                                            <select required class="form-control" name="physical">
                                                    <option disabled selected value style="display:none"> -- select an option -- </option>
                                                    <option value="yes">Yes</option>
													<option value="no">No</option>
                                                </select>
                                        </div>

                                        <!--ATTACKER INFORMATION-->
                                        <div class="form-group">
                                            <label>Gender of the Attacker</label>
                                            <select required class="form-control" name="gender">
                                                    <option disabled selected value style="display:none"> -- select an option -- </option>  
                                                    <option value="male">Male</option>
													<option value="female">Female</option>
                                                </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Relation to the Attacker</label>
                                            <select required class="form-control" name="relation">
                                                    <option disabled selected value style="display:none"> -- select an option -- </option>
                                                    <option value="stranger">Stranger</option>
                                                    <option value="fb_friends">Facebook Friends</option>
                                                    <option value="workmate">Workmate</option>
                                                    <option value="neighbour">Neighbour</option>
                                                    <option value="family_friend">Family Friend</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>Context of the Attack</label>
                                            <select required class="form-control" name="context">
                                                    <option disabled selected value style="display:none"> -- select an option -- </option>
                                                    <option value="racial">Racial</option>
													<option value="personal">Personal</option>
													<option value="sexist">Sexist</option>
													<option value="social">Social</option>
													<option value="political">Political</option>
                                                </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Was this attack reported to the authorities?</label>
                                            <select required class="form-control" name="reported">
                                                    <option disabled selected value style="display:none"> -- select an option -- </option>
                                                    <option value="yes">Yes</option>
													<option value="no">No</option>
													
                                                </select>
                                        </div>

                                        <button type="submit" class="btn btn-success">Submit</button>

                                </form>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
    </div>
@endsection