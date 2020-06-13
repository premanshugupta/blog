@extends('main.master');
@section('data')
<div class="main-wrapper">
	    	    
	    <article class="about-section py-5">
		    <div class="container">
		    	@foreach($das as $dass)
			    <h2 class="title mb-3">About Me</h2>
			    
			    <p>{{$dass->aboutme}} </p>

			    <figure>
			    	 @php if (!empty($dass->aimage))
                    {
                        @endphp
				    <img class="img-fluid" src="{{url('/upload/'.$dass->aimage)}}" alt="image" >
                    @php
                }		
                else
                {
                    @endphp
                    <p>No image found</p>
                    @php
                }	
                @endphp
			    </figure>


			    <h5 class="mt-5">About The Blog</h5>
			    <p> {{$dass->aboutblog}}</p>
			    <h5 class="mt-5">My Skills and Experiences</h5>
			    <p> {{$dass->skills}}</p>
			    <h5 class="mt-5">Side Projects</h5>
			    <p>{{$dass->sideproject}}</p>
			    
			    <figure>
			    	<a href="https://made4dev.com">
                      @php if (!empty($dass->simage))
                    {
                        @endphp
				    <img class="img-fluid" src="{{url('/upload/'.$dass->simage)}}" alt="image" >
                    @php
                }		
                else
                {
                    @endphp
                    <p>No image found</p>
                    @php
                }	
                @endphp
			    </a>
			    </figure>
			    @endforeach
		    </div>

	    </article><!--//about-section-->
	    
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">Newsletter</h2>
			    <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
		    </div><!--//container-->
	    </section>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
@endsection