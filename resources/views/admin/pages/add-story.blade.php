@extends('layouts.app')

@section('main-content')
    <style>
        .ck-editor__editable_inline {
            min-height: 250px;
        }

    </style>
    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')

            <div id="content">
                <div class="container">

                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="admin-form col-lg-7 ml-5" autocomplete="off" method="POST"
                        action="{{ url('process-post') }}">
                        @csrf()
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                        oninput="this.className = ''" name="type_id">
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Series</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                        oninput="this.className = ''" name="series_id">
                                        @foreach ($series as $s)
                                            <option value="{{ $s->id }}">{{ $s->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Writer</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="username"
                                        placeholder="Use Writers' Username" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Genres</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                        oninput="this.className = ''" name="genre_id">
                                        @foreach ($genres as $genre)
                                            <option value="{{ $genre->id }}">{{ $genre->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Story Tags</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="tags"
                                placeholder="love, betrayal, sex, crime" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">CTA Button Text</label>
                                    <input type="text" name="cta_btn_text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">CTA Button Link</label>
                                    <input type="text" name="cta_btn_link" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>

                        <!--Replace With Rich Text Box-->
                        <textarea id="mytextarea" name="post">Hello, World!</textarea>

                        {{-- <div id="editor" name="post"></div> --}}
                        <button class="btn btn-warning next-btn" type="submit">Next</button>
                        {{-- <a href="#" data-toggle="modal" data-target="#draftConfirm"><button class="btn btn-dark draft-btn"
                                type="button">Draft</button></a> --}}

                    </form>

                </div>
            </div>
        </div>
    </section>


    <!-- Draft Confirmation Modal -->
    <div class="modal-short fade admin-custom-modal" id="draftConfirm" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="confirmationModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Save As Draft?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href="story-archived.html"><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error)
            });
    </script>
@endsection
