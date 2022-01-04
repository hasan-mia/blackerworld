@extends('backend.layout.main')

@section('content')
<div class=" row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header title">
                <h2>Add Banner</h2>
            </div>
            <div class="card-body">
                <form action="{{route('store.banner')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <input name="title" placeholder="Add Title" id="edtor-title" class="form-control" required>
                        </div>
                        <!-- end title -->
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="paragraph">Add Description</label>
                                <textarea type="text" name="paragraph" id="summernote" rows="10" cols="50"
                                    required></textarea>
                            </div>
                            <!-- end description -->
                        </div>

                        <div class="col-md-4">
                            <div class="row">
                                <div class="extra-field">
                                    <h4>Add Extra Field</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="tags" placeholder="Add Tags" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="youtubelink" placeholder="Youtube Link"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <!-- =====Mutliple Image Form with Preview===== -->
                                <div class="insert-img">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label id="upload-img" for="image">Featured image</label>
                                                <input type="file" name="image" id="images" class="form-control"
                                                    multiple="multiple">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <img class="img-sm img-center my-1" src="img/avatars/upload.png" alt="">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="imgPreview img-center"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end image preview -->
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary">Publish Post</button>
                        </div>

                    </div>
                    <!-- End row -->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
