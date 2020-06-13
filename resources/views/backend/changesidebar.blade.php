@extends('frontend.admindash')
@section('dat')
                                            <div class="col-lg-6">
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
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Text" class="form-control"></div>
           </div>
                      <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Profile</label></div>
                           <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                                                                </div>
                                                            
                                                            
             <div class="row form-group">
                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Introduction</label></div>
         <div class="col-12 col-md-9">
    <textarea name="intro" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>  
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