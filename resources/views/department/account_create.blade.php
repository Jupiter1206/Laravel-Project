@extends('layouts.department')
@section('content')


<!-- start page title -->
<div class="d-flex justify-content-between align-items-center">
  <h1 class="app-page-title mb-0">Create User</h1>
  <a href="{{route('department_account')}}" class="btn app-btn-secondary">Back</a>
</div><!-- /.d-flex justify-content-between align-items-center END -->
<!-- end page title -->

<hr class="my-2">

<div class="row">
  <div class="col-12">
    <div class="app-card app-card-settings h-100 shadow-sm">
      <div class="app-card-body p-4">
        <form class="settings-form" method="POST" action="{{route('department_account_store')}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label" for="simpleinput">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required />
              </div>

              <div class="mb-3">
                <label class="form-label" for="example-email"> Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required />
              </div>

              <div class="mb-3">
                <label class="form-label" for="example-email"> Phone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required />
              </div>

              <div class="mb-3">
                <label class="form-label" for="simpleinput">Role</label>
                <select class="form-control" name="role" id="example-select">
                  <option selected value="1">Owner</option>
                  <option value="2">department</option>
                  <option value="4">Staff</option>
                  <option value="5">Department</option>
                </select>
              </div>

              <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required />
                  <div class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                      <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                      <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="example-email"> Photo</label>
                <input type="file" class="form-control @error('phone') is-invalid @enderror" name="avatar" required />
              </div>
            </div>
          </div>
          <div class="my-2"></div><!-- /.my-2 END -->
          <div class="form-group mb-0">
            <button class="btn app-btn-primary" type="submit">Create User</button>
          </div>
        </form>
      </div><!-- end card-body-->
    </div> <!-- end card-->
  </div> <!-- end col -->
</div>
<!-- end row-->


@endsection