@extends('main.main')

@section('content')

<div class="container">
    <a href="{{ route('niche.index') }}" class="btn btn-outline-warning"><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></a>
    <table class="table table-bordered table-striped mt-2">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Niche</th>
                <th scope="col">Shelf</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($niche->folder as $counter=>$index)

                <tr>
                    <td>{{ ++$counter }}</td>
                    <td>{{ $index->name }}</td>
                    <td>@if(!empty($index->niche)) {{ $index->niche->name }} @endif</td>
                    <td>@if(!empty($index->niche->shelf)) {{ $index->niche->shelf->name }} @endif</td>
                    <td><a class="btn btn-outline-info"><i class="fa fa-eye"></i> Show</a></td>
                    <td><a class="btn btn-outline-success"><i class="fa fa-pencil"></i> Edit</a></td>
                    <td>
                        <form action="{{ route('folder.destroy', $index->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger"
                            onclick="return confirm('Are you sure?')">
                        </form>
                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>

</div>

@endsection
