@extends('layouts.app')

@section('main-content')

    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')

            <div id="content">
                <div class="container">

                    <form class="admin-form col-lg-7 ml-5" autocomplete="off">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                        oninput="this.className = ''">
                                        <option>Limbo Short Story</option>
                                        <option>Limbo Original Series</option>
                                        <option>Book Reviews</option>
                                        <option>Poetry</option>
                                        <option>Spoken Word</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Series</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                        oninput="this.className = ''">
                                        <option>Not Applicable</option>
                                        <option>Araromire</option>
                                        <option>Diary Of A Serial Cheat</option>
                                        <option>Son of The Crow</option>
                                        <option>Crusaders</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Writer</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Use Writers' Username" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Genres</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                        oninput="this.className = ''">
                                        <option>Sad Stories</option>
                                        <option>LGBTQ+</option>
                                        <option>Romance</option>
                                        <option>Crime Fiction</option>
                                        <option>Paranormal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Story Tags</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="love, betrayal, sex, crime" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">CTA Button Text</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">CTA Button Link</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>

                        <!--Replace With Rich Text Box-->

                        <div id="editor"></div>
                        <a href="story-media"><button class="btn btn-warning next-btn" type="button">Next</button></a>
                        <a href="#" data-toggle="modal" data-target="#draftConfirm"><button class="btn btn-dark draft-btn"
                                type="button">Draft</button></a>

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
