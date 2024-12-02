@extends('front.app')
@section('content')
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">majors</li>
                </ol>
            </nav>
            <div class="row">
                @auth
                @if(auth()->user()->role=="admin")
                <div class="col-12 my-2 text-center">
                    <a href="{{url('majors/add')}}" class="btn btn-success">Add Major</a>
                </div>
                @endif
                @endauth
                <x-success/>
                
            </div>
            <div class="majors-grid">
            @foreach ($majors as $major)
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset($major->image)}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">{{$major->name}}</h4>
                    <a href="{{url('majors/' . $major->id . '/doctors')}}" class="btn btn-outline-primary card-button w-100 mb-2 py-2">Browse Doctors</a>
                    @auth
                    @if(auth()->user()->role=="admin"){{--autharization--}}
                    <a href="{{ url('majors/' . $major->id . '/edit') }}" class="btn btn-outline-info card-button w-100 mb-2 py-2">Edit Major</a>
                    <form action="{{ url('majors/' . $major->id) }}" method="POST" class="w-100 mb-2" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger card-button w-100 py-2" >
                            Delete Major
                        </button>
                        @endif
                        @endauth
                    </form>
                    

                </div>
            </div>
            @endforeach
            </div>
            <div class="pagination-wrapper d-flex justify-content-center mt-4">
                {{ $majors->links() }}
            </div>
        </div>
    </div>
@endsection
