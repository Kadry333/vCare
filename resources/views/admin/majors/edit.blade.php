@extends('front.app')


@section('content')       
<div class="container">
<div class="row">
    <div class="col-12">
        <form action="{{url('majors/'.$major->id)}}" method="post" class="my-5 border p-3" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <x-success/>
            <div class="mb-3">
                <label for="">Major Name</label>
                <input type="text" name="name" value="{{$major->name}}" id="" class="form-control">
                <x-error field="name"/>
            </div>
            <div class="mb-3">
                <label for="">Major Image</label>
                <input type="file" name="image" id="" class="form-control">
                <x-error field="image"/>
            </div>
            <div class="mb-3">
                <input type="submit" value="Save" class="form-control btn btn-primary">
            </div>
            <div class="text-center">
                <img src="{{asset('uploads/majors/'.$major->image)}}" height="300" width="300" alt="">
            </div>
        </form>
        
    </div>
</div>

       @include('admin.majors.template')

@endsection