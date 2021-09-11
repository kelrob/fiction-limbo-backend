@extends('layouts.app')

@section('main-content')

    <section id="admin-btm">
        <div class="wrapper">
            <!--Side Navigarion Bar-->
            @include('admin.includes.sidebar')

            <div id="content">
                <div class="container">
                    <div class="admin-wrap">
                        <!--Main Page Content-->
                        <div class="admin-head">
                            <div class="row">
                                <div class="col-lg-6" align="right">
                                    <h2><span><a class="active-inner" href={{ url('type') }}>All
                                                ({{ $typesCount }})</a></span> |
                                        <span><a href={{ url('type-deleted') }}>Deleted ({{ $deletedCount }})</a></span>
                                    </h2>
                                </div>
                                <div class="col-lg-5">
                                    <form class="search-f-box">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Search by Type">
                                            </div>
                                            <div class="col-auto">
                                                <img class="search-icon img-fluid" src="../img/icons/search-icon.svg">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="admin-body">
                            <table class="table" id="css-serial">
                                <thead>
                                    <tr>
                                        <th class="numbering" scope="col"></th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Author</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    @foreach ($types as $type)
                                        <tr>
                                            <td scope="row"></td>
                                            <td><span><a href="#">{{ ucfirst($type->name) }}</a></span></td>
                                            <td width="50%">
                                                {{ ucfirst($type->user->firstname . ' ' . $type->user->lastname) }}</td>
                                            <td>
                                                <div class="table-action">
                                                    <a href="#" data-toggle="modal" data-target="#editModal"
                                                        onclick='setTypeToEdit({{ "'$type->name'" . ',' . "'$type->id'" }})'><img
                                                            src="../img/icons/admin/admin-edit.svg"></a>

                                                    <a href="#" onclick="setIdToDelete({{ $type->id }})"
                                                        data-toggle="modal" data-target="#deleteModal"><img
                                                            src="../img/icons/admin/admin-del.svg"></a>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!--Page Navigation-->

                    <div class="pagination-container">
                        <nav aria-label="Page navigation">
                            <ul class="pagination custom-pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">
                                        &#60;</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="clearfix"></div>

                    <!--Button Add New Series-->

                    <div class="___class_+?38___">
                        <div class="col-lg-3 offset-4">
                            <a href="#" data-toggle="modal" data-target="#typeModal"><button
                                    class="btn btn-warning new-story-btn">Add new type</button></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Add New Type Modal -->
    <div class="modal-short fade admin-custom-modal" id="typeModal" tabindex="-1" aria-labelledby="typeModalLabel"
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

                                    <label for="exampleInputEmail1">Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="type" id="type"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <button class="btn btn-warning next-btn" type="button" onclick="setTypeToAdd()"
                                        id="typepositive">Create Type</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Type Modal -->
    <div class="modal-short fade admin-custom-modal" id="editModal" tabindex="-1" aria-labelledby="typeModalLabel"
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
                                    <div class="alert alert-success col-lg-12 alert-dismissible fade show"
                                        id="success-message" style="display: none;"></div>
                                    <div class="alert alert-danger col-lg-12 alert-dismissible fade show" id="error-message"
                                        style="display: none;"></div>
                                    <label for="exampleInputEmail1">Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="typeNameToEdit"
                                            aria-describedby="emailHelp">
                                        <input type="hidden" id="idToEdit" />
                                    </div>

                                    <button class="btn btn-warning next-btn" type="button" id="update-loader"
                                        onclick="updateType()">Update Type</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal-short fade admin-custom-modal" id="confirmationModal" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="confirmationModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="alert alert-success col-lg-12 alert-dismissible fade show" id="success-message"
                                style="display: none;"></div>
                            <div class="alert alert-danger col-lg-12 alert-dismissible fade show" id="error-message"
                                style="display: none;"></div>
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Are You Sure?</div>
                            </div>
                            <div class="col-md-8 offset-3">
                                <button class="confirmation-yes" id="yes-btn" onclick="addType()"><span
                                        id="submit-loader">Yes</span></button>
                                <button class="confirmation-no" id="typeShow">Cancel</button>
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
                            <div class="alert alert-success col-lg-12 alert-dismissible fade show"
                                id="delete-success-message" style="display: none;"></div>
                            <div class="alert alert-danger col-lg-12 alert-dismissible fade show" id="delete-error-message"
                                style="display: none;"></div>
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Are You Sure?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <button class="confirmation-yes" id="delete-submit-loader"
                                    onclick="deleteType()">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const setTypeToAdd = () => {
            let type = $('#type').val();
            localStorage.setItem('type', type);
        }

        const addType = () => {
            let name = localStorage.getItem('type');
            let _token = $('meta[name="csrf-token"]').attr('content');

            $('#submit-loader').html("Please wait <i class='fa fa-spinner fa-spin'></i>");
            $('#yes-btn').attr('disabled', 'disabled');

            $.ajax({

                url: "/add-type",
                type: "POST",
                data: {
                    name,
                    _token
                },
                success: function(response) {
                    if (response.error === false) {
                        $('#success-message').text(response.message).show();
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    } else if (response.error === true) {
                        $('#error-message').text(response.message).show();
                        $('#submit-loader').html("Yes");
                        $('#yes-btn').removeAttr('disabled');
                    }
                    localStorage.removeItem('type');
                },
            });
        }

        const setTypeToEdit = (typeName, id) => {
            $('#typeNameToEdit').val(typeName);
            $('#idToEdit').val(id);
        }

        const updateType = () => {
            let _token = $('meta[name="csrf-token"]').attr('content');
            let name = $('#typeNameToEdit').val();
            let id = $('#idToEdit').val();

            $('#update-loader').html("Please wait <i class='fa fa-spinner fa-spin'></i>").attr('disabled', 'disabled');


            $.ajax({
                url: "/update-type",
                type: "POST",
                data: {
                    id,
                    name,
                    _token
                },

                success: function(response) {
                    console.log(response);
                    if (response.error === false) {
                        $('#success-message').text(response.message).show();
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    } else if (response.error === true) {
                        $('#error-message').text(response.message).show();
                        $('#update-loader').html("Yes").removeAttr('disabled');
                    }
                },
            });
        }

        const setIdToDelete = (id) => {
            localStorage.setItem('id', id);
        }

        const deleteType = () => {
            let id = localStorage.getItem('id');
            let _token = $('meta[name="csrf-token"]').attr('content');

            $('#delete-submit-loader').html("Please wait <i class='fa fa-spinner fa-spin'></i>").attr('disabled',
                'disabled');
            $.ajax({

                url: "/delete-type",
                type: "DELETE",
                data: {
                    id,
                    _token
                },
                success: function(response) {
                    if (response.error === false) {
                        $('#delete-success-message').text(response.message).show();
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    } else if (response.error === true) {
                        $('#delete-error-message').text(response.message).show();
                        $('#delete-submit-loader').html("Yes");
                        $('#delete-yes-btn').removeAttr('disabled');
                    }
                    localStorage.removeItem('id');
                },
            });
        }
    </script>

    <!-- Modal within a Modal Tweak -->
    <script>
        $("#typepositive").click(function() {
            $('#typeModal').modal('hide');
            $('#confirmationModal').modal('show');
        });
        $("#draftShow").click(function() {
            $('#typeModal').modal('hide');
            $('#draftModal').modal('show');
        });
        $("#typeShow").click(function() {
            $('#confirmationModal').modal('hide');
            $('#typeModal').modal('show');
        });
        $("#negetiveDraft").click(function() {
            $('#draftModal').modal('hide');
            $('#typeModal').modal('show');
        });
    </script>

    <!--Move up and down script-->
    <script>
        $('#myTable input.move').click(function() {
            var row = $(this).closest('tr');
            if ($(this).hasClass('up'))
                row.prev().before(row);
            else
                row.next().after(row);
        });
    </script>


    <script>
        // const showSubMenu = () => {
        //     let icon = '<i class="fa fa-chevron-up"></i>'
        //     $('#toggle-submenu').html(icon).attr('onclick', 'hideSubMenu()');
        //     $('#subMenuItem').slideDown();
        // }

        // const hideSubMenu = () => {
        //     let icon = '<i class="fa fa-chevron-right"></i>'
        //     $('#toggle-submenu').html(icon).attr('onclick', 'showSubMenu()');
        //     $('#subMenuItem').slideUp();
        // }
    </script>

@endsection
