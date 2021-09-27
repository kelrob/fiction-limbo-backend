@extends('layouts.app')

@section('main-content')
    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')

            <div id="content">
                <div class="container">

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <form class="admin-form col-lg-7 ml-5" method="POST" action="{{ url('publish-ad') }}">
                        @csrf()
                        <label for="exampleInputEmail1">Story Page AD 1</label>
                        <div class="input-group">
                            <textarea class="form-control" name="story_page_first_ad" id="exampleFormControlTextarea1"
                                rows="4">{{ $ad->story_page_first_ad }}</textarea>
                        </div>

                        <label for="exampleInputEmail1">Story Page AD 2</label>
                        <div class="input-group">
                            <textarea class="form-control" name="story_page_second_ad" id="exampleFormControlTextarea1"
                                rows="4">{{ $ad->story_page_second_ad }}</textarea>
                        </div>

                        <label for="exampleInputEmail1">Profile Page AD</label>
                        <div class="input-group">
                            <textarea class="form-control" name="profile_page_ad" id="exampleFormControlTextarea1"
                                rows="4">{{ $ad->profile_page_ad }}</textarea>
                        </div>

                        <label for="exampleInputEmail1">Series Page AD</label>
                        <div class="input-group">
                            <textarea class="form-control" name="series_page_ad" id="exampleFormControlTextarea1"
                                rows="4">{{ $ad->series_page_ad }}</textarea>
                        </div>

                        <label for="exampleInputEmail1">Shelf Page AD</label>
                        <div class="input-group">
                            <textarea class="form-control" name="shelf_page_ad" id="exampleFormControlTextarea1"
                                rows="4">{{ $ad->shelf_page_ad }}</textarea>
                        </div>

                        <label for="exampleInputEmail1">Playlist Page AD</label>
                        <div class="input-group">
                            <textarea class="form-control" name="playlist_page_ad" id="exampleFormControlTextarea1"
                                rows="4">{{ $ad->playlist_page_ad }}</textarea>
                        </div>

                        <button class="btn btn-warning next-btn" type="submit">Save</button>
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
