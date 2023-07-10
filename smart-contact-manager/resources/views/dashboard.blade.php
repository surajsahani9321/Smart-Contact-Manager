@extends('master')
@section('content')
<div class="container-fluid pt-3">
  <div class="row removable">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card mb-4">
        <div class="card-header p-3 pt-2">
          <div
            class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Family Contacts</p>
            <h4 class="mb-0">{{$family}}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <p class="mb-0"><span class="text-dark text-sm font-weight-bolder">Live Data</span></p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card mb-4">
        <div class="card-header p-3 pt-2">
          <div
            class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Friend Contact</p>
            <h4 class="mb-0">{{$friend}}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">Live Data</span></p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card mb-4">
        <div class="card-header p-3 pt-2">
          <div
            class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Profession Contacts</p>
            <h4 class="mb-0">{{$profession}}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Live Data</span></p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card mb-4">
        <div class="card-header p-3 pt-2">
          <div
            class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Relative Contacts</p>
            <h4 class="mb-0">{{$relative}}</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <p class="mb-0"><span class="text-primary text-sm font-weight-bolder">Live Data</span></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row removable bg-white rounded-lg shadow-sm">
    <div class="col-12 col-md-12 col-xl-4 mt-md-0 mt-4 position-relative">
      <div class="card card-plain h-100 mb-4">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-md-8 d-flex align-items-center">
              <h6 class="mb-0">Profile Information</h6>
            </div>
            <div class="col-md-4 text-end">
              <a href="javascript:;">
                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                  aria-hidden="true" aria-label="Edit Profile"></i><span class="sr-only">Edit Profile</span>
              </a>
            </div>
          </div>
        </div>
        <div class="card-body p-3">
          <p class="text-sm">
            Hi, I’m Suraj Sahani
          </p>
          <hr class="horizontal gray-light my-4">
          <ul class="list-group">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Your ID :</strong>
              &nbsp;{{Auth::user()->id}}</li>
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong>
              &nbsp;{{Auth::user()->name}}</li>
            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp;
              {{Auth::user()->email}}</li>
            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Password :</strong> &nbsp;
              {{Auth::user()->password}}</li>
            <li class="list-group-item border-0 ps-0 pb-0">
              <strong class="text-dark text-sm">Social:</strong> &nbsp;
              <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                <i class="fab fa-facebook fa-lg" aria-hidden="true"></i>
              </a>
              <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                <i class="fab fa-twitter fa-lg" aria-hidden="true"></i>
              </a>
              <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                <i class="fab fa-instagram fa-lg" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <hr class="vertical dark">
    </div>
    <div class="col-12 col-xl-4 mt-xl-0 mt-4">
      <div class="card card-plain h-100 mb-4">
        <div class="card-header pb-0 p-3">
          <h6 class="mb-0">Your Contacts</h6>
        </div>
        <div class="card-body p-3">
          <ul class="list-group">
            @foreach ($contacts as $contact)
            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
              <div class="avatar me-3">
              <img src="{{ asset('images/' . $contact->image) }}" class="avatar avatar-sm me-3" alt="xd">
              </div>
              <div class="d-flex align-items-start flex-column justify-content-center">
                <h6 class="mb-0 text-sm">{{$contact->name}}</h6>
                <p class="mb-0 text-xs">{{$contact->email}}</p>
              </div>
              <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="{{ route('contact.show.get', $contact) }}">View</a>
            </li>
            @endforeach 
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
