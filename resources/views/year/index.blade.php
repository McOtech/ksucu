@extends('layouts.app')

@section('content')

<div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
            <!-- First Column -->
            <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{{ isset($year)  ? 'Edit year' : 'Create year' }}</h6>
                </div>
                <div class="card-body">
                @include('partials.errors')
    <form action="{{ isset($year) ? route('year.update', $year->id) : route('year.store') }}" method="POST" enctype="multipart/form-data">
     @csrf
      @if(isset($year))
        @method('PUT')
      @endif
      <div class="form-group">
        <label for="title">year</label>
        <input type="text" class="form-control" name="year" id='year' value="{{ isset($year) ? $year->year : '' }}">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success">
                 {{ isset($year) ? 'Update': 'Add' }}
        </button>
      </div>
    </form>
  </div>
</div>


                </div>
              </div>
              </div>
              </div>
              </div>
@endsection

