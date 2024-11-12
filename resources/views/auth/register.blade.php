@extends('front.app')

@section('content')       
<div class="container">
<div class="row">
    <div class="col-12">
        <form action="{{route('auth.store')}}" method="post" class="my-5 border p-3" enctype="multipart/form-data">
            @csrf
            <x-success/>
            <div class="mb-3">
                <h1 class="text-center my-3 p-3">Create Account</h1>
            <div class="mb-3">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control">
                <x-error field="name"/>
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control">
                <x-error field="email"/>
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control">
                <x-error field="password"/>
            </div>
            <div class="mb-3">
                <label for="">Confirm Password</label>
                <input type="password" name="password_confirmation" id="" class="form-control">
                <x-error field="name"/>
            </div>
            <div class="mb-3">
                <input type="submit" value="Save" class="form-control btn btn-primary">
            </div>

        </form>
    </div>
</div>

@include('admin.majors.template')


@endsection