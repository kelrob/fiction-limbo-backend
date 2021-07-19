<!-- Add New Post Modal -->
<div class="modal fade admin-custom-modal" id="firstModal" tabindex="-1" aria-labelledby="exampleModalLabel"
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

                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="exampleInputEmail1">Title</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="exampleInputEmail1">Type</label>
                                        <div class="">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Post Type</option>
                                                <option>Short Story</option>
                                                <option>Series</option>
                                                <option>Poetry</option>
                                                <option>Book Review</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <label for="exampleInputEmail1">Title Art</label>
                                <div class="input-group">
                                    <input type="email" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn admin-upload-btn" type="submit"><img
                                                src="../img/icons/admin/upload.svg">Upload</button>
                                    </span>
                                </div>

                                <label for="exampleInputEmail1">Hero Image</label>
                                <div class="input-group">
                                    <input type="email" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn admin-upload-btn" type="submit"><img
                                                src="../img/icons/admin/upload.svg">Upload</button>
                                    </span>
                                </div>

                                <label for="exampleInputEmail1">Hero Video</label>
                                <div class="input-group">
                                    <input type="email" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn admin-upload-btn" type="submit"><img
                                                src="../img/icons/admin/upload.svg">Upload</button>
                                    </span>
                                </div>


                                <label for="exampleInputEmail1">Read Now Link</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <label for="exampleInputEmail1">Image credits</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <label for="exampleInputEmail1">Description</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        rows="10"></textarea>
                                </div>
                                <button class="btn btn-warning next-btn" type="button"
                                    id="positive">Publish</button></a>
                                <button class="btn btn-dark draft-btn" type="button" id="draftShow">Draft</button>

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

                            <a href={{ url('featured-posts') }}><button class="confirmation-yes">Yes</button></a>
                            <a href="#"></a><button class="confirmation-no" id="negetive">Cancel</button>


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
                            <div class="confirmation-text">Save To Draft?</div>
                        </div>
                        <div class="col-md-8 offset-3">

                            <a href={{ url('featured-posts') }}><button class="confirmation-yes">Yes</button></a>
                            <a href="#"></a><button class="confirmation-no" id="negetiveDraft">Cancel</button>


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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-2">
                            <div class="confirmation-text">Are You Sure?</div>
                        </div>
                        <div class="col-md-8 offset-3">

                            <a href={{ url('featured-posts') }}><button class="confirmation-yes">Yes</button></a>
                            <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

                            <a href={{ url('featured-posts') }}><button class="confirmation-yes">Yes</button></a>
                            <button class="confirmation-no" data-dismiss="modal">Cancel</button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add New Genre Modal -->
<div class="modal fade admin-custom-modal" id="genreModal" tabindex="-1" aria-labelledby="exampleModalLabel"
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

                                <label for="exampleInputEmail1">Cover Image</label>
                                <div class="input-group">
                                    <input type="email" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn admin-upload-btn" type="submit"><img
                                                src="../img/icons/admin/upload.svg">Upload</button>
                                    </span>
                                </div>

                                <div class="form-group">
                                    <p>Add as new homepage category</p>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <p>Add as new search page genre</p>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                                <button class="btn btn-warning next-btn" type="button" id="positive">Publish</button>
                                <button class="btn btn-dark draft-btn" type="button" id="draftShow">Archive</button>

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

                            <a href={{ url('genres') }}><button class="confirmation-yes">Yes</button></a>
                            <a href="#"></a><button class="confirmation-no" id="negetive">Cancel</button>


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

                            <a href={{ url('genres') }}><button class="confirmation-yes">Yes</button></a>
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

                            <a href={{ url('genres') }}><button class="confirmation-yes">Yes</button></a>
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

<!-- Modal within a Modal Tweak -->
<script>
    $("#positive").click(function() {
        $('#firstModal').modal('hide');
        $('#confirmationModal').modal('show');
    });
    $("#draftShow").click(function() {
        $('#firstModal').modal('hide');
        $('#draftModal').modal('show');
    });
    $("#negetive").click(function() {
        $('#confirmationModal').modal('hide');
        $('#firstModal').modal('show');
    });
    $("#negetiveDraft").click(function() {
        $('#draftModal').modal('hide');
        $('#firstModal').modal('show');
    });
</script>
