@extends('layouts.app')

@section('main-content')
    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')

            <div id="content">
                <div class="container">

                    <form class="admin-form col-lg-7 ml-5">

                        <label for="exampleInputEmail1">Title art</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Select</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Hero Image</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Select</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Hero Video</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="optional">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Select</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Post Audio File</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Select</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Post Background Image</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Select</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Image credits</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <label for="exampleInputEmail1">Description</label>
                        <div class="input-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>

                        <label for="exampleInputEmail1">Credits</label>
                        <div class="input-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>

                        <a href="#" data-toggle="modal" data-target="#publishConfirm"><button
                                class="btn btn-warning next-btn" type="button">Publish</button></a>
                        <a href="#" data-toggle="modal" data-target="#draftConfirm"><button class="btn btn-dark draft-btn"
                                type="button">Draft</button></a>
                        <a href={{ url('add-story') }}><button class="btn btn-dark back-btn"
                                type="button">Back</button></a>

                    </form>

                </div>
            </div>
        </div>
    </section>



    <!-- Publish Confirmation Modal -->
    <div class="modal-short fade admin-custom-modal" id="publishConfirm" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="confirmationModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Make This Story Live?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href="story.html"><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

                                <a href="add-story.html"><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
