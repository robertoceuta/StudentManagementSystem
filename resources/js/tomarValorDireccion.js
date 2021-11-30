let provinciaVisible = document.getElementById('ps-prov');
let provinciaOculta = document.getElementById('provincia_oculta');
let municipioVisible = document.getElementById('ps-mun');
let municipioOculto = document.getElementById('municipio_oculto');
let botonRegistro = document.getElementById('btn-registro');

botonRegistro.addEventListener("click", (e) => {
    provinciaOculta.value = provinciaVisible.options[provinciaVisible.selectedIndex].text;
    municipioOculto.value = municipioVisible.options[municipioVisible.selectedIndex].text;
});