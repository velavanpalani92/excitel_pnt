@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p> Add New <a href="{{ route('erp.add') }}" > ERP </a> </p>  
                </div>

                <livewire:erp-listing></livewire:erp-listing>

            </div>
        </div>
    </div>
</div>
@endsection
