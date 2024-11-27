
    <div class="card p-2" style="width: 18rem;">
        <img src="{{ asset('site/images/major.jpg') }}" class="card-img-top rounded-circle card-image-circle" alt="major">
        <div class="card-body d-flex flex-column gap-1 justify-content-center">
            <h4 class="card-title fw-bold text-center">{{ $doctor->name }}</h4>
            <h6 class="card-title fw-bold text-center">{{ $doctor->major->name }}</h6>
            <a href="{{ route('appointments.create', $doctor->id) }}" class="btn btn-outline-primary card-button">Book an appointment</a>
        </div>
    </div>
    
