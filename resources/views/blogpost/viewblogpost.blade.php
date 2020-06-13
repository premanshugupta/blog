@extends('frontend.admindash')
@section('dat')
      <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Fill Form</strong> 
                                </div>
                           <div class="card-body card-block">
                         <form action="{{url('/dar/update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                              @if(session('message'))

                             <p class="alert alert-success">
                                 {{session('message')}}
                             </p>
                             @endif
                            {{ csrf_field()}}

                                          
                             <div class="row form-group">
                             	 <input type="hidden" name="id" value="{{$dar->id}}">
       <div class="col col-md-3"><label for="file-input" class=" form-control-label">Blog Post Image</label></div>
         <div class="col-12 col-md-9">
        <img src="{{url('/upload/' .$dar->aimage)}}">
      	<input type="file" id="file-input" name="bpimage" value="{{$dar->bpimage}}" class="form-control-file"></div>
        </div>     

                            <div class="row form-group">
                             
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog post Content</label></div>
   <div class="col-12 col-md-9"><input type="text" id="text-input" name="aboutme" value="{{$dar->bpcontent}}" placeholder="Text" class="form-control"></div>
           </div>
            <div class="row form-group">             
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Code Block</label></div>
   <div class="col-12 col-md-9"><input type="text" id="text-input" name="aboutme" value="{{$dar->codeblock}}" placeholder="Text" class="form-control"></div>
           </div>
                                                  
                                   <div class="row form-group">                          
       <div class="col col-md-3"><label for="text-input" class=" form-control-label">Typography</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="aboutblog" value="{{$dar->typography}}" placeholder="Text" class="form-control"></div>
         </div>
           <div class="row form-group"> 
        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bullet points</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="skills" value="{{$dar->bulletpoint}}" placeholder="Text" class="form-control"></div>
         </div>

         <div class="row form-group"> 
         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Quote Example</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="sideproject" value="{{$dar->quoteexample}}" placeholder="Text" class="form-control"></div>
           </div>

            <div class="row form-group"> 
         <div class="col col-md-3"><label for="text-input" class=" form-control-label">Video Content</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="sideproject" value="{{$dar->videocontent}}" placeholder="Text" class="form-control"></div>
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