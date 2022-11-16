<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Users</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New User</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('users') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">

                    {{-- Name --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Name</label>
                        <input type="text" class="form-control form-control-user" id="exampleName"
                            placeholder="Name" required name="name" value="">

                    </div>
                    {{-- Email --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Email</label>
                        <input type="email" class="form-control form-control-user" id="exampleEmail"
                            placeholder="Email" required name="email" value="">

                    </div>

                    {{-- Password --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Passowrd</label>
                        <input type="password" class="form-control form-control-user" id="examplePassword"
                            placeholder="Password" required name="password" value="">

                    </div>

                </div>
                <button type="submit" class="btn btn-success btn-user btn-block">
                    Save
                </button>

            </form>
        </div>
    </div>

</div>