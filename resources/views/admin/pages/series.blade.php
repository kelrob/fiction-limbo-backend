@extends('layouts.app')

@section('main-content')
    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')

            <div id="content">
                <div class="container">
                    <div class="admin-wrap">
                        <!--Main Page Content-->
                        <div class="admin-head">
                            <div class="row">
                                <div class="col-lg-6" align="right">
                                    <h2><span><a class="active-inner" href={{ url('series') }}>All (3)</a></span> |
                                        <span><a href={{ url('series-archived') }}>Archived (2)</a></span> | <span><a
                                                href={{ url('"series-deleted') }}>Deleted (4)</a></span>
                                    </h2>
                                </div>
                                <div class="col-lg-5">
                                    <form class="search-f-box">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Search by title">
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
                                        <th scope="col">Name</th>
                                        <th scope="col">Date Published</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr>
                                        <td scope="row"></td>
                                        <td><span><a href="#">Araromire</a></span></td>
                                        <td>14-04-2021</td>
                                        <td>
                                            <div class="table-action">
                                                <a href="#" data-toggle="modal" data-target="#seriesModal"><img
                                                        src="../img/icons/admin/admin-edit.svg"></a>
                                                <input type="image" class="move up" width="18px" img
                                                    src="../img/icons/admin/up.svg">
                                                <input type="image" class="move down" width="18px" img
                                                    src="../img/icons/admin/down.svg">
                                                <a href="#" data-toggle="modal" data-target="#archiveModal"><img
                                                        class="down-arrow-margin" src="../img/icons/admin/archive.svg"></a>
                                                <a href="#" data-toggle="modal" data-target="#deleteModal"><img
                                                        src="../img/icons/admin/admin-del.svg"></a>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row"></td>
                                        <td><span><a href={{ url('user-details') }}>Limbo Tiny Tale</a></span></td>
                                        <td>11-04-2021</td>
                                        <td>
                                            <div class="table-action">
                                                <a href="#" data-toggle="modal" data-target="#seriesModal"><img
                                                        src="../img/icons/admin/admin-edit.svg"></a>
                                                <input type="image" class="move up" width="18px" img
                                                    src="../img/icons/admin/up.svg">
                                                <input type="image" class="move down" width="18px" img
                                                    src="../img/icons/admin/down.svg">
                                                <a href="#" data-toggle="modal" data-target="#archiveModal"><img
                                                        class="down-arrow-margin" src="../img/icons/admin/archive.svg"></a>
                                                <a href="#" data-toggle="modal" data-target="#deleteModal"><img
                                                        src="../img/icons/admin/admin-del.svg"></a>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row"></td>
                                        <td><span><a href={{ url('user-details') }}>Diary Of A Serial Cheat</a></span>
                                        </td>
                                        <td>14-05-2021</td>
                                        <td>
                                            <div class="table-action">
                                                <a href="#" data-toggle="modal" data-target="#seriesModal"><img
                                                        src="../img/icons/admin/admin-edit.svg"></a>
                                                <input type="image" class="move up" width="18px" margin-top="10px"
                                                    img src="../img/icons/admin/up.svg">
                                                <input type="image" class="move down" width="18px" img
                                                    src="../img/icons/admin/down.svg">
                                                <a href="#" data-toggle="modal" data-target="#archiveModal"><img
                                                        class="down-arrow-margin" src="../img/icons/admin/archive.svg"></a>
                                                <a href="#" data-toggle="modal" data-target="#deleteModal"><img
                                                        src="../img/icons/admin/admin-del.svg"></a>
                                            </div>
                                        </td>
                                    </tr>
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

                    <div class="">
                        <div class=" col-lg-3 offset-4">
                        <a href="#" data-toggle="modal" data-target="#seriesModal"><button
                                class="btn btn-warning new-story-btn">Add new series</button></a>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>


    <!-- Add New Series Modal -->
    <div class="modal fade admin-custom-modal" id="seriesModal" tabindex="-1" aria-labelledby="seriesModalLabel"
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
                                <form class="admin-form" method="POST" action="{{ url('add-series') }}">

                                    <label for="exampleInputEmail1">Title</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="form-group">
                                        <div class="longer-genre">
                                            <label for="exampleFormControlSelect1">Genres</label>
                                            <select class="form-control" id="exampleFormControlSelect1"
                                                oninput="this.className = ''">
                                                <option>Horror Stories</option>
                                                <option>Dark Fiction</option>
                                                <option>Editors' Choice</option>

                                            </select>
                                        </div>
                                    </div>

                                    <label for="exampleInputEmail1">Series Header Image</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn admin-upload-btn" type="submit"><img
                                                    src="../img/icons/admin/upload.svg">Upload</button>
                                        </span>
                                    </div>

                                    <label for="exampleInputEmail1">Series Background Image</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn admin-upload-btn" type="submit"><img
                                                    src="../img/icons/admin/upload.svg">Upload</button>
                                        </span>
                                    </div>


                                    <label for="exampleInputEmail1">Description</label>
                                    <div class="input-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="10"></textarea>
                                    </div>

                                    <a href="#"></a><button class="btn btn-warning next-btn" type="button"
                                        id="seriespositive">Publish</button>

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
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Are You Sure?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href={{ url('series') }}><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" id="seriesShow">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Draft Modal -->
    <div class="modal-short fade admin-custom-modal" id="draftModal" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="draftModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Send To Archive?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href={{ url('series') }}><button class="confirmation-yes">Yes</button></a>
                                <a href="#"></a><button class="confirmation-no" id="negetiveDraft">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Archive Modal -->
    <div class="modal-short fade admin-custom-modal" id="archiveModal" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="archiveModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Send To Archive?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href={{ url('series') }}><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


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
                                <div class="confirmation-text">Are You Sure?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href={{ url('series') }}><button class="confirmation-yes">Yes</button></a>
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
        $("#seriespositive").click(function() {
            $('#seriesModal').modal('hide');
            $('#confirmationModal').modal('show');
        });
        $("#draftShow").click(function() {
            $('#seriesModal').modal('hide');
            $('#draftModal').modal('show');
        });
        $("#seriesShow").click(function() {
            $('#confirmationModal').modal('hide');
            $('#seriesModal').modal('show');
        });
        $("#negetiveDraft").click(function() {
            $('#draftModal').modal('hide');
            $('#seriesModal').modal('show');
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
@endsection
