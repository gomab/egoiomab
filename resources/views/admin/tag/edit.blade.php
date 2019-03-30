<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 3/17/19
 * Time: 12:32 AM
 */

?>

@extends('layouts.backend.app')

@section('title', 'Tag')

@push('css')


@endpush

@section('content')

    <!-- Vertical Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        MODIFIER UN TAG
                    </h2>
                </div>
                <div class="body">
                    <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="name" name="name" class="form-control" value="{{ $tag->name }}">
                                <label class="form-label">Tag Name</label>
                            </div>
                        </div>

                        <br>

                        <a href="{{ route('admin.tag.index') }}" class="btn btn-danger m-t-15 waves-effect">Retour</a>

                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Vertical Layout | With Floating Label -->

@endsection

@push('js')


@endpush


