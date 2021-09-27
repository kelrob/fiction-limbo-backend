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
                                    <h2><span><a href={{ url('genres') }}>All ({{ $genresCount }})</a></span> | <span><a
                                                href={{ url('genres-archived') }}>Archived
                                                ({{ $archivedCount }})</a></span> | <span><a class="active-inner"
                                                href={{ url('genres-deleted') }}>Deleted
                                                ({{ $deletedCount }})</a></span></h2>
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
                                    @foreach ($deletedGenres as $deletedGenre)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td><span>{{ $deletedGenre->title }}</span></td>
                                            <td>{{ $deletedGenre->created_at->format('j F, Y') }}</td>
                                            <td>
                                                <div class="table-action">
                                                    <a href="#"
                                                        onclick="localStorage.setItem('id', {{ $deletedGenre->id }})"
                                                        data-toggle="modal" data-target="#restoreModal"><img
                                                            src="../img/icons/admin/admin-restore.svg"></a>
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





    <!-- Restore Modal -->
    <div class="modal-short fade admin-custom-modal" id="restoreModal" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="restoreModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="alert alert-danger" id="restore-error-message" style="display: none;"></div>
                    <div class="alert alert-success" id="restore-success-message" style="display: none;"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Are You Sure?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href="#" onclick="restoreGenre()"><button class="confirmation-yes"
                                        id="restore-confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const restoreGenre = () => {
            const id = localStorage.getItem('id');
            $('#restore-confirmation-yes').attr('disabled', 'disabled').text('Please wait');

            $.ajax({

                url: `/restore-genre/${id}`,
                type: "GET",
                success: function(response) {
                    if (response.error === false) {
                        $('#restore-success-message').text(response.message).show();
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    } else if (response.error === true) {
                        $('#restore-error-message').text(response.message).show();
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    }
                    localStorage.removeItem('id');
                },
            });
        }
    </script>
@endsection
