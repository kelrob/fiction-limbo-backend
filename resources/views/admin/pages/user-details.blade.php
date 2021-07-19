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
                                        <div class="col-lg-3">
                                            <h3>Username</h3>
                                            <h3>Name</h3>
                                            <h3>Email</h3>
                                            <h3>Member since</h3>
                                            <h3>Contributions</h3>
                                            <h3>Status</h3>
                                            <h3>Verification</h3>
                                        </div>
                                        <div class="col-lg-8">
                                            <h3><span>Nikkyyung22</span></h3>
                                            <h3><span>Nick Young</span></h3>
                                            <h3><span>Nikky@gmail.com</span></h3>
                                            <h3><span>23-04-21</span></h3>
                                            <h3><span>Stories (5) | Cover art (0) | Voice over (0)</span></h3>
                                            <h3><span>Restricted</span></h3>
                                            <h3><span>Not Verified</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Profile URL:</label>
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
                                        class="btn btn-danger del-btn"><img
                                            src="../img/icons/admin/delete.svg">Delete</button></a>
                                <a href="#" data-toggle="modal" data-target="#exampleModal"></button><button
                                        class="btn btn-danger ban-btn"><img
                                            src="../img/icons/admin/ban.svg">Restrict</button></a>
                                <a href="#" data-toggle="modal" data-target="#verifyModal"><button
                                        class="btn btn-success verify-btn">Verify User</button></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href={{ url('users') }}><button class="btn btn-warning back-btn">Back</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Restrict User Modal -->
    <div class="modal fade admin-custom-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div type="button" class="close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <form class="admin-form">

                                    <label class="form-container">Restrict User from Making Comments
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="form-container">Restrict User from making Submissions
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="form-container">Restrict User from Creating Shelves
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="form-container">Restrict User from Creating Playlist
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="form-container">Ban User from the platform
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>

                                    <a href={{ url('user-details') }}><button class="btn btn-warning next-btn"
                                            type="button">Save</button></a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Verify User Modal -->
    <div class="modal-short fade admin-custom-modal" id="verifyModal" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="verifyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div type="button" class="close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <form class="admin-form">

                                    <label class="form-container">Grant User Verification Badge
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href={{ url('user-details') }}><button class="btn btn-warning next-btn"
                                            type="button">Save</button></a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Delete Modal -->
    <div class="modal-short fade admin-custom-modal" id="deleteModal" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="confirmationModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Are You Sure You Want To Delete This User?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href={{ url('users') }}>button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Ban Modal -->
    <div class="modal-short fade admin-custom-modal" id="banModal" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="banModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Are You Sure You Want To Ban This User?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href={{ url('users') }}><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal within a Modal Tweak -->
    <script>
        $("#userShow").click(function() {
            $('#confirmationModal').modal('hide');
            $('#seriesModal').modal('show');
        });
        $("#save").click(function() {
            $('#draftModal').modal('hide');
            $('#seriesModal').modal('show');
        });
    </script>


@endsection
