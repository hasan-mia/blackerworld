@extends('backend.layout.main')

@section('content')
<div class=" row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header title">
                <h2>Update Post</h2>
            </div>
            <div class="card-body">
                <form action="{{route('update.solution', $solution->id)}}" method="post" enctype="multipart/form-data">
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
                            <input name="title" value="{{ $solution->title }}" id="edtor-title" class="form-control"
                                required>
                        </div>
                        <!-- end title -->
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Edit Description</label>
                                        <textarea name="description" cols="5" rows="5" id="summernote"
                                            class="form-control" required>{!! $solution->description !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            {{-- end row --}}
                        </div>

                        <div class="col-md-4">
                            <div class="row">
                                <div class="extra-field">
                                    <h4>Edit Extra Field</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="short_description">Edit Short Description</label>
                                        <textarea name="short_description" cols="5" rows="5" class="form-control"
                                            required>{{$solution->short_description}}</textarea>
                                    </div>
                                </div>

                                <!-- =====Mutliple Image Form with Preview===== -->
                                <div class="insert-img">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label id="upload-img" for="image">Edit Featured</label>
                                                <input type="file" name="image" id="images"
                                                    placeholder="{{asset('images/'.$solution->image)}}"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <img class="img-sm img-center my-1"
                                                src="{{asset('images/'.$solution->image)}}" alt="upload">
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
