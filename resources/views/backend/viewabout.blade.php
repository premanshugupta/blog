@extends('frontend.admindash')
@section('dat')
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Fill Form</strong> 
                                </div>
                           <div class="card-body card-block">
                         <form action="{{url('/das/update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                              @if(session('message'))

                             <p class="alert alert-success">
                                 {{session('message')}}
                             </p>
                             @endif
                            {{ csrf_field()}}

                                                            
                            <div class="row form-group">
                              <input type="hidden" name="id" value="{{$das->id}}">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">About Me</label></div>
   <div class="col-12 col-md-9"><input type="text" id="text-input" name="aboutme" value="{{$das->aboutme}}" placeholder="Text" class="form-control"></div>
           </div>
       <div class="row form-group">
       <div class="col col-md-3"><label for="file-input" class=" form-control-label">About me image</label></div>
         <div class="col-12 col-md-9">
        <img src="{{url('/upload/' .$das->aimage)}}">
      	<input type="file" id="file-input" name="aimage" value="{{$das->aimage}}" class="form-control-file"></div>
        </div>                                               
                                                            
       <div class="col col-md-3"><label for="text-input" class=" form-control-label">About Blog</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="aboutblog" value="{{$das->aboutblog}}" placeholder="Text" class="form-control"></div>
         </div>

        <div class="col col-md-3"><label for="text-input" class=" form-control-label">My skills and expieriences</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="skills" value="{{$das->skills}}" placeholder="Text" class="form-control"></div>
         </div>
         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Side Projects</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="sideproject" value="{{$das->sideproject}}" placeholder="Text" class="form-control"></div>
           </div>

            <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Side Projects image</label></div>
                           <div class="col-12 col-md-9">
                           <img src="{{url('/upload/' .$das->simage)}}">
                            <input type="file" id="file-input" name="simage" value="{{$das->simage}}" class="form-control-file"></div>
                                                                </div>

           </div>
                  <div class="card-footer">
              <button type="submit" class="btn btn-primary btn-sm">
                                            Update
                                                        </button>
                                                                            
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                                 


                                                @endsection