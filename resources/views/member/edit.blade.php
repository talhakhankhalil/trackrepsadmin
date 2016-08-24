@extends('layout.admin')


@section('content')

<div class="row">
    <div class="col-sm-12">


        <form method="POST" enctype="multipart/form-data" action="{{url('member', $edit_member[0]->default->constituency)}}">

            {!! csrf_field() !!}



            <input type="hidden" name="_method" value="PUT">  


            <div class="form-group">           
                <label>Name</label>
              
                @if (!empty($edit_member[0]->default->name))
            <input name='name' type='text' class='form-control'  value='{{$edit_member[0]->default->name}}'>
                @else 
                    <input name='name' type='text' class='form-control'  value='NULL'>
                @endif
                
            </div>
            
             <div class="form-group">
                <label>Father Name</label>
               
                @if (!empty($edit_member[0]->default->father_name))
            <input name='father_name' type='text' class='form-control'  value='{{$edit_member[0]->default->father_name}}'>
                @else 
                    <input name='father_name' type='text' class='form-control'  value='NULL'>
                
                @endif
            </div>
            
            <div class="form-group">
                <label>Constituency</label>
               
                @if (!empty($edit_member[0]->default->constituency))
            <input name='constituency' type='text' class='form-control'  value='{{$edit_member[0]->default->constituency}}'>
                @else 
                    <input name='constituency' type='text' class='form-control'  value='NULL'>
                
                @endif
            </div>
            
               <div class="form-group">
                <label>Seat Type</label>
            
                <select name='seat_type' class="form-control">
                  
                @if (!empty($edit_member[0]->default->seat_type))
                <option>{{$edit_member[0]->default->seat_type}}</option>
                @else 
                    
                <option>{{NULL}}</option>
                @endif
                    <option>Select the Seat</option>
                    <option>General Seat</option>
                    <option>Seat 2</option>
                    <option>Seat 3</option>
                    <option>Seat 4</option>
                </select>
            </div>
            <div class="form-group">
                <label>Profession</label>
                
                @if (!empty($edit_member[0]->default->profession))
            <input name='profession' type='text' class='form-control'  value='{{$edit_member[0]->default->profession}}'>
                @else 
                    <input name='profession' type='text' class='form-control'  value='NULL'>
                
                @endif
            </div>

            
            <div class="form-group">
                <label>Department</label>
                <select name="department" class="form-control">
                    
                @if (!empty($edit_member[0]->default->department))
           <option>{{$edit_member[0]->default->department}}</option>
                @else 
                  
                <option>{{NULL}}</option>
                @endif
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>D</option>
                </select>
            </div>

         

            <div class="form-group">
                <label>Cabinet Post</label>
                <select name="cabinet_post" class="form-control">
                    
                @if (!empty($edit_member[0]->default->cabinet_post))
            <option>{{$edit_member[0]->default->cabinet_post}}</option>
                @else 
                   
                <option>{{NULL}}</option>
                @endif
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>D</option>
                </select>
            </div>
            <div class="form-group">
                <label>Party</label>
                <select name="party" class="form-control">
                   
                  
                @if (!empty($edit_member[0]->default->party))
           <option>{{$edit_member[0]->default->party}}</option>
                @else 
           <option>{{NULL}}</option>
                
                @endif
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
                
              
                @if (!empty($edit_member[0]->default->date_of_birth))
            <input name='date_of_birth' type='text' class='form-control'  value='{{$edit_member[0]->default->date_of_birth}}'>
                @else 
                    <input name='date_of_birth' type='text' class='form-control'  value='NULL'>
                
                @endif
                
            </div>
            <div class="form-group">
                <label>Religon</label>
                <select name="religon" class="form-control">
                   
                @if (!empty($edit_member[0]->default->religon))
                      <option>{{$edit_member[0]->default->religon}}</option>
                @else 
                   
                <option>{{NULL}}</option>
                @endif
                    <option>Muslim</option>
                    <option>Non muslim</option>
                </select>
            </div>

            <div class="form-group">
                <label>Marital Status</label>
                <select name="marital_status" class="form-control">
                  
                @if (!empty($edit_member[0]->default->marital_status))
            <option>{{$edit_member[0]->default->marital_status}}</option>
                @else 
                    
                <option>{{NULL}}</option>
                @endif
                    <option>single</option>
                    <option>married</option>
                </select>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-control">
                   
                @if (!empty($edit_member[0]->default->gender))
              <option>{{$edit_member[0]->default->gender}}</option>
                @else 
                     <option>{{NULL}}</option>
                
                @endif
                    <option>male</option>
                    <option>female</option>
                </select>
            </div>
            <div class="form-group">
                <label>Education</label>
                <select name="education" class="form-control">
                                      
 @if (!empty($edit_member[0]->default->education))
          
           <option>{{$edit_member[0]->default->education}}</option>
                @else 
                    
                <option>{{NULL}}</option>
                @endif
                    <option>BA</option>
                    <option>BCS</option>
                    <option>MA</option>
                    <option>Msc</option>
                </select>
            </div>
            <div class="form-group">
                <label>Present Contact</label>
                <textarea name="present_contact" class="form-control" rows="3">
                @if (!empty($edit_member[0]->default->present_contact))
                 {{$edit_member[0]->default->present_contact}}
                @else 
                   
                {{NULL}}
                @endif
                
                </textarea>
            </div>
            <div class="form-group">
                <label>Permanent Contact</label>
                <textarea name="permanent_contact" class="form-control" rows="3">
                
                  @if (!empty($edit_member[0]->default->permanent_contact))
                     {{$edit_member[0]->default->permanent_contact}}
                @else 
                 {{NULL}}
                
                @endif
                </textarea>
            </div>
            <div class="form-group">
                <label>Upload Image</label>
                
               
                
                @if (!empty($edit_member[0]->default->member_image))
                 <img src="{{asset('images/').'/'.$edit_member[0]->default->member_image}}" class="img-thumbnail" width="70" />
            <input name='member_image' type='file' class='form-control'  value="{{asset('images').'/'.$edit_member[0]->default->member_image}}">
                @else 
                    <input name='member_image' type='file' class='form-control'  value='NULL'>
                
                @endif
            </div>
           

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>





@endsection