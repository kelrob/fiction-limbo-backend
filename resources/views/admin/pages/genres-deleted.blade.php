@extends('layouts.app')

@section('main-content')
    <section id="admin-btm">
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
                                    <h2><span><a href={{ url('genres') }}>All (3)</a></span> | <span><a
                                                href={{ url('genres-archived') }}>Archived (2)</a></span> | <span><a
                                                class="active-inner" href={{ url('genres-deleted') }}>Deleted
                                                (4)</a></span></h2>
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
                                        <th scope="col">Name</th>
                                        <th scope="col">Date Published</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td><span>Hot Romance</span></td>
                                        <td>12-17-2021</td>
                                        <td>
                                            <div class="table-action">
                                                <a href="#" data-toggle="modal" data-target="#restoreModal"><img
                                                        src="../img/icons/admin/admin-restore.svg"></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td><span>Paranormal Activities</span></td>
                                        <td>04-08-2021</td>
                                        <td>
                                            <div class="table-action">
                                                <a href="#" data-toggle="modal" data-target="#restoreModal"><img
                                                        src="../img/icons/admin/admin-restore.svg"></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td><span>LGBTQ+ Stories</span></td>
                                        <td>10-10-2021</td>
                                        <td>
                                            <div class="table-action">
                                                <a href="#" data-toggle="modal" data-target="#restoreModal"><img
                                                        src="../img/icons/admin/admin-restore.svg"></a>
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
    </section>





    <!-- Restore Modal -->
    <div class="modal-short fade admin-custom-modal" id="restoreModal" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="restoreModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Are You Sure?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href={{ url('genres') }}><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
