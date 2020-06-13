@extends('frontend.admindash')
@section('dat')
 <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Table Head</strong>
                            </div>
                            @if(session('message'))
                            <p class="alert alert-success">
                                {{session('message')}}
                            </p>
                            @endif
                            @if(session('delete'))
                            <p class="alert alert-danger">
                                {{session('message')}}
                            </p>
                            @endif

                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">S.No.</th>
                                            <th scope="col">About Me</th>
                                            <th scope="col">About Me image</th>
                                            <th scope="col">About the blog</th>
                                             <th scope="col">My Skills and Experiences</th>
                                              <th scope="col">Side Projects</th>
                                               <th scope="col">Side projects image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    
                                    <tbody>
                                        @foreach($das as $dass)
                                        <tr>
                                            <td scope="row">{{$dass->id}}</td>

                                            <td>{{$dass->aboutme}}</td>
                                            <td>
                                                @php if (!empty($dass->aimage))
                                                {
                                                @endphp
                                                <center><img src="{{url('/upload/'.$dass->aimage)}}" style="height: 150px;width: 150px;border-radius: 80px"></center>
                                                    
                                                @php
                                            }
                                            else{
                                            @endphp
                                            <p>No image found</p>
                                            @php
                                        }
                                        @endphp
                                         </td>
                                               <td>{{$dass->aboutblog}}</td>
                                               <td>{{$dass->skills}}</td>
                                               <td>{{$dass->sideproject}}</td>

                                               <td>
                                                @php if (!empty($dass->simage))
                                                {
                                                @endphp
                                                <center><img src="{{url('/upload/'.$dass->simage)}}" style="height: 150px;width: 150px;border-radius: 80px"></center>
                                                    
                                                @php
                                            }
                                            else{
                                            @endphp
                                            <p>No image found</p>
                                            @php
                                        }
                                        @endphp
                                         </td>


                                            
                                            <td>
                                            
                                        <a href="{{url('/das/edit/' .$dass->id)}}" class="a">view</a>
                                        <!-- <a href="{{url('/das/update/' .$dass->id)}}" class="a">update</a> -->
                                        <a href="{{url('/das/delete/' .$dass->id)}}" class="a">Delete</a>

                                        </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </thead>
                                </table>

                            </div>
                        </div>
                    </div>
@endsection