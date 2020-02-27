@extends('layouts.admin')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{Praise and Worship} Videos</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
            <div class="col-md-5"></div>
            <div class="col-sm-12 col-md-4">
            <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-3"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Add Video</h1>
                    </div>
                    <form class="user">
                      <div class="form-group row">
                        <div class="col-sm-4">
                            <a href="#">
                                <img id="newVideoImage" onclick="document.querySelector('#newVideoLogo').click()" class="img-profile rounded-circle m-auto" style="height: 80px; width: 80px" src="{{ asset('template/image/undraw_posting_photo.svg')}}">
                            </a>
                            {{-- <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logo</span> --}}
                          <input type="file" class="form-control form-control-user d-none" id="newVideoLogo" placeholder="Logo">
                        </div>
                        <div class="col-sm-8 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" id="newVideoName" placeholder="Title">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-12 mb-3 mb-sm-0">
                          <input type="url" class="form-control form-control-user" id="newVideoUrl" placeholder="Url">
                        </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-12">
                            <textarea class="w-100" id="newVideoDescription">About Video</textarea>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-12">
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Add">
                          </div>
                      </div>
                    </form>
                  </div>
                <div class="col-sm-12 col-md-8">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
          <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 55px;">Image</th>
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 66px;">Title</th>
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 52px;">Url</th>
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Actions</th>
          </thead>
          <tfoot>
            <tr>
                <th rowspan="1" colspan="1">Image</th>
                <th rowspan="1" colspan="1">Title</th>
                <th rowspan="1" colspan="1">Url</th>
                <th rowspan="1" colspan="1">Action</th>
            </tr>
          </tfoot>
          <tbody>
          <tr id="m1" role="row" class="odd m-category">
              <td class="sorting_1">
                <img class="img-profile rounded-circle d-block m-auto" style="height: 50px; width: 50px" src="{{ asset('template/image/undraw_posting_photo.svg')}}">
              </td>
              <td>I stand Amazed</td>
              <td><a target="_blank" href="https://youtube.com/ksucu">https://youtube.com/ksucu</a></td>
              <td>
                  <div class="d-flex">
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
                        <h5 class="modal-title" id="exampleModalLabel">Update Video</h5>
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
                                        <div class="col-sm-4">
                                            <a href="#" class="d-block m-auto">
                                                <img id="updateVideoImage_m1" onclick="document.querySelector('#updateVideoLogo_m1').click()" class="img-profile rounded-circle d-block m-auto" style="height: 50px; width: 50px" src="{{ asset('template/image/undraw_posting_photo.svg')}}">
                                            </a>
                                          <input type="file" class="form-control form-control-user d-none" id="updateVideoLogo_m1" placeholder="Logo">
                                        </div>
                                        <div class="col-sm-8 mb-sm-0">
                                          <input type="text" class="form-control form-control-user" id="updateVideoTitle_m1" placeholder="Title">
                                        </div>
                                      </div>
                                      {{-- <div class="form-group row">
                                        <div class="col-sm-6 mb-sm-0">
                                          <input type="date" class="form-control form-control-user" id="updateVideoDate_m1" placeholder="Date">
                                        </div>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control form-control-user" id="updateVideoVenue_m1" placeholder="Venue">
                                        </div>
                                      </div> --}}
                                      <div class="form-group row">
                                        <div class="col-sm-12 mb-sm-0">
                                          <input type="url" class="form-control form-control-user" id="updateVideoUrl_m1" placeholder="URL">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                          <div id="" class="col-sm-12 sample">
                                            <textarea  cols="60" class="form-control form-control-user" id="updateVideoDescription_m1">About Video</textarea>
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
            </tr><tr role="row" class="even">
              <td class="sorting_1">Angelica Ramos</td>
              <td>Chief Executive Officer (CEO)</td>
              <td>London</td>
              <td>47</td>
              {{-- <td>2009/10/09</td>
              <td>$1,200,000</td> --}}
            </tr><tr role="row" class="odd">
              <td class="sorting_1">Ashton Cox</td>
              <td>Junior Technical Author</td>
              <td>San Francisco</td>
              <td>66</td>
              {{-- <td>2009/01/12</td>
              <td>$86,000</td> --}}
            </tr><tr role="row" class="even">
              <td class="sorting_1">Bradley Greer</td>
              <td>Software Engineer</td>
              <td>London</td>
              <td>41</td>
              {{-- <td>2012/10/13</td>
              <td>$132,000</td> --}}
            </tr><tr role="row" class="odd">
              <td class="sorting_1">Brenden Wagner</td>
              <td>Software Engineer</td>
              <td>San Francisco</td>
              <td>28</td>
              {{-- <td>2011/06/07</td>
              <td>$206,850</td> --}}
            </tr><tr role="row" class="even">
              <td class="sorting_1">Brielle Williamson</td>
              <td>Integration Specialist</td>
              <td>New York</td>
              <td>61</td>
              {{-- <td>2012/12/02</td>
              <td>$372,000</td> --}}
            </tr><tr role="row" class="odd">
              <td class="sorting_1">Bruno Nash</td>
              <td>Software Engineer</td>
              <td>London</td>
              <td>38</td>
              {{-- <td>2011/05/03</td>
              <td>$163,500</td> --}}
            </tr><tr role="row" class="even">
              <td class="sorting_1">Caesar Vance</td>
              <td>Pre-Sales Support</td>
              <td>New York</td>
              <td>21</td>
              {{-- <td>2011/12/12</td>
              <td>$106,450</td> --}}
            </tr><tr role="row" class="odd">
              <td class="sorting_1">Cara Stevens</td>
              <td>Sales Assistant</td>
              <td>New York</td>
              <td>46</td>
              {{-- <td>2011/12/06</td>
              <td>$145,600</td> --}}
            </tr><tr role="row" class="even">
              <td class="sorting_1">Cedric Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>22</td>
              {{-- <td>2012/03/29</td>
              <td>$433,060</td> --}}
            </tr></tbody>
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
            new nicEditor({fullPanel : true}).panelInstance('newVideoDescription');
            for (let index = 0; index < mCategory.length; index++) {
                const element = mCategory[index].id;
                new nicEditor({fullPanel : true}).panelInstance(`updateVideoDescription_${element}`);

                document.querySelector(`#updateVideoDescription_${element}`).previousSibling.firstChild.addEventListener('input', function(){
                    document.querySelector(`#updateVideoDescription_${element}`).value = this.innerHTML;
                })

                //show chosen logo
                $(`#updateVideoLogo_${element}`).change(function() {
                    var reader = new FileReader();
                    reader.onload = function(){
                        let dataUrl = reader.result
                        document.querySelector(`#updateVideoImage_${element}`).src = dataUrl
                    }

                    let file = $(`#updateVideoLogo_${element}`).prop('files')[0]
                    reader.readAsDataURL(file)
                })
            }
            // new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
            // new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
            // new nicEditor({maxHeight : 100}).panelInstance('area5');
        });

        $(document).ready(() => {
            document.querySelector('#newVideoDescription').previousSibling.firstChild.addEventListener('input', function(){
                document.querySelector('#newVideoDescription').value = this.innerHTML;
                // alert('working')
            })

            //show chosen logo
            $('#newVideoLogo').change(function() {
                var reader = new FileReader();
                reader.onload = function(){
                    let dataUrl = reader.result
                    document.querySelector('#newVideoImage').src = dataUrl
                }

                let file = $('#newVideoLogo').prop('files')[0]
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
