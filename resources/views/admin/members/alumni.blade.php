@extends('layouts.admin')
@section('content')
<!-- Page Heading-->
    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{Praise and Worship} Active Members</h1>
    </div> --}}
    <div class="row">
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card shadow mb-4 border-bottom-primary">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{Praise and Worship} Membership requests</h6>
                </div>
                <div class="card-body">
                  <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                      <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 55px;">Image</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 66px;">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 66px;">Contact</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Actions</th>
                      </thead>
                      <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Image</th>
                            <th rowspan="1" colspan="1">Name</th>
                            <th rowspan="1" colspan="1">Contact</th>
                            <th rowspan="1" colspan="1">Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                      <tr id="m1" role="row" class="odd m-category">
                          <td class="sorting_1">
                            <img class="img-profile rounded-circle d-block m-auto" style="height: 50px; width: 50px" src="{{ asset('template/image/undraw_posting_photo.svg')}}">
                          </td>
                          <td>Peter Mugumo</td>
                          <td>0712345689</td>
                          <td>
                              <div class="d-flex">
                                <a href="#" class="btn btn-info btn-circle btn-sm mr-1" data-toggle="modal" data-target="#m1">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-primary btn-sm btn-icon-split">
                                  <span class="icon text-white-50">
                                    <i class="fas fa-check-circle"></i>
                                  </span>
                                  <span class="text">Join Active Members</span>
                                </a>
                              </div>
                          </td>
                        </tr><tr role="row" class="even">
                          <td class="sorting_1">Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          {{-- <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td> --}}
                        </tr><tr role="row" class="odd">
                          <td class="sorting_1">Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          {{-- <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td> --}}
                        </tr><tr role="row" class="even">
                          <td class="sorting_1">Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          {{-- <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td> --}}
                        </tr><tr role="row" class="odd">
                          <td class="sorting_1">Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          {{-- <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td> --}}
                        </tr><tr role="row" class="even">
                          <td class="sorting_1">Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          {{-- <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td> --}}
                        </tr><tr role="row" class="odd">
                          <td class="sorting_1">Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          {{-- <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td> --}}
                        </tr><tr role="row" class="even">
                          <td class="sorting_1">Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          {{-- <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td> --}}
                        </tr><tr role="row" class="odd">
                          <td class="sorting_1">Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          {{-- <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td> --}}
                        </tr><tr role="row" class="even">
                          <td class="sorting_1">Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          {{-- <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td> --}}
                        </tr></tbody>
                    </table>
                </div>
              </div>
        </div>
    </div>
@endsection

@section('groups')
    <a class="collapse-item" href="{{route('groupDashboard-admin')}}">Praise and Worship</a>
    <a class="collapse-item" href="utilities-border.html">ICT board</a>
    <a class="collapse-item" href="utilities-animation.html">Elders Committee</a>
@endsection
