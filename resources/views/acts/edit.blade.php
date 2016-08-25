@extends('layout.admin')


@section('content')


 <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                              Add Acts
                            </h1>
                        
                        </div>
                    </div>
                    <!-- /.row -->
  <form method="POST" action="{{url('acts' , $edit_act[0]->default->id)}}">
                   
                     {!! csrf_field() !!}
                     
                      <input type="hidden" name="_method" value="PUT">
                   
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Date of Governer Assent</label>
                            <input type="date" class="form-control" name="date_of_governer_assent" value="{{$edit_act[0]->default->date_of_governer_assent}}"/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                        <label>Title</label>
                          <input type="text" class="form-control" name="title" value="{{$edit_act[0]->default->title}}"/>  
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>ID</label>
                                 <input type="text" class="form-control" name="id" value="{{$edit_act[0]->default->id}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Act Number</label>
                                <input type="text" class="form-control" name="act_number" value="{{$edit_act[0]->default->act_number}}"/>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Date of Passing</label>
                                <input type="date" class="form-control" name="date_of_passing" value="{{$edit_act[0]->default->date_of_passing}}"/>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" name="subject" value="{{$edit_act[0]->default->subject}}"/>
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