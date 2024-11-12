@extends('front.app')
@section('content')
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">doctors</li>
                </ol>
            </nav>
            <div class="doctors-grid">
                @forelse ($doctors as $doctor)
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('site/images/'.$doctor->image)}}" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">{{$doctor->name}}</h4>
                        <h6 class="card-title fw-bold text-center">{{$doctor->major->name}}</h6>
                        <a href="{{url('doctor')}}"  class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                @empty
                <dev class="text-center alert alert-info">There is no doctors for this major yet</div>
                @endforelse
            </div>
    </div>
    <div class="pagination-wrapper d-flex justify-content-center mt-4">
    {{$doctors->links()}}
    </div>
@endsection