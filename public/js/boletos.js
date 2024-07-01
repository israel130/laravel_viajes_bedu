
$('#div_informacion').hide();

if ( $('#compra').val() != '' ) {
    $('#div_informacion').show();
}


function comprar() {

    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Tu boletos se compraron",
        showConfirmButton: false,
        timer: 2000
    });
    $('#div_informacion').hide();

    let viaje = $('#compra').val();
    let idusu = $('#idusu').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });   
    $.ajax({
        async:true,
        type: "post",
        url: "/enviarinfo",
        data: {
            viaje:viaje,
            user:idusu
        },
        success: function (response) {
        }
    });
    setTimeout(() => {
        window.location.href = 'http://localhost:8000/usuario';
    }, 1900);
}

function viajescomprados() {

    let idusu = $('#idusu').val();

    $.ajax({
        type: "get",
        url: "viajescomrpados",
        data: {
           idusu:idusu 
        },
        success: function (response) {
            
            $.each(response.viajes, function (i, val) { 
                let viaje = `
                    <div class="col-3">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>${val.id}</h3>
                                <p>${val.viaje}</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                `;
                $("#viajes_comprados").append(viaje);
            });
        }
    });
}
viajescomprados()