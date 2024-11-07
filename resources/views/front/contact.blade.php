@extends('front.app')
@section('content')
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">contact</li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
                <form class="form" method="POST" action="{{url('send-message')}}" novalidate action="">
                    @csrf
                    <x-success/>
                    <div class="form-items">
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" value="{{old('name')}}"name="name" class="form-control" id="name" required>
                            <x-error field="name"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email"value="{{old('email')}}" name="email" class="form-control" id="email" required>
                            <x-error field="email"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="subject">subject</label>
                            <input type="text"value="{{old('subject')}}" name="subject" class="form-control" id="subject" required>
                            <x-error field="subject"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="message">message</label>
                            <textarea class="form-control" name="message" id="message" required>{{old('message')}}</textarea>
                            <x-error field="message"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
    </div>
@endsection