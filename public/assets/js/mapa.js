async function obtenerVotos() {
    try {
        const response = await fetch(route('obtener-votos'), {
            headers: {
                'Content-Type': 'application/json',
            },
        });

        if (response.status === 200) {
            const data = await response.json();
            return data;
        }
        return false;
    } catch(error) {
        console.error(error);
        return false;
    }
}

const asignarIconoMarcador = (registro) => {
    let icono = '';
    if (registro.une == 1) {
        icono = 'assets/img/une.png';
    } else if (registro.cambio == 1) {
        icono = 'assets/img/cambio.jpg';
    } else if (registro.cabal == 1) {
        icono = 'assets/img/cabal.jpg';
    } else if (registro.azul == 1) {
        icono = 'assets/img/azul.png';
    } else if (registro.r19 == 1) {
        icono = 'assets/img/r19.png';
    } else if (registro.coalicion == 1) {
        icono = 'assets/img/coalicion.jpg';
    } else if (registro.humanista == 1) {
        icono = 'assets/img/humanista.png';
    } else if (registro.vamos == 1) {
        icono = 'assets/img/vamos.png';
    }
    return icono;
}

const partidoAFavor = (registro) => {
    let partido = '';
    if (registro.une == 1) {
        partido = 'UNE';
    } else if (registro.cambio == 1) {
        partido = 'Cambio';
    } else if (registro.cabal == 1) {
        partido = 'CABAL';
    } else if (registro.azul == 1) {
        partido = 'Azul';
    } else if (registro.r19 == 1) {
        partido = 'R19';
    } else if (registro.coalicion == 1) {
        partido = 'Coalición';
    } else if (registro.humanista == 1) {
        partido = 'Humanista';
    } else if (registro.vamos == 1) {
        partido = 'Vamos';
    }
    return partido;
}

const contenidoInfoWindow = (registro, partido) => {
    const contenido = `<div id="content">
            <h5 id="firstHeading" class="firstHeading">${registro.nombre}</h5>
            <div id="bodyContent">
                <p><b>A favor de partido: </b>${partido}</p>
                <p><b>DPI: </b>${registro.dpi}</p>
                <p><b>Lugar: </b>${registro.lugar}</p>
            </div>
        </div>`;
    return contenido;
}


async function initMap() {
    const contenedorMapa = document.getElementById('mapa-votacion');
    const map = new google.maps.Map(contenedorMapa, {
        center: { lat: 14.7954469, lng: -90.8198221 },
        mapTypeControl: false,
        streetViewControl: false,
        fullscreenControl: true,
        zoom: 9
    });

    const addMarkers = (coords, icon, info) => {
        const marker = new google.maps.Marker({
            position: coords,
            map: map,
            icon: icon
        });

        marker.addListener("mouseover", () => {
            info.open(map, marker);
        });

        marker.addListener("mouseout", () => {
            info.close(map, marker);
        });

    }

    const votos = await obtenerVotos();

    if (votos) {
        votos.forEach(voto => {
            const coordenadas = {
                lat: voto.latitud,
                lng: voto.longitud
            };

            const icono = asignarIconoMarcador(voto);
            const partido = partidoAFavor(voto);
            const infowindow = new google.maps.InfoWindow({
                content: contenidoInfoWindow(voto, partido),
            });

            addMarkers(coordenadas, icono, infowindow);
        });
    }
}