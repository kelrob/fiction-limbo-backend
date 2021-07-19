@extends('layouts.app')

@section('main-content')
    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')
            <div id="content">
                <div class="container">
                    <div class="admin-wrap">
                        <div class="admin-head">
                            <div class="row">
                                <div class="col-lg-6" align="right">
                                    <h2><span><a class="active-inner" href={{ url('story') }}>All (3)</a></span> |
                                        <span><a href={{ url('story-archived') }}>Archive (1)</a></span> | <span><a
                                                href={{ url('story-deleted') }}>Deleted (8)</a></span>
                                    </h2>
                                </div>
                                <div class="col-lg-6">
                                    <form class="search-f-box">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" id="" placeholder="Search by title">
                                            </div>
                                            <div class="col-auto">
                                                <img class="search-icon img-fluid" src="../img/icons/search-icon.svg">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--Table-->
                        <div class="admin-body">
                            <table class="table" id="css-serial">
                                <thead>
                                    <tr>
                                        <th class="numbering" scope="col"></th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Date Published</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr>
                                        <td scope="row"></td>
                                        <td><span><a href="#">Buried For Good</a></span></td>
                                        <td>14-04-2021</td>
                                        <td>
                                            <div class="table-action">
                                                <a a href={{ url('add-story') }}><img
                                                        src="../img/icons/admin/admin-edit.svg"></a>
                                                <a href="#" data-toggle="modal" data-target="#archiveModal"><img
                                                        class="down-arrow-margin" src="../img/icons/admin/archive.svg"></a>
                                                <a href="#" data-toggle="modal" data-target="#deleteModal"><img
                                                        src="../img/icons/admin/admin-del.svg"></a>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row"></td>
                                        <td><span><a href={{ url('user-details') }}>Night Fall</a></span></td>
                                        <td>11-04-2021</td>
                                        <td>
                                            <div class="table-action">
                                                <a href={{ url('add-story') }}><img
                                                        src="../img/icons/admin/admin-edit.svg"></a>
                                                <a href="#" data-toggle="modal" data-target="#archiveModal"><img
                                                        class="down-arrow-margin" src="../img/icons/admin/archive.svg"></a>
                                                <a href="#" data-toggle="modal" data-target="#deleteModal"><img
                                                        src="../img/icons/admin/admin-del.svg"></a>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row"></td>
                                        <td><span><a href={{ url('user-details') }}>Checkmate</a></span></td>
                                        <td>14-05-2021</td>
                                        <td>
                                            <div class="table-action">
                                                <a href={{ url('add-story') }}><img
                                                        src="../img/icons/admin/admin-edit.svg"></a>
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

                    <div class="">
                        <div class="col-lg-3 offset-4">
                            <a href={{ url('add-story') }}><button class="btn btn-warning new-story-btn">Add new
                                    post</button></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Delete Confirmation Modal -->
    <div class="modal-short fade admin-custom-modal" id="deleteModal" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="confirmationModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Are You Sure You Want To Delete This Story?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href={{ url('story') }}><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Archive Confirmation Modal -->
    <div class="modal-short fade admin-custom-modal" id="archiveModal" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="confirmationModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Send To Archive?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href={{ url('story') }}><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
