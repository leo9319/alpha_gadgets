@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>The pre order for current shipment lot is still in progress. Please login after 30 September, 2020 to know the status of your order. Thank you</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
