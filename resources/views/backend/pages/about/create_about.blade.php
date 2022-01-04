@extends('backend.layout.main')

@section('content')
<div class=" row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header title">
                <h2> <a href="{{route('create.about')}}">Add Post</a> </h2>
            </div>
            <div class="card-body">
                <form action="{{route('store.about')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- <div class="form-group">
                            <input name="title" placeholder="Add Title" id="edtor-title" class="form-control" required>
                        </div> --}}
                        <!-- end title -->
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Add Description</label>
                                        <textarea name="description" cols="5" rows="5" id="summernote"
                                            class="form-control" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="experience">Add Experience</label>
                                        <textarea name="experience" cols="5" rows="5" id="summernote"
                                            class="form-control" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="whyus">Add Why us</label>
                                        <textarea name="whyus" cols="5" rows="5" id="summernote" class="form-control"
                                            required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="approach">Add Approach</label>
                                        <textarea name="approach" cols="5" rows="5" id="summernote" class="form-control"
                                            required></textarea>

                                    </div>
                                </div>
                            </div>
                            {{-- end row --}}
                        </div>

                        <div class="col-md-4">
                            <div class="row">
                                <div class="extra-field">
                                    <h4>Add Extra Field</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="link" placeholder="Add Link"
                                            class="d-none form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="youtubelink" placeholder="Youtube Link"
                                            class="d-none form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{-- <label for="meta">Add Meta</label> --}}
                                    <input type="text" name="tags" placeholder="Tags" class="form-control">
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
                                            <img class="img-sm img-center my-1"
                                                src="{{asset('backend/img/avatars/upload.png')}}" alt="upload">
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
                    {{-- End row --}}

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
