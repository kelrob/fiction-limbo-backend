@extends('layouts.app')

@section('main-content')
    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')
            <div id="content">
                <div class="container">

                    <form class="admin-form col-lg-7 ml-5">

                        <h2>Comments SPAM Control</h2>

                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"
                                placeholder="Type in Words and Pharases that are not allowed in the comment section, please separate with a comma"></textarea>
                        </div>


                        <h2 class="mt-5">Change admin password</h2>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>

                        <a href="#" data-toggle="modal" data-target="#confirmationModal"><button
                                class="btn btn-warning next-btn" type="button">Save</button></a>

                    </form>

                </div>
            </div>
        </div>
    </section>

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

                                <a href={{ url('settings') }}><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
