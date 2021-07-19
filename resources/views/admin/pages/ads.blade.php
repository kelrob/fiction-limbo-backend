@extends('layouts.app')

@section('main-content')
    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')

            <div id="content">
                <div class="container">

                    <form class="admin-form col-lg-7 ml-5">

                        <label for="exampleInputEmail1">Story Page AD 1</label>
                        <div class="input-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>

                        <label for="exampleInputEmail1">Story Page AD 2</label>
                        <div class="input-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>

                        <label for="exampleInputEmail1">Profile Page AD</label>
                        <div class="input-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>

                        <label for="exampleInputEmail1">Series Page AD</label>
                        <div class="input-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>

                        <label for="exampleInputEmail1">Shelf Page AD</label>
                        <div class="input-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>

                        <label for="exampleInputEmail1">Playlist Page AD</label>
                        <div class="input-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>

                        <label for="exampleInputEmail1">Profile Page AD</label>
                        <div class="input-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
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

                                <a href={{ url('ads') }}><button class="confirmation-yes">Yes</button></a>
                                <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
