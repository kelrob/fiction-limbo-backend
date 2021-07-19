@extends('layouts.app')

@section('main-content')

    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')

            <div id="content">
                <div class="container">
                    <div class="user-details">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2>File details</h2>
                            </div>
                            <div class="col-lg-6">
                                <button class="btn btn-warning navv-btn"><img
                                        src="../img/icons/admin/forward-icon.svg"></button>
                                <button class="btn btn-warning navv-btn"><img
                                        src="../img/icons/admin/back-icon.svg"></button>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <div class="user-img">
                                    <img src="../img/profile-image.svg">
                                </div>
                            </div>
                            <div class="col-lg-8 pl-4">
                                <div class="user-info">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <h3>Updated on:</h3>
                                            <h3>Updated by:</h3>
                                            <h3>File name</h3>
                                            <h3>File type</h3>
                                            <h3>Dimensions</h3>
                                        </div>
                                        <div class="col-lg-8">
                                            <h3><span>April 23rd 2021</span></h3>
                                            <h3><span>Admin</span></h3>
                                            <h3><span>Son of The Corw.webp</span></h3>
                                            <h3><span>PNG</span></h3>
                                            <h3><span>1920 x 1080 Pixels</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">File URL:</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp">
                                                <button class="btn btn-warning">Copy URL to clipboard</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <a href="#" data-toggle="modal" data-target="#deleteModal"><button
                                        class="btn btn-danger del-btn" style="width:50%;"><img
                                            src="../img/icons/admin/delete.svg">Delete</button></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href={{ url('gallery') }}><button class="btn btn-warning back-btn">Back</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Delete Modal -->
    <div class="modal-short fade admin-custom-modal" id="deleteModal" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="confirmationModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Are You Sure You Want To Delete This File?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href={{ url('gallery') }}><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
