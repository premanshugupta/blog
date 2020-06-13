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
                                            <th scope="col">Name</th>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Introduction</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    
                                    <tbody>
                                        @foreach($curd as $curds)
                                        <tr>
                                            <td scope="row">{{$curds->id}}</td>
                                            <td>{{$curds->name}}</td>
                                            <td>
                                                @php if (!empty($curds->image))
                                                {
                                                @endphp
                                                <center><img src="{{url('/upload/'.$curds->image)}}" style="height: 150px;width: 150px;border-radius: 80px"></center>
                                                    
                                                @php
                                            }
                                            else{
                                            @endphp
                                            <p>No image found</p>
                                            @php
                                        }
                                        @endphp
                                         </td>
                                               



                                            <td>{{$curds->intro}}</td>
                                            <td>
                                            
                                        <a href="{{url('/curd/edit/' .$curds->id)}}" class="a">view</a>
                                        <!-- <a href="{{url('/curd/update/' .$curds->id)}}" class="a">update</a> -->
                                        <a href="{{url('/curd/delete/' .$curds->id)}}" class="a">Delete</a>

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