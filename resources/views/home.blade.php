<x-layouts>
<div class="container content-section">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Benvenuto</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Sei loggato!
                </div>
            </div>
        </div>
    </div>
</div>
</x-layouts>
