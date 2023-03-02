@extends('layouts.dashboard.main')

@section('title')
Setting Landing Page
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Landing Page</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-bordered mt-2" id="borderedTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">
                                    Home & Contact
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#instansi" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false" tabindex="-1">
                                    Clients & Service
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-us"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false"
                                    tabindex="-1">
                                    About us
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="borderedTabContent">
                            <div class="tab-pane fade show active" id="bordered-home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <img src="{{ asset('01.png') }}" class="img-fluid" alt="">
                                @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                                <form class="mt-3" action="{{ route('landing-page.home') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">Title* (Kotak Merah)</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="title" name="title" class="form-control @error('title') is-invalid
                                            @enderror" value="{{ old('title', $pages->title) }}">
                                            @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="description" class="col-sm-2 col-form-label">Description* (Kotak
                                            Biru)</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="description" name="description" class="form-control @error('description') is-invalid
                                            @enderror" value="{{ old('description', $pages->description) }}">
                                            @error('description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>

                                <h2>Contact</h2>
                                <form class="mt-3" action="{{ route('landing-page.contact') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="address" class="col-sm-2 col-form-label">Address*</label>
                                        <div class="col-sm-10">
                                            <textarea id="address" name="address" cols="30" rows="3" class="form-control @error('address') is-invalid
                                            @enderror">{{ old('address', $pages->address) }}</textarea>
                                            @error('address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-2 col-form-label">Email*</label>
                                        <div class="col-sm-10">
                                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid
                                            @enderror" value="{{ old('email', $pages->email) }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="phone_num" class="col-sm-2 col-form-label">Nomor Telepon*</label>
                                        <div class="col-sm-10">
                                            <input type="number" id="phone_num" name="phone_num" class="form-control @error('phone_num') is-invalid
                                            @enderror" value="{{ old('phone_num', $pages->phone_num) }}">
                                            @error('phone_num')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="twitter" name="twitter" class="form-control @error('twitter') is-invalid
                                            @enderror" value="{{ old('twitter', $pages->twitter) }}">
                                            @error('twitter')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="facebook" name="facebook" class="form-control @error('facebook') is-invalid
                                            @enderror" value="{{ old('facebook', $pages->facebook) }}">
                                            @error('facebook')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="instagram" name="instagram" class="form-control @error('instagram') is-invalid
                                            @enderror" value="{{ old('instagram', $pages->instagram) }}">
                                            @error('instagram')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="linkedin" class="col-sm-2 col-form-label">Linkedin</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="linkedin" name="linkedin" class="form-control @error('linkedin') is-invalid
                                            @enderror" value="{{ old('linkedin', $pages->linkedin) }}">
                                            @error('linkedin')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="instansi" role="tabpanel" aria-labelledby="profile-tab">
                                <h3>Clients</h3>
                                <img src="{{ asset('02.png') }}" class="img-fluid" alt="">
                                <div class="d-flex justify-content-start">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modal-create-client">Tambah Clients</button>
                                </div>
                                <table class="table datatable table-responsive">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Logo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $client->name }}</td>
                                            <td> 
                                                <img src="{{ asset($client->logo) }}" class="img-fluid img-thumbnail" alt="">
                                            </td>
                                            <td>
                                                <a href="#modal-edit-client{{ $client->id }}"  data-bs-toggle="modal" class="btn btn-warning">Edit</a>
                                                <form
                                                    action="{{ route('clients.delete', ['id' => encrypt($client->id)]) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <h3 class="mt-4"><b>Service</b></h3>
                                <img src="{{ asset('04.png') }}" class="img-fluid" alt="">
                                <div class="d-flex justify-content-start">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modal-create-service">Tambah Service</button>
                                </div>
                                <table class="table datatable table-responsive">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Icon</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $service)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td>{{ $service->icon }}</td>
                                            <td>{{ $service->description }}</td>
                                            <td>
                                                <a href="#modal-edit-service{{ $service->id }}" class="btn btn-warning" data-bs-toggle="modal">Edit</a>
                                                <form
                                                    action="{{ route('service.delete', ['id' => encrypt($service->id)]) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="about-us" role="tabpanel" aria-labelledby="contact-tab">
                                <img src="{{ asset('03.png') }}" class="img-fluid" alt="">
                                <form class="mt-3" action="{{ route('landing-page.about') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="about1" class="col-sm-2 col-form-label">About1* (Kotak
                                            Merah)</label>
                                        <div class="col-sm-10">
                                            <textarea id="about1" name="about1" cols="30" rows="3" class="form-control @error('about1') is-invalid
                                            @enderror">{{ old('about1', $pages->about1) }}</textarea>
                                            @error('about1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="about2" class="col-sm-2 col-form-label">About2* (Kotak
                                            Biru)</label>
                                        <div class="col-sm-10">
                                            <textarea id="about2" name="about2" cols="30" rows="5" class="form-control @error('about2') is-invalid
                                            @enderror">{{ old('about2', $pages->about2) }}</textarea>
                                            @error('about2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="d-flex justify-content-end mt-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                </form>
                                <div class="row my-3">
                                    <h3>Detail About Us (Kotak Oren)</h3>
                                    <div class="d-flex justify-content-start">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Tambah Detail</button>
                                    </div>
                                    <table class="table datatable table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Detail</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($details as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->detail }}</td>
                                                <td>
                                                    <a href="#edit-about{{ $item->id }}" class="btn btn-warning" data-bs-toggle="modal">Edit</a>
                                                    <form
                                                        action="{{ route('detail-about.delete', ['id' => encrypt($item->id)]) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->


{{-- Detail About Modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Detail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('detail-about.create') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="row mb-3">
                        <label for="detail" class="form-label">Detail About Us</label>
                        <input id="detail" name="detail" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@foreach ($details as $item)    
<div class="modal fade" id="edit-about{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Detail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('detail-about.edit', ['id' => encrypt($item->id)]) }}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="row mb-3">
                        <label for="detail" class="form-label">Detail About Us</label>
                        <input id="detail" name="detail" class="form-control" value="{{ $item->detail }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

{{-- Service --}}
<div class="modal fade" id="modal-create-service" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Service</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('service.create') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row mb-3">
                        <label for="title" class="form-label">Title*</label>
                        <input type="text" id="title" name="title" class="form-control" required value="{{ old('title') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="icon" class="form-label">Icon*</label>
                        <small>(using bootstrap icons)</small>
                        <input type="text" id="icon" name="icon" class="form-control" required value=" {{ old('icon') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="form-label">Description*</label>
                        <textarea name="description" id="description" cols="30" rows="3" required> {{ old('description') }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@foreach ($services as $service)
<div class="modal fade" id="modal-edit-service{{ $service->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Service</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('service.edit', ['id' => encrypt($service->id)]) }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row mb-3">
                        <label for="title" class="form-label">Title*</label>
                        <input type="text" id="title" name="title" class="form-control" required value="{{ old('title', $service->title) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="icon" class="form-label">Icon*</label>
                        <small>(using bootstrap icons)</small>
                        <input type="text" id="icon" name="icon" class="form-control" required value=" {{ old('icon', $service->icon) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="form-label">Description*</label>
                        <textarea name="description" id="description" cols="30" rows="3" required> {{ old('description', $service->description) }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

{{-- Client --}}
<div class="modal fade" id="modal-create-client" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Clients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('clients.create') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" id="name" name="name" class="form-control" required value="{{ old('name') }}">
                    </div>
                    <div class="row mb-3">
                        <label for="logo" class="form-label">Logo*</label>
                        <input type="file" id="logo" name="logo" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@foreach ($clients as $item)
<div class="modal fade" id="modal-edit-client{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Clients</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('clients.edit', ['id' => encrypt($item->id)]) }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" id="name" name="name" class="form-control" required value="{{ old('name', $item->name) }}">
                    </div>
                    <div class="row mb-3">
                        <label for="logo" class="form-label">Logo*</label>
                        <input type="file" id="logo" name="logo" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
