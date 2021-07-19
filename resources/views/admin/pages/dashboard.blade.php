@extends('layouts.app')

@section('main-content')

    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')
            <div id="content" style="padding:0px!important;">

                <div class="dashboard-wrap">

                    <a class="dashboard-cat dc-bg1" href={{ url('featured-posts') }}>
                        <h2>Featured Post</h2>
                    </a>

                    <a class="dashboard-cat dc-bg2" href={{ url('genres') }}>
                        <h2>Genres</h2>
                    </a>

                    <a class="dashboard-cat dc-bg3" href={{ url('series') }}>
                        <h2>Series</h2>
                    </a>

                </div>

            </div>
        </div>
    </section>

@endsection
