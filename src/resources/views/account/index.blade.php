@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Accounts') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('account.create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Create account</a>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> id</th>
                                <th> name</th>
                                <th> email </th>
                                <th> role </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td> {{$user->id}} </td>
                                    <td> {{$user->name}} </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->role}} </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
