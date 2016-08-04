@extends('layout')

@section('content')

<div class="container-fluid" id="wrapper">

    <div>
        <h1>Maplot</h1>
        <p class="lead">Plot your customers' location on the map</p>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <input id="txt-search" name="q" class="form-control" placeholder="Search for customer name, location" />
        </div>
        <div class="col-sm-2">
            <button id="btn-search" type="button" class="btn btn-primary">Search</button>
        </div>
        <div class="col-sm-2">
            <button id="btn-add" type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-prospect">Add</button>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div id="map"></div>

            <div style="display: none;">
                <div id="map-info">
                    <h4>Customer name</h4>
                    <address>
                        <div class="addr-section">
                            <div>
                                <b>Address:</b>
                            </div>
                            <div>No. 123, Jalan 345
                                <br> Kawasan Bandar 47500
                                <br> Subang Jaya
                                <br> Malaysia.
                            </div>
                        </div>
                        <div class="addr-section">
                            <div>
                                <b>Phone:</b>
                            </div>
                            <div><a href="tel:+60123456789">+60 12 345 6789</a></div>
                        </div>
                    </address>
                </div>
            </div>
        </div>
    </div>

</div><!-- /.container -->

<!-- Modal -->
<div class="modal fade" id="modal-prospect" tabindex="-1" role="dialog" aria-labelledby="modal-prospect-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="frm-prospect" action="{{ route('api.prospects.add') }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modal-prospect-label">Add Prospect</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                    <div class="form-group">
                        <label for="postcode">Postcode</label>
                        <input type="text" class="form-control" id="postcode" name="postcode">
                    </div>
                    <div class="form-group">
                        <label for="state_id">State</label>
                        <select class="form-control" id="state_id" name="state_id">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="country_id">Country</label>
                        <select class="form-control" id="country_id" name="country_id">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lat">Latitude</label>
                        <input type="text" class="form-control" id="lat" name="lat">
                    </div>
                    <div class="form-group">
                        <label for="lng">Longitude</label>
                        <input type="text" class="form-control" id="lng" name="lng">
                    </div>
                    <div class="form-group">
                        <label for="remark">Remark</label>
                        <textarea class="form-control" id="remark" name="remark"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

@endsection
