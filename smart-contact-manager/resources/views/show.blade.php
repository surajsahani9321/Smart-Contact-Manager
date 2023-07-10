@extends('master')
@section('content')

  <div class="row removable bg-white rounded-lg shadow-sm">
    <div class="col-12 col-md-12 col-xl-4 mt-md-0 mt-4 position-relative">
      <div class="card card-plain h-100 mb-4">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-md-8 d-flex align-items-center">
              <h6 class="mb-0">Suraj Connect</h6>
            </div>
            <div class="col-md-4 text-end">
              <a href="javascript:;">
                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                  aria-hidden="true" aria-label="Edit Profile"></i><span class="sr-only">Contact name is :- {{$contact->name}}</span>
              </a>
            </div>
          </div>
        </div>
        <div class="card-body p-3">
          <hr class="horizontal gray-light my-4">
          <ul class="list-group">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark"> ID :</strong>
              &nbsp;{{$contact->id}}</li>
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong>
              &nbsp;{{$contact->name}}</li>
            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp;
            {{$contact->email}}</li>
            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile :</strong> &nbsp;
            {{$contact->mobile}}</li>
            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Type :</strong> &nbsp;
            {{$contact->type}}</li>
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
    </div>
@endsection
