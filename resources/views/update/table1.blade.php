@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Basic Detail Form') }}</div>
                    <div class="container">
                    <!-- onsubmit=showtable() -->
                    <form action="/update1" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                            @csrf
                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                            <div class="form-group col-md-6">
                                <label for="panchayatname">Panchayat Name</label>
                                <input type="text" class="form-control" id="form1_id1" name="form1_id1" value="{{ $value['Panchayat_name'] }}"  placeholder="Place Name..">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hamletname">Hamlet Name</label>
                                <input type="text" class="form-control" name="form1_id2"  value="{{ $value['Hamlet_name'] }}" placeholder="Hamlet Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form0_id">Block Name</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="form0_id8"  value="{{ $value['Hamlet_name'] }}" placeholder="Block Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form1_id">Total No.of House</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form1_id3"  value="{{ $value['Ntotal_houses'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form1_id">Total No.of Shops</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form1_id4"  value="{{ $value['Ntotal_shops'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form1_id">Total No.of Companies</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form1_id5"  value="{{ $value['Ntotal_companies'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form1_id">Population in 2011</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form1_id6"  value="{{ $value['Npopulation_2011'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form1_id">Population Currently</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form1_id7"  value="{{ $value['Npopulation_current'] }}" placeholder="Count..">
                            </div>
                            <div class="form-group col-md-2"></div>

                            <div style="margin-bottom:2em;">
                                <button type="submit" id="submit" class="btn btn-primary">Update</button>
                                <a class="btn btn-primary" style="margin-left:2em;" href="\show1" role="button">Back</a>
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
