@extends('layouts.app')

@section('content')
  <div class="container">
<div class="card card-default">
  <div class="card-header">leaders</div>

  <div class="card-body">
  @if($leader->count() > 0)
      <table class="table">
        <thead>
          <th>Image</th>
          <th>name</th>
          <th>Position</th>
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
                <a href="{{ route('position.edit', $leader->position->id) }}">
                {{ $leader->position->position }}
              </td>


                @if($leader->trashed())
                <td>
                  <form action="{{ route('restore-leader', $leader->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                      <button type="submit" class="btn btn-info btn-sm">Restore</button>
                  </form>
                </td>
              @else
                 <td>
                  <a href="{{ route('leader.edit', $leader->id) }}" class="btn btn-info btn-sm">Edit</a>
                </td>
              @endif
              <td>
              <form action="{{ route('leader.destroy', $leader->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                 {{ $leader->trashed() ? 'Delete': 'Trash' }}
                </button>
              </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <h3 class="text-center">No leaders Yet</h3>
    @endif

  </div>
</div>
</div>
@endsection
