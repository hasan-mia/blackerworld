@extends('backend.layout.main')

@section('content')
<div class=" row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header title">
                <h2>Edit Post</h2>
            </div>
            <div class="card-body">
                <form action="{{route('update.about', $about->id)}}" method="post" enctype="multipart/form-data">
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
                                        <label for="description">Edit Description</label>
                                        <textarea name="description" cols="5" rows="5" id="summernote"
                                            class="form-control" required>{!! $about->description !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="experience">Edit Experience</label>
                                        <textarea name="experience" cols="5" rows="5" id="summernote"
                                            class="form-control" required>{!! $about->experience !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="whyus">Edit Why us</label>
                                        <textarea name="whyus" cols="5" rows="5" id="summernote" class="form-control"
                                            required>{!! $about->whyus !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="approach">Edit Approach</label>
                                        <textarea name="approach" cols="5" rows="5" id="summernote" class="form-control"
                                            required>{!! $about->approach !!}</textarea>

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
                                                <input type="file" name="image" id="images"
                                                    placeholder="{{asset('images/'.$about->image)}}" class="
                                                    form-control" multiple="multiple">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <img class="img-sm img-center my-1" src="{{asset('images/'.$about->image)}}"
                                                alt="upload">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="imgPreview img-center"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end image preview -->
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary">Update Post</button>
                        </div>

                    </div>
                    {{-- End row --}}
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
