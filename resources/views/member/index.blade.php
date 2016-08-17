
@extends('layout.admin')

@section('content')


<div class="row">
                        <div class="col-sm-12">
                            <div style="padding:20px 0px"></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Constituency</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                @foreach($memberdata as $member)
                                         <tr>
                                            <td><img src="http://trackreps.org/imgs/{{$member->value->ImageName}}" class="img-thumbnail" /> </td>
                                            <td>{{$member->value->Name}}</td>
                                            <td>{{$member->value->Constituency}}</td>
                                            <td><a href="{{route('member.edit',$member->value->Id)}}"  class="btn btn-info"><i class="fa fa-pencil" style="padding-right:5px"></i>Edit</a></td>
                                            <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-remove" style="padding-right:5px"></i>Delete</button></td>
                                            <td><a href="view-member.html"><button type="button" class="btn btn-success"><i class="fa fa-eye" style="padding-right:5px"></i>View</button></a></td>
                                        </tr>
                                @endforeach         
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
<!--
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Member Form</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label>Father Name</label>
                                <input type="text" class="form-control" placeholder="Enter Father Name">
                            </div>
                            <div class="form-group">
                                <label>Constituency</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Seat Type</label>
                                <select class="form-control">
                                    <option>Select the Seat</option>
                                    <option>General Seat</option>
                                    <option>Seat 2</option>
                                    <option>Seat 3</option>
                                    <option>Seat 4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Profession</label>
                                <select class="form-control">
                                    <option>Politician</option>
                                    <option>a</option>
                                    <option>b</option>
                                    <option>c</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control">
                                    <option>a</option>
                                    <option>b</option>
                                    <option>c</option>
                                    <option>D</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Cabinet Post</label>
                                <select class="form-control">
                                    <option>a</option>
                                    <option>b</option>
                                    <option>c</option>
                                    <option>D</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Party</label>
                                <select class="form-control">
                                    <option>Pakistan Tehrek Insaf</option>
                                    <option>b</option>
                                    <option>c</option>
                                    <option>D</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="text" class="form-control">
                            </div>
                            <fieldset class="form-group">
                                <label>Religion</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="religionRadios" value="option1">
                                        Muslim
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="religionRadios" value="option2">
                                        Non Muslim
                                    </label>
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Martial Status</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="statusRadios"  value="option1">
                                        Single
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="statusRadios"  value="option2">
                                        Married
                                    </label>
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <label>Education</label>
                                <select class="form-control">
                                    <option>BA</option>
                                    <option>BCS</option>
                                    <option>MA</option>
                                    <option>Msc</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Present Contact</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Permanent Contact</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" class="form-control" />
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
-->

        <!--        Modal Delete-->

        <div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Delete</h4>
                    </div>
                    <div class="modal-body">
                        Are You Sure You Want To Delete a Member. 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>




@endsection