@extends('layouts.admin')






@section('content')

    @if(Session::has('deleted_user'))

        <p>{{session('deleted_user')}}</p>

        @endif

    <h1>Users</h1>



   <table class="table table-striped">
       <thead>
         <tr>
            <th>ID</th>
             <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Role</th>
            <th>Created</th>
            <th>Updated</th>
             <th>Photo Id</th>
         </tr>
       </thead>
       <tbody>

       @if($users)


           @foreach($users as $user)

         <tr>
            <td>{{$user->id}}</td>
            <th><img width="50px" src="{{$user->photo ? $user->photo->file : '/images/1556108887289.png'}}" alt="" class="img-responsive img-rounded"></th>
             <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
             <td>{{$user->photo_id}}</td>
         </tr>
         <tr>

         @endforeach

       @endif

       </tbody>
   </table>



@stop