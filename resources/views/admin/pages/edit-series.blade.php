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
                                <div class="col-lg-12 p-4">
                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    <form class="admin-form" method="POST" enctype="multipart/form-data"
                                        action="{{ url('update-series') }}">
                                        @csrf()
                                        <label for="exampleInputEmail1">Title</label>
                                        <div class="input-group">
                                            <input type="text" name="title" value="{{ $series->title }}"
                                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>

                                        <div class="form-group">
                                            <div class="longer-genre">
                                                <label for="exampleFormControlSelect1">Genres</label>
                                                <select class="form-control" id="exampleFormControlSelect1"
                                                    oninput="this.className = ''" name="genre_id">
                                                    <option value="{{ $series->genre->id }}">{{ $series->genre->title }}
                                                    </option>
                                                    @foreach ($genres as $genre)
                                                        <option value="{{ $genre->id }}">{{ ucfirst($genre->title) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <label for="exampleInputEmail1">Series Header Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="header_image">
                                            <span class="input-group-btn">
                                                <button class="btn admin-upload-btn" type="button"><img
                                                        src="../img/icons/admin/upload.svg">Upload</button>
                                            </span>
                                        </div>

                                        <label for="exampleInputEmail1">Series Background Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="background_image">
                                            <span class="input-group-btn">
                                                <button class="btn admin-upload-btn" type="buttom"><img
                                                        src="../img/icons/admin/upload.svg">Upload</button>
                                            </span>
                                        </div>


                                        <label for="exampleInputEmail1">Description</label>
                                        <div class="input-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"
                                                name="description">{{ $series->description }}</textarea>
                                        </div>

                                        <input type="hidden" name="series_id" value="{{ $series->id }}" />
                                        <button class="btn btn-warning next-btn" type="submit"
                                            id="seriespositive">Update</button>

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
