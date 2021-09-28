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
                                    <h2><span><a class="active-inner" href={{ url('story') }}>All
                                                ({{ $storiesCount }})</a></span> |
                                        <span><a href={{ url('story-archived') }}>Archive
                                                ({{ $archivedCount }})</a></span> | <span><a
                                                href={{ url('story-deleted') }}>Deleted
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
                                    @foreach ($stories as $story)
                                        <tr>
                                            <td scope="row"></td>
                                            <td><span><a href="#">{{ ucfirst($story->title) }}</a></span></td>
                                            <td>{{ $story->created_at->format('j F, Y') }}</td>
                                            <td>
                                                <div class="table-action">
                                                    <a href={{ url('edit-story/' . $story->id) }}><img
                                                            src="../img/icons/admin/admin-edit.svg"></a>
                                                    <a href="#"
                                                        onclick="localStorage.setItem('story_id', {{ $story->id }})"
                                                        data-toggle="modal" data-target="#archiveModal"><img
                                                            class="down-arrow-margin"
                                                            src="../img/icons/admin/archive.svg"></a>
                                                    <a href="#"
                                                        onclick="localStorage.setItem('story_id', {{ $story->id }})"
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

                    <div class="">
                        <div class=" col-lg-3 offset-4">
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
                    <div class="alert alert-danger" id="delete-error-message" style="display: none;"></div>
                    <div class="alert alert-success" id="delete-success-message" style="display: none;"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Are You Sure You Want To Delete This Story?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href='#'><button class="confirmation-yes" onclick="deleteStory()"
                                        id="delete-confirmation-yes">Yes</button></a>
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

                    <div class="alert alert-danger" id="error-message" style="display: none;"></div>
                    <div class="alert alert-success" id="success-message" style="display: none;"></div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="confirmation-text">Send To Archive?</div>
                            </div>
                            <div class="col-md-8 offset-3">

                                <a href='#' onclick="sendToArchive()"><button class="confirmation-yes"
                                        id="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const sendToArchive = () => {
            const id = localStorage.getItem('story_id');
            $('#confirmation-yes').attr('disabled', 'disabled').text('Please wait');

            $.ajax({

                url: `/archive-story/${id}`,
                type: "GET",
                success: function(response) {
                    if (response.error === false) {
                        $('#success-message').text(response.message).show();
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    } else if (response.error === true) {
                        $('#error-message').text(response.message).show();
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    }
                    localStorage.removeItem('story_id');
                },
            });
        }

        const deleteStory = () => {
            const id = localStorage.getItem('story_id');
            $('#delete-confirmation-yes').attr('disabled', 'disabled').text('Please wait');

            $.ajax({

                url: `/delete-story/${id}`,
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
                    localStorage.removeItem('story_id');
                },
            });
        }
    </script>
@endsection
