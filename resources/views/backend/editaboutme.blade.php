@extends('frontend.admindash')
@section('dat')                                <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Fill Form</strong> 
                                </div>
                           <div class="card-body card-block">
                         <form action="{{url('/save')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                              @if(session('message'))

                             <p class="alert alert-success">
                                 {{session('message')}}
                             </p>
                             @endif
                            {{ csrf_field()}}
                                                            
                            <div class="row form-group">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">About Me</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="aboutme" placeholder="Text" class="form-control"></div>
           </div>
                      <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">About me image</label></div>
                     <div class="col-12 col-md-9">     
                       	<input type="file" id="file-input" name="aimage" class="form-control-file">
                       </div>
                      </div>
                                                            
                                                            
        <div class="row form-group">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">About the blog</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="aboutblog" placeholder="Text" class="form-control"></div>
           </div>
                                   <div class="row form-group">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">My Skills and Experiences</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="skills" placeholder="Text" class="form-control"></div>
           </div>
                                   <div class="row form-group">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Side Projects</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="sideproject" placeholder="Text" class="form-control"></div>
           </div>                                 
             <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Side projects image</label></div>
                           <div class="col-12 col-md-9">
                           	<input type="file" id="file-input" name="simage" value="" class="form-control-file"></div>
                                                                </div>

           </div>
                  <div class="card-footer">
              <button type="submit" class="btn btn-primary btn-sm">
                                            Submit
                                                        </button>
                                                                            
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


@endsection