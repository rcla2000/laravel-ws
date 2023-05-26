async function agregarLatLngVoto(registro) {
    try {
        const response = await fetch(route('actualizar-voto'), {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.getElementsByTagName('meta')['csrf-token'].content 
            },
            method: 'POST',
            body: JSON.stringify({
                id_voto: registro.id_voto,
                latitud: registro.latitud,
                longitud: registro.longitud
            }),
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

async function geolocalizacion(ip) {
    const key = 'c474f2c65ff704';
    try {
        const response = await fetch(`https://ipinfo.io/${ip}?token=${key}`, {
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

async function actualizarDatos() {
    const votos = await obtenerVotos();
    if (votos) {
        votos.forEach(async function(voto) {
            const res = await geolocalizacion(voto.ip);
            const LatLng = res.loc.split(',');
            const latitud = LatLng[0];
            const longitud = LatLng[1];
            agregarLatLngVoto({
                id_voto: voto.id_voto,
                latitud: latitud,
                longitud: longitud
            });
        });
    }
}

actualizarDatos();
