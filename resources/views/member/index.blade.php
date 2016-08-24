
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
                                            <td><img src="{{asset('images/').'/'.$member->default->member_image}}" class="img-thumbnail" /> </td>
                                            <td>{{$member->default->name}}</td>
                                            <td>{{$member->default->constituency}}</td>
                                        <td><a href="{{route('member.edit', $member->default->constituency)}}"  class="btn btn-info"><i class="fa fa-pencil" style="padding-right:5px"></i>Edit</a></td>
                                            <td>
                                            
<!--                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-remove" style="padding-right:5px"></i>Delete</button>-->
                                           
                                            <form method="POST" action="{{ url('member',$member->default->constituency) }}">
        
               {{ csrf_field() }}

<input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger" value="Delete"><i class="fa fa-remove" style="padding-right:5px"></i>Delete</button>
         
    </form>    
                                            
                                            
                                            </td>
                                            <td><a href="{{ url('member',$member->default->constituency) }}" class="btn btn-success"><i class="fa fa-eye" style="padding-right:5px"></i>View</a></td>
                                        </tr>
                                @endforeach         
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                    
                    
                    

        <!--        Modal Delete-->

<!--
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
             <form method="POST" action="{{ url('member',$member->default->constituency) }}">
        
               {{ csrf_field() }}

<input type="hidden" name="_method" value="DELETE">
<input type="submit" class="btn btn-small btn-primary" value="Delete">
         
    </form>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       
                    </div>
                </div>
            </div>
        </div>
-->




@endsection