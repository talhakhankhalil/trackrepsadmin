@extends('layout.admin')


@section('content')



<form method="POST" action="{{url('committe', $edit_committe[0]->default->committe_name)}}">
                   
                     {!! csrf_field() !!}
                     
        <input type="hidden" name="_method" value="PUT">
                  
                   
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Committee Name</label>
                            <input type="text" class="form-control" name="committe_name" value="{{$edit_committe[0]->default->committe_name}}"/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                        <label>Comittee Type</label>
                            
                              <select name="committe_type" class="form-control">
                               <option>{{$edit_committe[0]->default->committe_type}}</option>
                                <option>Legislative Committee</option>
                                <option>Select Committee</option>
                                <option>PAC</option>
                                <option>Standing Committee</option>
                                <option>Steering Committee</option>
                                <option>Special Committee</option>
                              </select>

                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Committee Chairman</label>
                                 <input type="text" class="form-control" name="committe_chairman" value="{{$edit_committe[0]->default->committe_chairman}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Committee Members</label>
                                <input type="text" class="form-control" name="committe_members" value="{{$edit_committe[0]->default->committe_members}}"/>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
</form>


@endsection 