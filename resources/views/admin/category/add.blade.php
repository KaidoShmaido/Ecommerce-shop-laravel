@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>

        <div class="card-body">
            <form action="{{url('insert-catergory')}}" method="post">
                    <div class="row">
                        <div class="col-md-6 mb3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name">
                        </div>

                        <div class="col-md-6 mb3">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name="slug">
                        </div>
                        <div class="col-md-6 mb3">
                                <label for="">Description</label>
                                <input type="text" class="form-control" name="description">
                        </div>
                        <div class="col-md-6 mb3">
                                <label for="">Status</label>
                                <input type="text" class="form-control" name="status">
                        </div>
                        <div class="col-md-6 mb3">
                                <label for="">Popular</label>
                                <input type="checkbox" class="form-control" name="popular">
                        </div>
                        <div class="col-md-6 mb3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name">
                        </div>
                    </div>
            </form>
        </div>
    </div>