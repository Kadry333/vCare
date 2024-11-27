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
                <x-DoctorCard :doctor="$doctor" />
                @empty
                <dev class="text-center alert alert-info">There is no doctors for this major yet</div>
                @endforelse
            </div>
    </div>
    <div class="pagination-wrapper d-flex justify-content-center mt-4">
    {{$doctors->links()}}
    </div>
@endsection