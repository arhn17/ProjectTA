var number = 0;
var number_service = 0
var no = 0
var nom = 0
var nor = 0
function add_paket(){
    var token = $('meta[name="token"]').attr('content');

    $.ajax({
        type : "GET",
        url : "/paket/list_paket",
        dataType : "json",
    }).done(function(response){
        var html = ''
        html += '<div id="row'+number+'">'
        html += '<div class="row clearfix">'
        html += '<div class="col-sm-11">'
        html += '<select class="form-control show-tick" id="package'+number+'" name="package['+number+']" onchange="list_service(this.id, '+number+')">'
        html += '<option value="0">Select Package</option>'

        for (var i = 0; i < response.length; i++) {
            html += '<option value="'+response[i].id+'">'+ response[i].nama_paket +'</option>'
        }

        html += '</select>'
        html += '</div>'
        html += '<div class="col-sm-1 text-right">'
        html += '<a class="btn btn-sm btn-danger" onclick="remove_paket('+number+')"><i class="material-icons">close</i></a>'
        html += '</div>'
        html += '</div>'
        html += '<div class="row clearfix" id="detail_paket'+number+'">'
        html += '</div>'
        html += '</div>';
        $('#list_paket').append(html)
        number++
    }).error(function(data){
        alert("Error Data !")
    });
}

function remove_paket(row)
{
    $('#row'+row).remove()
}

function remove_service(row)
{
    $('#rows'+row).remove()
}

function list_service(id, number)
{
    var package_value = $('#'+id).val()
        var token = $('meta[name="token"]').attr('content');

        $.ajax({
            type : "GET",
            url : "/detail_paket/get_service/"+ $('#'+id).val(),
            dataType : "json",
        }).done(function(response){
            var therapist = get_therapist()
            var html = ''
            if (response.length > 0) {
                html += '<div class="row clearfix">'
                html += '<div class="col-sm-offset-1 col-sm-10">'
                for (var i = 0; i < response.length; i++) {
                    html += '<div class="col-sm-6">'
                    html += '<label>Service</label><input type="text" name="package_service'+number+'[]" value="'+response[i].service.id+'" hidden><input type="text" class="form-control" value="'+response[i].service.nama_services+'" readonly>'
                    html += '</div>'
                    html += '<div class="col-sm-3">'
                    html += '<label>Terapis</label>'
                    html += '<select class="form-control show-tick" id="list_therapist'+nom+'" name="therapist_service_package'+number+'[]" required>'

                    $.ajax({
                        type : "GET",
                        url : "/therapist/get_all",
                        dataType : "json",
                    }).done(function(response2){
                        var html2 = ''
                        if (response2.length > 0) {
                            for (var j = 0; j < response2.length; j++) {
                                html2 += '<option value="'+response2[j].id+'">'+response2[j].nama+'</option>'
                            }
                        }
                        $('#list_therapist'+no).html(html2)
                        no++
                    });

                    html += '</select>'
                    html += '</div>'
                    html += '<div class="col-sm-3">'
                    html += '<label>Room</label>'
                    html += '<select class="form-control show-tick" id="list_ruangan'+nom+'" name="ruangan_service_package'+number+'[]">'

                    $.ajax({
                        type : "GET",
                        url : "/ruangan/get_all",
                        dataType : "json",
                    }).done(function(response3){
                        var html3 = ''
                        for (var j = 0; j < response3.length; j++) {
                            html3 += '<option value="'+response3[j].id+'">'+response3[j].nama_ruang+'</option>'
                        }
                        $('#list_ruangan'+nor).html(html3)
                        nor++
                    });

                    html += '</select>'
                    html += '</div>'
                    nom++

                }
                html += '</div>'
                html += '</div>'
            }
            $('#detail_paket'+number).html(html)
        }).error(function(data){
            alert("Error Data !")
        });
}

function add_service(){
    var token = $('meta[name="token"]').attr('content');

    $.ajax({
        type : "GET",
        url : "/service/get_all",
        dataType : "json",
    }).done(function(response){
        var html = ''
        html += '<div>'
        html += '<div class="row clearfix" id="rows'+number_service+'">'
        html += '<div class="col-sm-5">'
        html += '<label>Service</label>'
        html += '<select class="form-control show-tick" id="package'+number_service+'" name="service['+number+']">'

        for (var i = 0; i < response.length; i++) {
            html += '<option value="'+response[i].id+'">'+ response[i].nama_services +'</option>'
        }

        html += '</select>'
        html += '</div>'
        html += '<div class="col-sm-3">'
        html += '<label>Terapis</label>'
        html += '<select class="form-control show-tick" id="list_therapist_service'+nom+'" name="therapist_service_package'+number+'">'

        $.ajax({
            type : "GET",
            url : "/therapist/get_all",
            dataType : "json",
        }).done(function(response2){
            var html2 = ''
            if (response2.length > 0) {
                for (var j = 0; j < response2.length; j++) {
                    html2 += '<option value="'+response2[j].id+'">'+response2[j].nama+'</option>'
                }
            }
            $('#list_therapist_service'+no).html(html2)
            no++
        });

        html += '</select>'
        html += '</div>'
        html += '<div class="col-sm-3">'
        html += '<label>Room</label>'
        html += '<select class="form-control show-tick" id="list_ruangan_service'+nom+'" name="ruangan_service_package'+number+'">'

        $.ajax({
            type : "GET",
            url : "/ruangan/get_all",
            dataType : "json",
        }).done(function(response3){
            var html3 = ''
            for (var j = 0; j < response3.length; j++) {
                html3 += '<option value="'+response3[j].id+'">'+response3[j].nama_ruang+'</option>'
            }
            $('#list_ruangan_service'+nor).html(html3)
            nor++
        });

        html += '</select>'
        html += '</div>'
        html += '<div class="col-sm-1 text-right">'
        html += '<a class="btn btn-sm btn-danger" onclick="remove_service('+number_service+')"><i class="material-icons">close</i></a>'
        html += '</div>'
        html += '</div>'
        html += '</div>';
        $('#daftar_service').append(html)
        number++
        nom++
    }).error(function(data){
        alert("Error Data !")
    });
}

function get_therapist()
{
    var token = $('meta[name="token"]').attr('content');

    $.ajax({
        type : "GET",
        url : "/therapist/get_all",
        dataType : "json",
    }).done(function(response){
        return response
    }).error(function(data){
        return false
    });
}

function cous_role(role)
{
    if (role == 0) {
        $('#non_member').show()
        $('#member').hide()
    }
    else{
        $('#non_member').hide()
        $('#member').show()
    }
}