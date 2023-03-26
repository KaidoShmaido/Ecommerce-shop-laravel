@extends('layouts.admin')

@section('content')
        <div class="card">
                <div class="card-header">
                        <h4>Edit/Update Category</h4>
                </div>
                <div class="card-body">
                      <form action="{{url ('insert-category')}}" method="post">
                      {{ csrf_field() }}
                        <div class="row">
                                <div class="col-sm-6">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" value="{{$category -> name}}" name="name">
                                </div>
                                <div class="col-sm-6">
                                        <label for="">Slug</label>
                                        <input type="text" class="form-control" value="{{$category -> slug}}" name="slug">
                                </div>
                               

                                <div class="col-sm-12 mb-3">
                                        <label for="">Description</label>
                                        <textarea name="description" id="" cols="30"  rows="5" class="form-control">{{$category->description}}"</textarea>
                                </div>
                                <div class="col-sm-6">
                                        <label for="">status</label>
                                        <input type="checkbox" name="status" {{$category->status == '1' ? 'checked':'' }}">
                                </div>
                                <div class="col-sm-6">
                                        <label for="">Popular</label>
                                        <input type="checkbox" name="popular" {{$category->popular == '1' ? 'checked':'' }}"">
                                </div>

                                <div class="col-sm-12">
                                        <label for="">Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control" value="{{$category -> meta_title}}">

                                </div>
                                <div class="col-sm-12">
                                        <label for="">Meta keywords</label>
                                        <input type="text" name="meta_keywords" class="form-control" value="{{$category -> meta_keywords}}">

                                </div>
                                <div class="col-sm-12">
                                        <label for="">Meta Description</label>
                                        <textarea rows=3 class="form-control" >{{$category -> meta_description}} </textarea>

                                </div>
                                <div class="col-sm-12">
                                        <label for="">image</label>
                                        <input type="file" name="image" class="form-control" value="{{$category -> image}}">

                                </div>

                                <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                          </div>
                      </form>
                </div>
        </div>