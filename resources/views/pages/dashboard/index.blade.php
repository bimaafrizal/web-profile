@extends('layouts.dashboard.main')

@section('title')
Dashboard
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Welcome to Dashboard</h5> 
                        Selamat datang di dashboard web Media Digital Inovasi, dashboard ini digunakan untuk merubah landing page dari web CV Media Digital Inovasi
                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection
