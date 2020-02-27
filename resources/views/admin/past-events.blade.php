@extends('layouts.admin')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        @if ($category == 'scheduled')
            <h6 class="m-0 font-weight-bold text-primary">{{$cohort->name}} Scheduled Events</h6>
        @else
            <h6 class="m-0 font-weight-bold text-primary">{{$cohort->name}} Past Events</h6>
        @endif
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
            @if ($category == 'scheduled')
                <div class="col-md-5"></div>
                <div class="col-sm-12 col-md-4">
            @else
                <div class="col-sm-12 col-md-9">
            @endif


            <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-3"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row">
                @if ($category == 'scheduled')
                    <div class="col-sm-12 col-md-4">
                        <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Schedule Event</h1>
                        </div>
                    <form class="user" enctype="multipart/form-data" method="POST" action="{{ route('event.store', ['cohort' => $cohort->id]) }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <a href="javascript:void(0)">
                                    <img id="newEventImage" onclick="document.querySelector('#newEventLogo').click()" class="img-profile rounded-circle d-block m-auto" style="height: 200px; width: 200px" src="{{ asset('template/image/undraw_posting_photo.svg')}}">
                                </a>
                                {{-- <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logo</span> --}}
                            <input type="file" name="image" class="form-control form-control-user d-none @error('image') is-invalid @enderror" id="newEventLogo" placeholder="Logo">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="hidden" name="cohort_id" value="{{ $cohort->id}}">
                            </div>
                            <div class="col-sm-12 mt-3 mb-3 mb-sm-0">
                            <input type="text" name="name" value="{{ old('name')}}" class="form-control form-control-user p-3 @error('name') is-invalid @enderror" id="newEventName" placeholder="Name" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                        </div> --}}
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="date" name="date" value="{{ old('date')}}" class="form-control form-control-user p-3 @error('date') is-invalid @enderror" id="newEventDate" placeholder="Date" required>
                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="col-sm-6">
                            <input type="text" name="venue" value="{{ old('venue')}}" class="form-control form-control-user p-3 @error('venue') is-invalid @enderror" id="newEventVenue" placeholder="Venue" required>
                            @error('venue')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <textarea name="description" class="w-100 @error('description') is-invalid @enderror" id="newEventDescription" required>{{ old('description') ?? 'About Event'}}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Schedule">
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-8">
                @else
                    <div class="col-sm-12 col-md-12">
                @endif

                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
          <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 55px;">Image</th>
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 66px;">Name</th>
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 52px;">Date</th>
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 52px;">Venue</th>
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Actions</th>
          </thead>
          <tfoot>
            <tr>
                <th rowspan="1" colspan="1">Image</th>
                <th rowspan="1" colspan="1">Name</th>
                <th rowspan="1" colspan="1">Date</th>
                <th rowspan="1" colspan="1">Venue</th>
                <th rowspan="1" colspan="1">Action</th>
            </tr>
          </tfoot>
          <tbody>
              @if ($events != null)
                @foreach ($events as $event)
                    <tr id="m1" role="row" class="odd m-category">
                        <td class="sorting_1">
                        <img class="img-profile rounded-circle d-block m-auto" style="height: 50px; width: 50px" src="{{ asset('storage/' . $event->image)}}">
                        </td>
                        <td>{{$event->name}}</td>
                        <td>{{$event->date}}</td>
                        <td>
                        {{$event->venue}}
                        </td>
                        <td>
                            <div class="d-flex">
                            <a href="#" class="btn btn-success btn-circle btn-sm">
                                <i class="fas fa-clock"></i> {{-- check --}}
                            </a>
                        <a href="{{ route('videos.edit', ['category' => 'Ministry', 'id' => 1, 'eventId' => 1])}}" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-video"></i>
                            </a>
                            <a href="{{ route('gallery.edit', ['category' => 'Ministry', 'id' => 1, 'eventId' => 1])}}" class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-images"></i>
                            </a>
                            <a href="#" class="btn btn-info btn-circle btn-sm" data-toggle="modal" data-target="#m1">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                            </div>
                        </td>
                        <!-- Update Modal-->
                        <div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Event</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form class="user" action="#" method="POST">
                                                <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <a href="javascript:void(0)">
                                                        <img id="updateEventImage_m1" onclick="document.querySelector('#updateEventLogo_m1').click()" class="img-profile rounded-circle d-block m-auto" style="height: 150px; width: 150px" src="{{ asset('template/image/undraw_posting_photo.svg')}}">
                                                    </a>
                                                    <input type="file" class="form-control form-control-user d-none" id="updateEventLogo_m1" placeholder="Logo">
                                                </div>
                                                <div class="col-sm-12 mt-3 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" id="updateEventName_m1" placeholder="Name">
                                                </div>
                                                </div>
                                                <div class="form-group row">
                                                <div class="col-sm-6 mb-sm-0">
                                                    <input type="date" class="form-control form-control-user" id="updateEventDate_m1" placeholder="Date">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control form-control-user" id="updateEventVenue_m1" placeholder="Venue">
                                                </div>
                                                </div>
                                                <div class="form-group row">
                                                <div class="col-sm-12 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" id="updateEventLocation_m1" placeholder="Location">
                                                </div>
                                                {{-- <div class="col-sm-6">
                                                    <input type="text" class="form-control form-control-user" id="updateSecretaryId_m1" placeholder="Secretary Regno">
                                                </div> --}}
                                                </div>
                                                {{-- <div class="form-group row">
                                                <div class="col-sm-6 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" id="updateTreasurerName_m1" placeholder="Treasurer Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control form-control-user" id="updateTreasurerId_m1" placeholder="Treasurer Regno">
                                                </div>
                                                </div> --}}
                                                <div class="form-group row">
                                                    <div id="" class="col-sm-12 sample">
                                                    <textarea  cols="60" class="form-control form-control-user" id="updateEventDescription_m1">About Event</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Update">
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
              @else
                  <tr>
                      No Event Found
                  </tr>
              @endif
          </tbody>
        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
      </div>
    </div>
  </div>

@endsection

@section('nicEdit')
    <script type="text/javascript">

        var mCategory = $('.m-category');

        bkLib.onDomLoaded(function() {
            // new nicEditor().panelInstance('area1');
            new nicEditor({fullPanel : true}).panelInstance('newEventDescription');
            for (let index = 0; index < mCategory.length; index++) {
                const element = mCategory[index].id;
                new nicEditor({fullPanel : true}).panelInstance(`updateEventDescription_${element}`);

                document.querySelector(`#updateEventDescription_${element}`).previousSibling.firstChild.addEventListener('input', function(){
                    document.querySelector(`#updateEventDescription_${element}`).value = this.innerHTML;
                })

                //show chosen logo
                $(`#updateEventLogo_${element}`).change(function() {
                    var reader = new FileReader();
                    reader.onload = function(){
                        let dataUrl = reader.result
                        document.querySelector(`#updateEventImage_${element}`).src = dataUrl
                    }

                    let file = $(`#updateEventLogo_${element}`).prop('files')[0]
                    reader.readAsDataURL(file)
                })
            }
            // new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
            // new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
            // new nicEditor({maxHeight : 100}).panelInstance('area5');
        });

        $(document).ready(() => {
            document.querySelector('#newEventDescription').previousSibling.firstChild.addEventListener('input', function(){
                document.querySelector('#newEventDescription').value = this.innerHTML;
                // alert('working')
            })

            //show chosen logo
            $('#newEventLogo').change(function() {
                var reader = new FileReader();
                reader.onload = function(){
                    let dataUrl = reader.result
                    document.querySelector('#newEventImage').src = dataUrl
                }

                let file = $('#newEventLogo').prop('files')[0]
                reader.readAsDataURL(file)
            })

            var nicEdit = $('.sample').children()
            for (let i = 0; i < nicEdit.length; i++) {
              let element = nicEdit[i];
              element.style.width = "100%"
              let innerNicEdit = element.children
              if (innerNicEdit != null) {
                for (let j = 0; j < innerNicEdit.length; j++) {
                  let e = innerNicEdit[j];
                  e.style.width = "inherit"
                }
              }
            }

        })

        </script>
@endsection

@section('groups')
    @if (Auth::user()->membership != null)
        @foreach(Auth::user()->membership as $leader)
            @if($leader->post != 'member' && $leader->right == 'yes')
                <a class="collapse-item" href="{{route('cohort.show', ['cohort' => $leader->cohort_id])}}">{{$leader->cohort->name}}</a>
            @endif
        @endforeach
    @endif
@endsection
