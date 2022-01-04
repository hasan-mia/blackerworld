@extends('backend.layout.main')

@section('content')
<main class="content">
    <div class="container-fluid">
        <div class="header my-3">
            <h1 class="header-title">
                Manage All Post
            </h1>
        </div>
        <div class="add-title">
            <a href="{{route('create.team')}}">Add Post</a>
        </div>
        {{-- end title --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatables-column-search-text-inputs" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Avatar</th>
                                    <th>date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $key=>$team)
                                <tr>
                                    <td>
                                        {{ $key + 1 }} . {{ $team->name }}
                                    </td>
                                    <td>
                                        <img class="img-sm my-2" src="{{asset('images/'.$team->avatar)}}" alt="avatar">
                                    </td>
                                    <td>{{ ($team->created_at)->format('d/m/Y') }}</td>
                                    <td>
                                        <ul class="action">
                                            <li><a href="{{route('edit.team', $team->id)}}"
                                                    class="btn btn-success btn-sm">
                                                    <i class="fa fa-edit"></i></a> </li>
                                            <li>
                                                <form action="{!! route('delete.team', $team->id) !!}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>

                                                {{-- <a href="{{route('delete.banner', $banner->id)}}"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i></a> --}}


                                            </li>
                                            {{-- <li><a href="#" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-eye"></i></a> </li> --}}

                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            {{-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Avatar</th>
                                    <th>date</th>
                                    <th>Edit/Delete</th>
                                </tr>
                            </tfoot> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<script>
    // DataTables with Column Search by Text Inputs
    document.addEventListener("DOMContentLoaded", function() {
        // Setup - add a text input to each footer cell
        $('#datatables-column-search-text-inputs tfoot th').each(function() {
            var title = $(this).text();
            $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
        });
        // DataTables
        var table = $('#datatables-column-search-text-inputs').DataTable();
        // Apply the search
        table.columns().every(function() {
            var that = this;
            $('input', this.footer()).on('keyup change clear', function() {
                if (that.search() !== this.value) {
                    that
                        .search(this.value)
                        .draw();
                }
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables with Buttons
        var datatablesButtons = $("#datatables-buttons").DataTable({
            responsive: true,
            lengthChange: !1,
            buttons: ["copy", "print"]
        });
        datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
    });
</script>

@endsection
