
@extends('layouts.app')

@section('content')

<div class="{{ isset($leader) ? 'container-fluid': 'container-fluid' }}">

          <!-- Content Row -->
          <div class="row">
            <!-- First Column -->
            <div class="col-lg-5">
              <div class="card shadow mb-3">
                <div class="card-header py-2">
                  <h6 class="m-0 font-weight-bold text-primary"> {{ isset($leader) ? 'Edit Leader': 'Add Leader' }}</h6>
                </div>
                <div class="card-body">
                 @include('partials.errors')
    <form action="{{ isset($leader) ? route('leader.update', $leader->id) : route('leader.store') }}" method="POST"  enctype="multipart/form-data">
    @csrf

    @if(isset($leader))
        @method('PUT')
      @endif

      <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" name="name" id='name' value="{{ isset($leader) ? $leader->name: '' }}">
      </div>
      <div class="form-group">
        <label for="title">Course</label>
        <input type="text" class="form-control" name="course" id='course' value="{{ isset($leader) ? $leader->course: '' }}">
      </div>
      <div class="form-group">
        <label for="position">Position</label>
        <select name="position" id="position" class="form-control">
          @foreach($position as $position)
            <option value="{{ $position->id }}"
                @if(isset($leader))
                  @if($position->id === $leader->position_id)
                    selected
                  @endif
                @endif
              >
              {{ $position->position }}
            </option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="description">Description of Position</label>
        <textarea name="description" id="description" cols="2" rows="2" class="form-control">{{ isset($leader) ? $leader->description: '' }}</textarea>
      </div>
     <div class="form-group">
        <label for="message">Brief Message</label>
        <input type="text" class="form-control" name="message" id='message' value="{{ isset($leader) ? $leader->message: '' }}">
      </div>

        @if(isset($leader))
        <div class="form-group">
          <img src="{{ asset($leader->image) }}" alt="" style="width: 15%">
        </div>
      @endif
      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" id='image'>
      </div>


      @if($years->count() > 0)
        <div class="form-group">
          <label for="years">years served</label>
            <select name="years[]" id="years" class="form-control years-selector" multiple>
              @foreach($years as $year)
              <option value="{{ $year->id }}"
                  @if(isset($leader))
                    @if($leader->hasYear($year->id))
                      selected
                    @endif
                  @endif
                >
                  {{ $year->year }}
                </option>
                @endforeach
            </select>
          </div>
        @endif




      {{--  <div class="form-group">
        <label for="position">position</label>
        <select name="position" id="position" class="form-control">
        </select>
      </div>  --}}

      <div class="form-group">
        <button type="submit" class="btn btn-success">
     {{ isset($leader) ? 'Update Leader': 'Add Leader' }}
        </button>
      </div>
    </form>
  </div>
</div>


@endsection

