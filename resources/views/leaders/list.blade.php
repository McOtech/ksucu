@extends('layouts.app')

@section('content')
  <div class="container">
<div class="card card-default">
  <div class="card-header">leaders</div>

  <div class="card-body">
      <table class="table">
        <thead>
          <th>Image</th>
          <th>name</th>
          <th>message</th>
          <th></th>
        </thead>
        <tbody>
          @foreach($leader as $leader)
            <tr>
              <td>
                <img src="{{ asset($leader->image)}}" width="120px" height="60px" alt="">
              </td>
              <td>
                {{ $leader->name }}
              </td>
              <td>
                {{ $leader->message }}
              </td>

                <td>
                  <a href="{{ route('leader.edit', $leader->id) }}" class="btn btn-info btn-sm">Edit</a>
                </td>
              <td>
              <form action="{{ route('leader.destroy', $leader->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                 DELETE
                </button>
              </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

  </div>
</div>
</div>
@endsection
