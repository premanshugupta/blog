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
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Blog Post Image</label></div>
                     <div class="col-12 col-md-9">     
                 	<input type="file" id="file-input" name="bpimage" class="form-control-file">
                       </div>
                      </div>
                                                            
                                                            
        <div class="row form-group">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog Post Content</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="bpcontent" placeholder="Text" class="form-control"></div>
           </div>
                                   <div class="row form-group">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Code Block</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="codeblock" placeholder="Text" class="form-control"></div>
           </div>

              <div class="row form-group">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Typo graphy</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="typography" placeholder="Text" class="form-control"></div>
           </div>

                                   <div class="row form-group">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bullet Point</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="bulletpoint" placeholder="Text" class="form-control"></div>
           </div>                   

            <div class="row form-group">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Quote Example</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="quoteexample" placeholder="Text" class="form-control"></div>
           </div>  


            <div class="row form-group">
    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Video Content</label></div>
        <div class="col-12 col-md-9"><input type="text" id="text-input" name="videocontent" placeholder="Text" class="form-control"></div>
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