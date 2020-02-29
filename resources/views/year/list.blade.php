@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <!-- Content Row -->
          <div class="row">
            <!-- First Column -->
            <div class="col-lg-4">
              <div class="card shadow mb-4">
<div class="card card-default">
  <div class="card-header">years</div>
  <div class="card-body">
    @if($year->count() > 0)
    <table class="table">
      <thead>
        <th>Name</th>
        {{--  <th>Posts Count</th>  --}}
        <th></th>
      </thead>

      <tbody>
        @foreach($year as $year)
          <tr>
            <td>
              {{ $year->year }}
            </td>
            {{--  <td>
              {{ $year->posts->count() }}
            </td>  --}}
            <td>
              <a href="{{ route('year.edit', $year->id) }}" class="btn btn-info btn-sm">
                Edit
              </a>
              <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $year->id }})">Delete</button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deleteyearForm">
            @csrf
            @method('DELETE')
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete year</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p class="text-center text-bold">
                  Are you sure you want to delete this year ?
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                <button type="submit" class="btn btn-danger">Yes, Delete</button>
              </div>
            </div>
        </form>
      </div>
    </div>
    @else
    <h3 class="text-center">No year yet.</h3>
    @endif
  </div>
</div>
</div>
@endsection

@section('scripts')
  <script>
    function handleDelete(id) {
      var form = document.getElementById('deleteyearForm')
      form.action = '/year/' + id
      $('#deleteModal').modal('show')
    }
  </script>
@endsection
