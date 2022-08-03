@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Work and Financial basics') }}</div>
                    <div class="container">
                    <form action="/update11" method="post" enctype="multipart/form-data">
                        <div class="form-row" style="padding-top: 2em;">
                        @csrf
                            <input type="hidden" name="id" value="{{ $value['id'] }}">
                            <div class="form-group col-md-6">
                                <label for="inputpachayatname">Panchayat Name</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="form11_id1" value="{{ $value['Panchayat_name'] }}" placeholder="Place Name..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">Detail of Work</label>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="form11_id2" value="{{ $value['Detail_of_work'] }}" rows="3" placeholder="Content.."></textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">Total Amount Required</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form11_id3" value="{{ $value['Total_amount_required'] }}" placeholder="Rupees..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;">
                                <label for="form11_id">Fund for Planned Work to be Carried out :</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">MGNREGS</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form11_id4" value="{{ $value['MGNREGS'] }}" placeholder="Count..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form11_id">Village Panchayat</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">Tied Water Supply</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form11_id5" value="{{ $value['Vtied_water_supply'] }}" placeholder="Rupees..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">Tied Sanitation</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form11_id6" value="{{ $value['Vtied_sanitation'] }}" placeholder="Rupees..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">United</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form11_id7" value="{{ $value['Vunited'] }}" placeholder="Rupees..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form11_id">Local Panchayat</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">Tied Water Supply</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form11_id8" value="{{ $value['Ltied_water_supply'] }}" placeholder="Rupees..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">Tied Sanitation</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form11_id9" value="{{ $value['Ltied_sanitation'] }}" placeholder="Rupees..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">United</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form11_id10" value="{{ $value['Lunited'] }}" placeholder="Rupees..">
                            </div>

                            <div class="form-group col-md-6" style="margin-left:1px;text-align:center;">
                                <label for="form11_id">District Panchayat</label>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">Tied Water Supply</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form11_id11" value="{{ $value['Dtied_water_supply'] }}" placeholder="Rupees..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">Tied Sanitation</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form11_id12" value="{{ $value['Dtied_sanitation'] }}" placeholder="Rupees..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">United</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form11_id13" value="{{ $value['Dunited'] }}" placeholder="Rupees..">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form11_id">SBM(G)</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="form11_id14" value="{{ $value['SBM'] }}" placeholder="Ruppees..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="form11_id">Miscellaneous Project</label>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="form11_id15" value="{{ $value['Miscellaneous_project'] }}" rows="3" placeholder="Content.."></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="form11_id">Details of Work Progress for which Administration permission had already been obtained or given Administrative permission</label>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="form11_id16" value="{{ $value['Administrative_permission'] }}" rows="3" placeholder="Content.."></textarea>
                                </div>
                            </div>

                            <div style="margin-bottom:2em;margin-left:2em;">
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
@endsection
