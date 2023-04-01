@extends('main')

@section('main-section')

<div class="container">
    <table class="table table-dark">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Date Of Birth</th>
                    <th>Status</th>
                    <th>Delete</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($regiseruser as $singleregiseruser)
                    <tr>
                        <td>{{ $singleregiseruser -> fname }}</td>
                        <td>{{ $singleregiseruser -> lname }}</td>
                        <td>{{ $singleregiseruser -> email }}</td>
                        <td>{{ $singleregiseruser -> gender }}</td>
                        <td>{{ $singleregiseruser -> phone }}</td>
                        <td>{{ $singleregiseruser -> date }}</td>
                        <td>
                            @if ($singleregiseruser -> status == "1")
                                <a href="{{ route('StatusChangeRouter',['id' => $singleregiseruser->id]) }}">Active</a>
                            @elseif($singleregiseruser -> status == "0")
                                Inactive
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('DeleteCustoer',  ['id' => $singleregiseruser->id]) }}">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('EditCustoer',  ['id' => $singleregiseruser->id]) }}">
                                <button class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>


@endsection
