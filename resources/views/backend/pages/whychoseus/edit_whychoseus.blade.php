@extends('backend.layout.main')

@section('content')
<div class=" row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header title">
                <h2>Update Post</h2>
            </div>
            <div class="card-body">
                <form action="{{route('update.whychoseus', $whychoseus->id)}}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="row">
                        <div class="form-group">
                            <label for="name">Edit Title</label>
                            <input name="title" value="{{$whychoseus->title}}" id="edtor-title" class="form-control"
                                required>
                        </div>
                        <!-- end title -->
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="description">Edit Description</label>
                                <textarea type="text" name="description" id="summernote" rows="10" cols="50"
                                    required>{!!  $whychoseus->description !!}</textarea>
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
                                        <input type="text" name="icon" value="{{$whychoseus->icon}}"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="number" value="{{$whychoseus->number}}"
                                            class="form-control" required>
                                    </div>
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
