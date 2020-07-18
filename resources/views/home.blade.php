<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        #map {
            height: 500px;
            display: none;
        }

        .suggestions {
            border: 1px solid gray;
        }

        .property-radio label img {
            display: block;
            margin: auto;
            width: 150px;
            height: 100px;
        }

        .property-radio {
            text-align: center
        }

        .section-title {
            text-align: center;
        }

        .table {
            display: none;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="map">

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row" style="margin-top: 3%">
            <div class="col-md-12">
                <div class="section-title">
                    <h3>What's Your Peoperty Address</h3>
                </div>

            </div>
        </div>

        <div class="row" style="margin-top: 3%">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <form id="my_form" method="post" action="{{route('submit-form')}}">
                                <div class="col-md-12">
                                    <div class="my-form">
                                        <div class="row">
                                            <div class="col-md-3 offset-md-1">
                                                <div class="ui-widget">
                                                    <div class="form-group">
                                                        <label>Street Address</label>
                                                        {{csrf_field()}}
                                                        <input type="text" placeholder="Search address" id="tags" class="form-control" name="street_address" autocomplete="off" required />
                                                        <input type="hidden" value="" name="county" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" placeholder="City" class="form-control" name="city" autocomplete="off" required />
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" placeholder="State" class="form-control" name="state" autocomplete="off" required />
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Zipcode</label>
                                                    <input type="text" placeholder="Zipcode" class="form-control" name="zipcode" autocomplete="off" required />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin:3% 0px ">
                                    <div class="row">
                                        <div class="col-md-10 offset-md-1 ">
                                            <h5>Select Your Property Type</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 offset-md-1">
                                            <div class="property-radio">
                                                <label for="prop1">
                                                    <img src="{{asset('assets/images/1.png')}}" />
                                                    <label>Single Family Home</label>
                                                    <input id="prop1" type="radio" class="form-control" value="1" name="property_type" required />
                                                </label>

                                            </div>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="property-radio">
                                                <label for="prop2">
                                                    <img src="{{asset('assets/images/2.png')}}" />
                                                    <label>Condo/Coop/Town House/Mobile</label>
                                                    <input id="prop2" type="radio" class="form-control" value="2" name="property_type" required />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="property-radio">
                                                <label for="prop3">
                                                    <img src="{{asset('assets/images/3.png')}}" />
                                                    <label>Multifamlily 1-4 Units</label>
                                                    <input id="prop3" type="radio" class="form-control" value="3" name="property_type" required />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="property-radio">
                                                <label for="prop4">
                                                    <img src="{{asset('assets/images/4.png')}}" />
                                                    <label>Land /Lot</label>
                                                    <input id="prop4" type="radio" class="form-control" value="4" name="property_type" required />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="property-radio">
                                                <label for="prop5">
                                                    <img src="{{asset('assets/images/5.png')}}" />
                                                    <label>Other</label>
                                                    <input id="prop5" type="radio" class="form-control" value="5" name="property_type" required />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button style="margin: auto;display:block" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 3%">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Sr. Number</th>
                                    <th scope="col">Street Address</th>
                                    <th scope="col">City</th>
                                    <th scope="col">State</th>
                                    <th scope="col">Property Type</th>
                                    <th scope="col">County</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmiAuZQaFAgfssrfwtyFEQhY2NWzkgJ0&callback=initMap&libraries=&v=weekly" defer></script>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    let map;
    let geocoder;
    let infowindow;
    let search_query_url = "{{route('search-query')}}";
    let submit_form_url = "{{route('submit-form')}}";
    let zipcode;
    let county;

    function initMap() {
        let place = {
            lat: 25.942122
            , lng: -80.269920
        };
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 25
            , center: place
        });

        geocoder = new google.maps.Geocoder();
        infowindow = new google.maps.InfoWindow();

    }


    $(function() {
        function log(message) {
            $("<div>").text(message).prependTo("#log");
            $("#log").scrollTop(0);
        }
        $("#tags").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: search_query_url
                    , type: 'post'
                    , dataType: "JSON"
                    , data: {
                        search_query: request.term
                    }
                    , success: function(data) {
                        //   response(data.data);
                        response($.map(data.data.suggestions, function(item) {
                            return {
                                label: item.text
                                , value: item.text
                                , city: item.city
                                , state: item.state
                                , zipcode: zipcode
                            }
                        }));
                    }
                });
            }
            , minLength: 1
            , select: function(event, ui) {
                console.log(ui.item.label);
                console.log(this.value);
                codeAddress(geocoder, map);
                //geocodeLatLng(geocoder, map, infowindow);
                $('[name=city]').val(ui.item.city);
                $('[name=state]').val(ui.item.state);
                $('#map').show();
            }
            , open: function() {
                $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
            }
            , close: function() {
                $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
            }
        });

        $('#my_form').submit(function(e) {
            e.preventDefault();
            let form_data = $(this).serialize();
            console.log(form_data);

            $.post(submit_form_url, form_data, function(res) {
                if (res.code == '100') {
                    let table_data = '';
                    $.each(res.data, function(key, val) {
                        key = key + 1;
                        table_data += '<tr>' +
                            '<td>' + key + '</td>' +
                            '<td><a target="_blank" href="https://www.google.co.in/maps/search/' + val.street_address + '" >' + val.street_address + '</a></td>' +
                            '<td>' + val.city + '</td>' +
                            '<td>' + val.state + '</td>' +
                            '<td>' + val.property_type.name + '</td>' +
                            '<td>' + val.county + '</td>' +
                            '</tr>';
                    })
                    $('.tbody').text('');
                    $(table_data).appendTo('.tbody');
                    $('.table').show();
                    $('#my_form')[0].reset();
                }
                console.log(res);
            });

        });

    });


    function codeAddress(geocoder, map) {
        geocoder.geocode({
            'address': $('[name=street_address]').val()
        }, function(results, status) {

            if (status === 'OK') {
                console.log(results);
                map.setCenter(results[0].geometry.location);

                $.each(results[0].address_components, function(key, val) {

                    if (val.types[0] === "postal_code") {
                        zipcode = val.long_name;
                    }

                    if (val.types[0] === "administrative_area_level_2") {
                        county = val.long_name;
                    }

                });
                console.log(zipcode);
                $('[name=zipcode]').val(zipcode);
                $('[name=county]').val(county);
                var marker = new google.maps.Marker({
                    map: map
                    , position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }

    function geocodeLatLng(geocoder, map, infowindow) {
        var input = document.getElementById("latlng").value;
        var latlngStr = input.split(",", 2);
        var latlng = {
            lat: parseFloat(latlngStr[0])
            , lng: parseFloat(latlngStr[1])
        };
        geocoder.geocode({
            location: latlng
        }, function(results, status) {
            console.log(results);
            if (status === "OK") {
                if (results[0]) {
                    map.setZoom(11);
                    var marker = new google.maps.Marker({
                        position: latlng
                        , map: map
                    });
                    infowindow.setContent(results[0].formatted_address);
                    infowindow.open(map, marker);
                } else {
                    window.alert("No results found");
                }
            } else {
                window.alert("Geocoder failed due to: " + status);
            }
        });
    }

</script>
</html>
