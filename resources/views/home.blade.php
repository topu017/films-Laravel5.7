@include('templates.header')
    <div class="container_fluid auth_container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card auth_content">
                        <div class="card-header">Welcome</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('templates.footer')
