@extends('layout.admin')


@section('content')


  
    <div class="col-sm-6">
                            <table class="table table-responsive" style="margin-top:20px">
                                <tr>
                                    <td>Date of Governer Assent</td>
                                    <td>:</td>
                                    <td>{{$act[0]->default->date_of_governer_assent}}</td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td>:</td>
                                    <td>{{$act[0]->default->title}}</td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td>:</td>
                                    <td>{{$act[0]->default->id}}</td>
                                </tr>
                                <tr>
                                    <td>Act Number</td>
                                    <td>:</td>
                                    <td>{{$act[0]->default->act_number}}</td>
                                </tr>
                                 <tr>
                                    <td>Date of Passing</td>
                                    <td>:</td>
                                    <td>{{$act[0]->default->date_of_passing}}</td>
                                </tr>
                                 <tr>
                                    <td>Subject</td>
                                    <td>:</td>
                                    <td>{{$act[0]->default->subject}}</td>
                                </tr>
                            </table>

                        </div>

  

@endsection