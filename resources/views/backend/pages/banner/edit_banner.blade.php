@extends('backend.layout.main')

@section('content')
<div class=" row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header title">
                <h2>Edit Post</h2>
            </div>
            <div class="card-body">
                <form action="{{route('update.banner', $banner->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group">
                            <input name="title" value="{{$banner->title}}" id="edtor-title" class="form-control"
                                required>
                        </div>
                        <!-- end title -->
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="paragraph">Edit Description</label>
                                <textarea type="text" name="paragraph" id="summernote" rows="10" cols="50"
                                    required>{{ strip_tags($banner->paragraph) }}</textarea>
                            </div>
                            <!-- end description -->
                        </div>

                        <div class="col-md-4">
                            <div class="row">
                                <div class="extra-field">
                                    <h4>Edit Extra Field</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="link" value="{{ $banner->link }}" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="youtubelink" value="{{ $banner->youtubelink }}"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{-- <label for="meta">Add Meta</label> --}}
                                    <input type="text" name="meta" value="{{ $banner->meta }}" class="form-control"
                                        required>
                                </div>
                                <!-- =====Mutliple Image Form with Preview===== -->
                                <div class="insert-img d-none">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label id="upload-img" for="image">Featured image</label>
                                                <input type="file" name="image" id="images" class="form-control"
                                                    multiple="multiple">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <img class="img-sm img-center my-1" src="img/avatars/avatar-3.jpg" alt="">
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
