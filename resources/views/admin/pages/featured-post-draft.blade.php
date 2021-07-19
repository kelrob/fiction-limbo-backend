@extends('layouts.app')

@section('main-content')

    <div class="wrapper">
        <!-- Side Navigarion Bar -->
        @include('admin.includes.sidebar')

        <!-- main page content -->
        <div id="content">
            <div class="container">
                <div class="admin-wrap">
                    <div class="admin-head">
                        <div class="row">
                            <div class="col-lg-6" align="right">
                                <h2><span><a href={{ url('featured-posts') }}>All (3)</a></span> | <span><a
                                            class="active-inner" href={{ url('featured-post-draft') }}>Draft
                                            (1)</a></span> | <span><a href={{ url('featured-post-deleted') }}>Deleted
                                            (8)</a></span></h2>
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
                    <!-- Page Table -->
                    <div class="admin-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="numbering" scope="col"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Type</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td><span>The Blind Man</span></td>
                                    <td>Short Story</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="#" data-toggle="modal" data-target="#firstModal"><img
                                                    src="../img/icons/admin/admin-edit.svg"></a>
                                            <a href="#" data-toggle="modal" data-target="#deleteModal"><img
                                                    src="../img/icons/admin/admin-del.svg"></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td><span>Molotov Cocktail</span></td>
                                    <td>Poem</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="#" data-toggle="modal" data-target="#firstModal"><img
                                                    src="../img/icons/admin/admin-edit.svg"></a>
                                            <a href="#" data-toggle="modal" data-target="#deleteModal"><img
                                                    src="../img/icons/admin/admin-del.svg"></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td><span>Daddy Dearest</span></td>
                                    <td>Series</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="#" data-toggle="modal" data-target="#firstModal"><img
                                                    src="../img/icons/admin/admin-edit.svg"></a>
                                            <a href="#" data-toggle="modal" data-target="#deleteModal"><img
                                                    src="../img/icons/admin/admin-del.svg"></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Page Navigation -->
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

            </div>
        </div>
    </div>

    @include('admin.includes.modals')

@endsection
