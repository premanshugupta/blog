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
                                            <th scope="col">Blog Post Image</th>
                                            <th scope="col">Blog Post Content</th>
                                            <th scope="col">Code Block</th>
                                            <th scope="col">Typography</th>
                                             <th scope="col">Bullet Points</th>
                                              <th scope="col">Quote Example</th>
                                               <th scope="col">Video Content</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    
                                    <tbody>
                                        @foreach($dar as $dars)
                                        <tr>
                                        	 <td scope="row">{{$dars->id}}</td>
                                        	<td>
                                                @php if (!empty($dars->bpimage))
                                                {
                                                @endphp
                                                <center><img src="{{url('/upload/'.$dars->bpimage)}}" style="height: 150px;width: 150px;border-radius: 80px"></center>
                                                    
                                                @php
                                            }
                                            else{
                                            @endphp
                                            <p>No image found</p>
                                            @php
                                        }
                                        @endphp
                                         </td>
                                           

                                            <td>{{$dars->bpcontent}}</td>
                                           
                                               <td>{{$dars->codeblock}}</td>
                                               <td>{{$dars->typography}}</td>
                                               <td>{{$dars->bulletpoint}}</td>
                                               <td>{{$dars->quoteexample}}</td>
                                               <td>{{$dars->videocontent}}</td>

                                            <td>
                                            
                                        <a href="{{url('/dar/edit/' .$dars->id)}}" class="a">view</a>
                                        <!-- <a href="{{url('/curd/update/' .$dars->id)}}" class="a">update</a> -->
                                        <a href="{{url('/dar/delete/' .$dars->id)}}" class="a">Delete</a>

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
