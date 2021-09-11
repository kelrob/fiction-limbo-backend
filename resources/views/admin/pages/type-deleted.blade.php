@extends('layouts.app')

@section('main-content')

    <section id="admin-btm">
        <div class="wrapper">
            <!--Side Navigarion Bar-->
            @include('admin.includes.sidebar')

            <div id="content">
                <div class="container">
                    <div class="admin-wrap">
                        <div class="admin-head">
                            <div class="row">
                                <div class="col-lg-6" align="right">
                                    <h2><span><a href="{{ url('type') }}">All ({{ $typesCount }})</a></span> |
                                        <span><a class="active-inner" href="{{ url('type-deleted') }}">Deleted
                                                ({{ $deletedCount }})</a></span>
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
                        <!-- Page Table -->
                        <div class="admin-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="numbering" scope="col"></th>
                                        <th scope="col">Type</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deletedTypes as $type)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td><span><a href="#">{{ ucfirst($type->name) }}</a></span></td>
                                            <td width="50%"></td>
                                            <td>
                                                <div class="table-action">
                                                    <a href="#" data-toggle="modal" data-target="#restoreModal"
                                                        onclick="setTypeToRestore({{ $type->id }})"><img
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

                                <button class="confirmation-yes" id="submit-loader" onclick="restoreType()">Yes</button>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const setTypeToRestore = (id) => {
            localStorage.setItem('restoreId', id);
        }

        const restoreType = () => {
            let id = localStorage.getItem('restoreId');
            let _token = $('meta[name="csrf-token"]').attr('content');

            $('#submit-loader').html("Please wait <i class='fa fa-spinner fa-spin'></i>").attr('disabled', 'disabled');

            $.ajax({

                url: "/restore-type",
                type: "POST",
                data: {
                    id,
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
                        $('#submit-loader').html("Yes").removeAttr('disabled');
                    }
                    localStorage.removeItem('restoreId');
                },
            });
        }
    </script>

    <script>
        const showSubMenu = () => {
            let icon = '<i class="fa fa-chevron-up"></i>'
            $('#toggle-submenu').html(icon).attr('onclick', 'hideSubMenu()');
            $('#subMenuItem').slideDown();
        }

        const hideSubMenu = () => {
            let icon = '<i class="fa fa-chevron-right"></i>'
            $('#toggle-submenu').html(icon).attr('onclick', 'showSubMenu()');
            $('#subMenuItem').slideUp();
        }
    </script>


@endsection
