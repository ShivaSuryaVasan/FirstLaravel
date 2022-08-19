@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        @if(session()->get('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('msg') }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

            <div class="card">
                <div class="card-header">{{ __('Basic Detail Form') }}</div>
                    <div class="container">
                    <!-- onsubmit=showtable() -->
                    <form action="table1" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" id="form1_id1" name="form1_id1"  placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form1_id2" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">Block Name</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="form0_id8" placeholder="Block Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form1_id">Total No.of House</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form1_id3" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form1_id">Total No.of Shops</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form1_id4" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form1_id">Total No.of Companies</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form1_id5" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form1_id">Population in 2011</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form1_id6" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form1_id">Population Currently</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" min="0" class="form-control" name="form1_id7" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-2"></div>

                            <div style="margin-bottom:2em;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-primary" style="margin-left:2em;" href="\{{ Auth::user()->role }}" role="button">Back</a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Form -->
@endsection
