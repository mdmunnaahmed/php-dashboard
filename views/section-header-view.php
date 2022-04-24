<div class="row align-items-center mb-30 justify-content-between">
    <div class="col-lg-6 col-sm-6">
        <h6 class="page-title">Section Header</h6>
    </div>
    <div class="col-lg-6 col-sm-6 text-sm-end mt-sm-0 mt-3 right-part">
        <a href="#0" class="btn btn-sm btn--primary box--shadow1 text--small"><i class="fa fa-fw fa-backward"></i>Go Back</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Section Image</label>
                                    <div class="image-upload">
                                        <div class="thumb">
                                            <div class="avatar-preview">
                                                <div class="profilePicPreview" style="background-image: url()">
                                                    <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="avatar-edit">
                                                <input type="file" class="profilePicUpload" name="image_input[image]" id="profilePicUpload0" accept=".png, .jpg, .jpeg">
                                                <label for="profilePicUpload0" class="bg--primary">Image</label>
                                                <small class="mt-2 text-facebook">Supported files: <b>jpeg, jpg, png</b>.
                                                    | Will be resized to:
                                                    <b>450x475</b>
                                                    px.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-8 ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Author name</label>
                                            <input type="text" class="form-control" placeholder="Section Title" name="section_title">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Section Text</label>
                                            <textarea rows="10" class="form-control" placeholder="Section Text" name="section_text"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn--primary w-100 h-45 btn-lg">Update Heading</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>