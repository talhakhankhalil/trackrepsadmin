@extends('layout.admin')


@section('content')


  
    <div class="col-sm-6">
                            <table class="table table-responsive" style="margin-top:20px">
                                <tr>
                                    <td>Committe Name</td>
                                    <td>:</td>
                                    <td>{{$single_committe[0]->default->committe_name}}</td>
                                </tr>
                                <tr>
                                    <td>Committee Type</td>
                                    <td>:</td>
                                    <td>{{$single_committe[0]->default->committe_type}}</td>
                                </tr>
                                <tr>
                                    <td>Committe Chairman</td>
                                    <td>:</td>
                                    <td>{{$single_committe[0]->default->committe_chairman}}</td>
                                </tr>
                                <tr>
                                    <td>Committe Members</td>
                                    <td>:</td>
                                    <td>{{$single_committe[0]->default->committe_members}}</td>
                                </tr>
                            </table>

                        </div>

  

@endsection