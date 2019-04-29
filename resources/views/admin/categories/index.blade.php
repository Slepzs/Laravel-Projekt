@extends('layouts.admin')



@section('content')


    <h1>Categories</h1>


    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store'])  !!}

            <div class="form-group">
                {!! Form::label('name', 'Title') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
               {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

    </div>

    <div class="col-sm-6">

        @if($categories)

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Category Id</th>
                    <th>Category Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)

                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
                        <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'No Date'}}</td>
                        <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : 'No Date'}}</td>
                    </tr>

                @endforeach

                </tbody>
            </table>

        @endif


    </div>



    @stop