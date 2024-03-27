
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <div class="card-body">
                    <h5>Form</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-8 content-center align-center">
                            <form action="{{ route('user.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                    {{-- image --}}
                                    <div class="form-group">
                                        <label class="form-label" for="image">Foto Profile</label>
                                        <input type="file" class="form-control  @error('image') is-invalid @enderror"
                                            value="{{ old('image') }}" name="image" id=""
                                            aria-describedby="ImagelHelp" placeholder="Image">
                                    </div>
                                    @error('image')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                
                                {{-- name --}}
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text"
                                        class="form-control  @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" name="name" id=""
                                        aria-describedby="NamelHelp" placeholder="Name">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                {{-- email --}}
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email"
                                        class="form-control  @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" name="email" id=""
                                        aria-describedby="EmaillHelp" placeholder="Email">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                        value="{{ old('password') }}" name="password" id=""
                                        aria-describedby="PasswordlHelp" placeholder="Password">
                                </div>
                                @error('password')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <button type="submit" class="btn btn-primary mb-4">Save</button>
                                <button type="reset" class="btn btn-warning mb-4">reset</button>
                                <button type="button" class="btn btn-danger mb-4" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                        <div class="col-md-6">



                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>