@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="name" value="" placeholder="Title Here"  required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    {{--<input id="email" type="email" class="form-control" name="email" value="" required>--}}
                                    <textarea id="description" name="description" class="form-control" placeholder="Description Here"> </textarea>
                                </div>
                            </div>


                            {{--<div class="form-group row mb-0">--}}
                               <div class="row col-md-12">
                                   <div class="col-md-6" align="right">
                                       <button type="submit" class="btn btn-primary">Save
                                       </button>
                                   </div>

                                   <div class="col-md-6" align="left">
                                       <button type="reset" class="btn btn-primary">Clear
                                       </button>
                                   </div>

                               {{--</div>--}}
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
