@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        @if (!empty($setting))
                        <h3 class=" mx-4 my-1">Setting</h3>
                        @else
                        <a href="/setting/create" class="btn btn-primary m-1">Add Setting</a>
                        @endif
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Logo</th>
                                <th>Company Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Reg no.</th>
                                <th>Action</th>
                            </tr>

                            @if (!empty($setting))
                            <tr>
                                <td><img src=" {{ asset($setting->logo) }} " width="32" alt=""></td>
                                <td> {{ $setting->name }} </td>
                                <td> {{ $setting->address }} </td>
                                <td> {{ $setting->email }} </td>
                                <td> {{ $setting->contact }} </td>
                                <td> {{ $setting->regno }} </td>
                                <td>
                                    <a href="setting/{{$setting->id}}/edit" class="badge bg-primary">Edit</a>
                                    <a href="setting/{{$setting->id}}"  class="badge bg-danger">Delete</a>
                                </td>
                            </tr>
                            @endif
                          
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection