@extends('admin.dashboard')


@section('content')

        

            

            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-10">
                                    @include('admin.pages.flash_message')
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <h1>Permissions </h3>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#permissionsModal">Add Permission +</a>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered file-export">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($permissions as $data)
                                                <tr>
                                                    <td>{{$data->name??'N/A'}}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>





<!-- Modal -->
<div class="modal fade" id="permissionsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Save Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin.permissions.save')}}" novalidate="" method="post">
        @csrf
          <div class="modal-body">
            
                <div class="form-group position-relative has-icon-left">
                   <div class="controls">

                         <input type="text" name="name" class="form-control" required value="{{old('name')}}"
                                                                data-validation-required-message="Name is required"
                                                                placeholder="Write Permission">
                            <div class="form-control-position">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                </div>                                                      
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
      </form>
    </div>
  </div>
</div>

@endsection

