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
                            <form action="{{ route('update.contact.post') }}" method="POST" id="contact-form" autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                        <input type="hidden" name="hidden_id" value="{{$contact->id}}">
                                        <div class="mb-4">
                                            <div class="input-group input-group-static">
                                                <label>Full Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{$contact->name}}" required>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group input-group-static">
                                                <label>Email Address</label>
                                                <input type="email" name="email" value="{{$contact->email}}"class="form-control" placeholder="eg. surajsahani@gmail.com" required>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group input-group-static">
                                                <label>Mobile</label>
                                                <input type="tel" class="form-control" placeholder="Mobile Number" value="{{$contact->mobile}}"  name="mobile" required>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group input-group-static">
                                                <label>Type</label>
                                                <select class="form-control" id="type" name="type">
            <option value="Family" @if($contact->type === 'family') selected @endif>Family</option>
            <option value="Friend" @if($contact->type === 'friend') selected @endif>Friend</option>
            <option value="Relative" @if($contact->type === 'relative') selected @endif>Relative</option>
            <option value="Professional" @if($contact->type === 'professional') selected @endif>Professional</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group input-group-static">
                                                <label>Image </label>
                                                <input type="file" name="image" accept=".jpg,.png,.jpeg,.gif,.svg" class="form-control">
                                               
					                            <br />
					<img src="{{ asset('images/' . $contact->image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_contact_image" value="{{ $contact->image }}" />
                                            </div>
                                        </div>
                                
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn bg-gradient-info float-end">Update Contact Data</button>
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