@extends('layout.admin')


@section('content')


  
    <div class="col-sm-6">
                            <table class="table table-responsive" style="margin-top:20px">
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->name}}</td>
                                </tr>
                                <tr>
                                    <td>Father Name</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->father_name}}</td>
                                </tr>
                                <tr>
                                    <td>Constituency</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->constituency}}</td>
                                </tr>
                                <tr>
                                    <td>Seat Type</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->seat_type}}</td>
                                </tr>
                                <tr>
                                    <td>Profession</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->profession}}</td>
                                </tr>
                                <tr>
                                    <td>Department</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->department}}</td>
                                </tr>
                                <tr>
                                    <td>Cabinet Post</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->cabinet_post}}</td>
                                </tr>
                                <tr>
                                    <td>Party</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->party}}</td>
                                </tr>
                                <tr>
                                    <td>Date Of Birth</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->date_of_birth}}</td>
                                </tr>
                                <tr>
                                    <td>Religion</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->religon}}</td>
                                </tr>
                                <tr>
                                    <td>Martial Status</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->marital_status}}</td>
                                </tr>
                                <tr>
                                    <td>Education</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->education}}</td>
                                </tr>
                                <tr>
                                    <td>Permanent Contact</td>
                                    <td>:</td>
                                    <td>{{$single_member[0]->default->permanent_contact}}</td>
                                </tr>
                            </table>

                        </div>
                        <div class="col-sm-4">
                            
                            <img src="{{asset('images/').'/'.$single_member[0]->default->member_image}}" width="200">
                        </div>
  

@endsection