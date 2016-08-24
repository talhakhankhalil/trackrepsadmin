@extends('layout.admin')


@section('content')


 <div class="row">
                        <div class="col-sm-12">
                            <form method="POST" action="{{url('member')}}" role="form" enctype="multipart/form-data">
                               
                              {!! csrf_field() !!}
                               
                              
                               
                               
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label>Father Name</label>
                                    <input name="father_name" type="text" class="form-control" placeholder="Enter Father Name">
                                </div>
                                <div class="form-group">
                                    <label>Constituency</label>
                                    <input name="constituency" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Seat Type</label>
                                    <select name="seat_type" class="form-control">
                                        <option>Select the Seat</option>
                                        <option>General Seat</option>
                                        <option>Seat 2</option>
                                        <option>Seat 3</option>
                                        <option>Seat 4</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Profession</label>
                                    <input name="profession" type="text" class="form-control" placeholder="Enter Name">
                                   
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <select name="department" class="form-control">
                                        <option>a</option>
                                        <option>b</option>
                                        <option>c</option>
                                        <option>D</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Cabinet Post</label>
                                    <select name="cabinet_post" class="form-control">
                                        <option>a</option>
                                        <option>b</option>
                                        <option>c</option>
                                        <option>D</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Party</label>
                                    <select name="party" class="form-control">
                                        <option>All Pakistan Muslim League</option>
                                        <option>Awami National Party</option>
                                        <option>Independents(Government Coaliyion)</option>
                                        <option>Independents(Opposition)</option>
                                        <option>Jamaat-e-Islami Pakistan</option>
                                        <option>Jamiat Ulema-e-Islam(F)</option>
                                        <option>Pakistan Muslim League(N)</option>
                                        <option>Pakistan Peoples Party Parliamentarians</option>
                                        <option>Pakistan Tehrek Insaf</option>
                                        <option>Qoumi Wattan Party</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input name="date_of_birth" type="date" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <label>Religon</label>
                                    <select name="religon" class="form-control">
                                        <option>Muslim</option>
                                        <option>Non muslim</option>
                                    </select>
                                </div>
                               
                                 <div class="form-group">
                                    <label>Marital Status</label>
                                    <select name="marital_status" class="form-control">
                                        <option>single</option>
                                        <option>married</option>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option>male</option>
                                        <option>female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Education</label>
                                    <select name="education" class="form-control">
                                        <option>BA</option>
                                        <option>BCS</option>
                                        <option>MA</option>
                                        <option>Msc</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Present Contact</label>
                                    <textarea name="present_contact" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Permanent Contact</label>
                                    <textarea name="permanent_contact" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <input name="member_image" type="file" class="form-control" />
                                </div>
                               
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

@endsection


















