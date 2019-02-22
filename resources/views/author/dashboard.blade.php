<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 2/22/19
 * Time: 4:09 AM
 */
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in! <strong>{{ Auth::user()->name }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

