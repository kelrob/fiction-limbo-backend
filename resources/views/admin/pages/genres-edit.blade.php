@extends('layouts.app')

@section('main-content')
    <style>
        .admin-form .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .admin-form .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .admin-form .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            -webkit-transition: 0.4s;
            transition: 0.4s;
        }

        .admin-form .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: #282828;
            -webkit-transition: 0.4s;
            transition: 0.4s;
        }

        .admin-form input:checked+.slider {
            background-color: #fff;
        }

        .admin-form input:focus+.slider {
            box-shadow: 0 0 1px #2196f3;
        }

        .admin-form input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
            background-color: #b4dc2c;
        }

        .admin-form .slider.round {
            border-radius: 34px;
        }

        .admin-form .slider.round:before {
            border-radius: 50%;
        }

        .admin-form .next-btn {
            padding: 10px 60px;
            border-radius: 0px;
            outline: none !important;
            box-shadow: none !important;
            font-size: 0.88rem;
            font-weight: 400;
            background-color: #f9c22f;
            border: 1px solid #f9c22f;
            color: #282828;
            margin-right: 10px;
            margin-top: 20px;
        }

        .admin-form .draft-btn {
            padding: 10px 60px;
            border-radius: 0px;
            outline: none !important;
            box-shadow: none !important;
            font-size: 0.88rem;
            font-weight: 400;
            background-color: #a5a5a5;
            border: 1px solid #a5a5a5;
            color: #282828;
            margin-top: 20px;
            margin-right: 10px;
        }


        .form-group p {
            color: #fff;
        }

    </style>
    <section id="admin-btm">
        <div class="wrapper">
            <!--Side Navigarion Bar-->
            @include('admin.includes.sidebar')

            <div id="content">
                <div class="container">
                    <div class="admin-wrap">
                        <!--Main Page Content-->
                        <div class="admin-body" style="">
                            <div class="row">
                                <div class="col-lg-12">
                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    <form class="admin-form" method="POST" enctype="multipart/form-data"
                                        action="{{ url('update-genre') }}">
                                        @csrf()
                                        <label for="exampleInputEmail1">Title</label>
                                        <div class="input-group">
                                            <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                                value="{{ $genre->title }}" aria-describedby="emailHelp">
                                        </div>

                                        <label for="exampleInputEmail1">Cover Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="cover_image">
                                            <span class="input-group-btn">
                                                <button class="btn admin-upload-btn" type="button"><img
                                                        src="../../../img/icons/admin/upload.svg">Upload</button>
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <p>Add as new homepage category</p>
                                            <label class="switch text-danger">
                                                <input type="checkbox"
                                                    {{ $genre->homepage_category == true ? 'checked' : '' }}
                                                    name="homepage_category">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <p>Add as new search page genre</p>
                                            <label class="switch">
                                                <input type="checkbox" {{ $genre->search_page == true ? 'checked' : '' }}
                                                    name="search_page">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <input type="hidden" name="id" value="{{ $genre->id }}" />


                                        <button class="btn btn-warning next-btn" type="submit">Update</button>
                                        {{-- <button class="btn btn-dark draft-btn" type="button" id="draftShow">Archive</button> --}}

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
