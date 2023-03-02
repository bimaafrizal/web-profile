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
                        Ut in ea error laudantium quas omnis officia. Sit sed
                        praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur
                        soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita.
                        Consequatur sint repellendus voluptas. Quidem sit est nulla ullam. Suscipit debitis ullam iusto
                        dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut. Rerum dolor voluptatem et
                        deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->
@endsection
