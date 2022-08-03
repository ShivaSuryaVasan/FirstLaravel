@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard ') }}</div>

                    <div class="p-2 border row list-group-item-action" style="margin-left:0px;">
                        <div class="col-sm-8 ">Format-A</div>
                        <div class="col-sm-4">
                            <div>
                                <a href="\show0" type="button" class="btn btn-primary btn-sm">Preview</a>
                                <a href="\table0" type="button" class="btn btn-primary btn-sm" style="margin-left:30px;">Insert</a>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 border row list-group-item-action" style="margin-left:0px;">
                        <div class="col-sm-8 ">Basic Detail Form</div>
                        <div class="col-sm-4">
                            <div>
                                <a href="\show1" type="button" class="btn btn-primary btn-sm">Preview</a>
                                <a href="\table1" type="button" class="btn btn-primary btn-sm" style="margin-left:30px;">Insert</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-2 border row list-group-item-action" style="margin-left:0px;">
                        <div class="col-sm-8 ">Toilet Facilities in Household</div>
                        <div class="col-sm-4">
                            <div>
                                <a href="\show2" type="button" class="btn btn-primary btn-sm">Preview</a>
                                <a href="\table2" type="button" class="btn btn-primary btn-sm" style="margin-left:30px;">Insert</a>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 border row list-group-item-action" style="margin-left:0px;">
                        <div class="col-sm-8 ">Details of Sanitary Complexes</div>
                        <div class="col-sm-4">
                            <div>
                                <a href="\show3" type="button" class="btn btn-primary btn-sm">Preview</a>
                                <a href="\table3" type="button" class="btn btn-primary btn-sm" style="margin-left:30px;">Insert</a>
                            </div>
                        </div>
                    </div>
                
                    <div class="p-2 border row list-group-item-action" style="margin-left:0px;">
                        <div class="col-sm-8 ">Details of Institutional Santation</div>
                        <div class="col-sm-4">
                            <div>
                                <a href="\show4" type="button" class="btn btn-primary btn-sm">Preview</a>
                                <a href="\table4" type="button" class="btn btn-primary btn-sm" style="margin-left:30px;">Insert</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-2 border row list-group-item-action" style="margin-left:0px;">
                        <div class="col-sm-8 ">Sanitation Facilities in Public Places</div>
                        <div class="col-sm-4">
                            <div>
                                <a href="\show5" type="button" class="btn btn-primary btn-sm">Preview</a>
                                <a href="\table5" type="button" class="btn btn-primary btn-sm" style="margin-left:30px;">Insert</a>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 border row list-group-item-action" style="margin-left:0px;">
                        <div class="col-sm-8 ">Sanitation Facilities in Public Places - Basic</div>
                        <div class="col-sm-4">
                            <div>
                                <a href="\show6" type="button" class="btn btn-primary btn-sm">Preview</a>
                                <a href="\table6" type="button" class="btn btn-primary btn-sm" style="margin-left:30px;">Insert</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-2 border row list-group-item-action" style="margin-left:0px;">
                        <div class="col-sm-8 ">Solid Waste Management Plan (Waste Audit)</div>
                        <div class="col-sm-4">
                            <div>
                                <a href="\show7" type="button" class="btn btn-primary btn-sm">Preview</a>
                                <a href="\table7" type="button" class="btn btn-primary btn-sm" style="margin-left:30px;">Insert</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-2 border row list-group-item-action" style="margin-left:0px;">
                        <div class="col-sm-8 ">Solid Waste Management Plan - Details of Infrastructure Created</div>
                        <div class="col-sm-4">
                            <div>
                                <a href="\show8" type="button" class="btn btn-primary btn-sm">Preview</a>
                                <a href="\table8" type="button" class="btn btn-primary btn-sm" style="margin-left:30px;">Insert</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-2 border row list-group-item-action" style="margin-left:0px;">
                        <div class="col-sm-8 ">SWM - Activities - Mapping</div>
                        <div class="col-sm-4">
                            <div>
                                <a href="\show9" type="button" class="btn btn-primary btn-sm">Preview</a>
                                <a href="\table9" type="button" class="btn btn-primary btn-sm" style="margin-left:30px;">Insert</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-2 border row list-group-item-action" style="margin-left:0px;">
                        <div class="col-sm-8 ">GWM Facilities</div>
                        <div class="col-sm-4">
                            <div>
                                <a href="\show10" type="button" class="btn btn-primary btn-sm">Preview</a>
                                <a href="\table10" type="button" class="btn btn-primary btn-sm" style="margin-left:30px;">Insert</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-2 border row list-group-item-action" style="margin-left:0px;">
                        <div class="col-sm-8 ">Work and Financial basics</div>
                        <div class="col-sm-4">
                            <div>
                                <a href="\show11" type="button" class="btn btn-primary btn-sm">Preview</a>
                                <a href="\table11" type="button" class="btn btn-primary btn-sm" style="margin-left:30px;">Insert</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
