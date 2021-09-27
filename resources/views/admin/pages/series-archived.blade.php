@extends('layouts.app')

@section('main-content')
    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')
            <!-- main page content -->
            <div id="content">
                <div class="container">
                    <div class="admin-wrap">
                        <div class="admin-head">
                            <div class="row">
                                <div class="col-lg-6" align="right">
                                    <h2><span><a href={{ url('all-series') }}>All ({{ $seriesCount }})</a></span> |
                                        <span><a class="active-inner" href={{ url('"series-archived') }}>Archived
                                                ({{ $archivedCount }})</a></span> |
                                        <span><a href={{ url('series-deleted') }}>Deleted
                                                ({{ $deletedCount }})</a></span>
                                    </h2>
                                </div>
                                <div class="col-lg-6">
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
                                    @foreach ($archivedSeries as $series)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td><span>{{ $series->title }}</span></td>
                                            <td>{{ $series->created_at->format('j F, Y') }}</td>
                                            <td>
                                                <div class="table-action">
                                                    <a href="{{ url('edit-series/' . $series->id) }}"><img
                                                            src="../img/icons/admin/admin-edit.svg"></a>
                                                    <a href="#"
                                                        onclick="localStorage.setItem('series_id', {{ $series->id }})"
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
                                <form class="admin-form">

                                    <label for="exampleInputEmail1">Title</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Genres</label>
                                        <select class="form-control" id="exampleFormControlSelect1"
                                            oninput="this.className = ''">
                                            <option>Horror Stories</option>
                                            <option>Dark Fiction</option>
                                            <option>Editors' Choice</option>

                                        </select>
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

                                <a href={{ url('"series') }}><button class="confirmation-yes">Yes</button></a>
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
                    <div class="alert alert-danger" id="delete-error-message" style="display: none;"></div>
                    <div class="alert alert-success" id="delete-success-message" style="display: none;"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Are You Sure?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href="#" onclick="deleteSeries()"><button class="confirmation-yes"
                                        id="delete-confirmation-yes">Yes</button></a>
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

    <script>
        const deleteSeries = () => {
            const id = localStorage.getItem('series_id');
            $('#delete-confirmation-yes').attr('disabled', 'disabled').text('Please wait');

            $.ajax({

                url: `/delete-series/${id}`,
                type: "GET",
                success: function(response) {
                    if (response.error === false) {
                        $('#delete-success-message').text(response.message).show();
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    } else if (response.error === true) {
                        $('#delete-error-message').text(response.message).show();
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    }
                    localStorage.removeItem('series_id');
                },
            });
        }
    </script>

@endsection
