@extends('layouts.app')

@section('main-content')
    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')

            <div id="content">
                <div class="container">

                    <form class="admin-form col-lg-7 ml-5">

                        <label for="exampleInputEmail1">Profile Header Image</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Upload</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Loading Page Background</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Upload</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Series Episode Page Background</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Upload</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Login Page Background</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Upload</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Sign Up Page Background</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Upload</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Password Page Background</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Upload</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Resolution Page Background</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Upload</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Contact Us Page Background</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Upload</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Policy Page Background</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Upload</button>
                            </span>
                        </div>

                        <label for="exampleInputEmail1">Terms of Use Background</label>
                        <div class="input-group">
                            <input type="email" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn admin-upload-btn" type="submit"><img
                                        src="../img/icons/admin/upload.svg">Upload</button>
                            </span>
                        </div>


                        <a href="#" data-toggle="modal" data-target="#confirmationModal"><button
                                class="btn btn-warning next-btn" type="button">Save</button></a>

                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Confirmation Modal -->
    <div class="modal-short fade admin-custom-modal" id="confirmationModal" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="confirmationModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Are You Sure?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href={{ url('backgrounds') }}><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
