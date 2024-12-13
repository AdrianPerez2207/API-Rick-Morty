window.onload = async () => {


    async function getPersonajes() {
        const url = 'https://rickandmortyapi.com/api/character';

        try {
            const response = await fetch(url);
            const result = await response.json();
            console.log(result);
            return result;
        } catch (error) {
            console.error(error);
            throw error;
        }
    }

    async function mostrarPersonajes() {
        const result = await getPersonajes();

        let text_HTML = `
            <div class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
       `;

        for(const personaje of result.results) {
            let nombre = personaje.name;
            let especie = personaje.species;
            let origen = personaje.origin.name;
            let imagen = personaje.image;
            text_HTML += `
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="${imagen}" class="bd-placeholder-img card-img-top" width="100%" height="225"</img>
                        <div class="card-body">
                            <p class="card-text">Nombre: ${nombre}</p>
                            <p class="card-text">Especie: ${especie}</p>
                            <p class="card-text">Origen: ${origen}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="index.php?accion=insertar&nombre=${nombre}&especie=${especie}&origen=${origen}&imagen=${imagen}"
                                     type="button" class="btn btn-sm btn-outline-secondary">Añadir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }
        text_HTML += `
              </div>
            </div>
        `;
        document.getElementById("principal").innerHTML = text_HTML;
    }
    mostrarPersonajes();

}