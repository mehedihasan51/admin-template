@extends('backend.app')

@section('title', 'System Settings')

@section('content')

<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-4">
          <li class="breadcrumb-item"><a href="#">Settings</a></li>
          <li class="breadcrumb-item active" aria-current="page">Simple Mail Transfer Protocol</li>
        </ol>
      </nav>
    <div class="p-4">
        <form method="POST" action="{{ route('mail.update') }}>

            @csrf
            @method('PATCH')
            
            <div class="row g-3 bg-white p-2 box-show">
                <!-- Title -->
                <div class="col-md-6">
                    <label for="title" class="form-label">MAIL MAILER:</label>
                    <input type="text"  class="form-control @error('mail_mailer') is-invalid @enderror"
                    name="mail_mailer" id="mail_mailer"
                    placeholder="Please Enter Your Mail Mailer"
                    value="{{ env('MAIL_MAILER') }}"/>
                    @error('mail_mailer')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <!-- System Name -->
                <div class="col-md-6">
                    <label for="systemName" class="form-label">MAIL HOST:</label>
                    <input type="text"  class="form-control @error('mail_host') is-invalid @enderror"
                    name="mail_host" id="mail_host" placeholder="Please Enter Your Host"
                    value="{{ env('MAIL_HOST') }}" />
                    @error('mail_host')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <!-- Email -->
                <div class="col-md-6">
                    <label for="email" class="form-label">MAIL PORT:</label>
                    <input type="email" class="form-control @error('mail_port') is-invalid @enderror"
                    name="mail_port" id="mail_port" placeholder="Please Enter Your Mail Port"
                    value="{{ env('MAIL_PORT') }}" />
                    @error('mail_port')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <!-- Phone Number -->
                <div class="col-md-6">
                    <label for="phone" class="form-label">MAIL USERNAME:</label>
                    <input type="text"  class="form-control @error('mail_username') is-invalid @enderror"
                    name="mail_username" id="mail_username"
                    placeholder="Please Enter Your Mail Username"
                    value="{{ env('MAIL_USERNAME') }}" />
                    @error('mail_username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <!-- Calendly Link -->
                <div class="col-md-6">
                    <label for="calendly" class="form-label">MAIL PASSWORD:</label>
                    <input type="url" class="form-control @error('mail_password') is-invalid @enderror"
                    name="mail_password" id="mail_password"
                    placeholder="Please Enter Your Mail Password"
                    value="{{ env('MAIL_PASSWORD') }}"/>
                    @error('mail_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <!-- Address -->
                <div class="col-md-6">
                    <label for="address" class="form-label">MAIL ENCRYPTION:</label>
                    <input type="text" class="form-control @error('mail_encryption') is-invalid @enderror"
                    name="mail_encryption" id="mail_encryption"
                    placeholder="Please Enter Your Mail Encryption"
                    value="{{ env('MAIL_ENCRYPTION') }}" />

                    @error('mail_encryption')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <!-- Copy Rights Text -->
                <div class="col-md-6">
                    <label for="copyrights" class="form-label">MAIL FROM ADDRESS:</label>
                    <input type="text" class="form-control @error('mail_from_address') is-invalid @enderror"
                    name="mail_from_address" id="mail_from_address"
                    placeholder="Please Enter Your Mail From Address"
                    value="{{ env('MAIL_FROM_ADDRESS') }}" />
                    @error('mail_from_address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <!-- About System -->
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>



@endsection

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
