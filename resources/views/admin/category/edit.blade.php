<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 3/17/19
 * Time: 12:32 AM
 */

?>

@extends('layouts.backend.app')

@section('title', 'Category')

@push('css')


@endpush

@section('content')

    <!-- Vertical Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        MODIFIER Categorie
                    </h2>
                </div>
                <div class="body">
                    <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="name" name="name" class="form-control" value="{{ $category->name }}">
                                <label class="form-label">Category Name</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="file" name="image">
                        </div>

                        <br>

                        <a href="{{ route('admin.category.index') }}" class="btn btn-danger m-t-15 waves-effect">Retour</a>

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


