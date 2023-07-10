@extends('master')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container-fluid pt-3">
            <section class="py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 mx-auto text-center">
                            <div class="ms-3 mb-md-5">
                                <div class="icon icon-shape icon-md bg-gradient-info shadow-info mx-auto text-center mb-4">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <h3>New Contact</h3>
                                <p>
                                    Suraj Connect
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="card card-plain">
                            <form action="{{ route('create.contact.post') }}" method="POST" id="contact-form" autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="mb-4">
                                            <div class="input-group input-group-static">
                                                <label>Full Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group input-group-static">
                                                <label>Email Address</label>
                                                <input type="email" name="email" class="form-control" placeholder="eg. surajsahani@gmail.com" required>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group input-group-static">
                                                <label>Mobile</label>
                                                <input type="tel" class="form-control" placeholder="Mobile Number"  name="mobile" required>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group input-group-static">
                                                <label>Type</label>
                                                <select class="form-control" id="type" name="type">
                                                <option value="Family">Family</option>
                                                <option value="Friend">Friend</option>
                                                <option value="Relative">Relative</option>
                                                <option value="Professional">Professional</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group input-group-static">
                                                <label>Image </label>
                                                <input type="file" name="image" accept=".jpg,.png,.jpeg,.gif,.svg" class="form-control" required>
                                            </div>
                                        </div>
                                
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn bg-gradient-info float-end">Create New Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endsection