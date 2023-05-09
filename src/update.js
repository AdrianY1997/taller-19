const insertForm = document.querySelector("#update-form");
var request;

insertForm.addEventListener("submit", (e) => {
    e.preventDefault();
    e.stopPropagation();

    const idInput = document.querySelector("input[name='id-producto']").value;
    const cdInput = document.querySelector("input[name='codigo-producto']").value;
    const naInput = document.querySelector("input[name='nombre-producto']").value;
    const dsInput = document.querySelector("textarea[name='descripcion-producto']").value;

    if (!cdInput || !naInput || !dsInput) {
        return createNotification("Todos los campos deben estar llenos", 2);
    }

    if (!/^\d+$/.test(cdInput)) {
        return createNotification("El código del producto debe ser solo números", 2);
    }

    if (!/^[a-zA-Z]/.test(naInput)) {
        return createNotification("El nombre del producto debe empezar con una letra", 2);
    }

    request = $.ajax({
        type: "post",
        url: "../tarea1/ajax/update.php",
        data: {
            id: idInput,
            cod: cdInput,
            nam: naInput,
            des: dsInput
        }
    });

    request.done((response) => {
        console.log(response)
        response = JSON.parse(response);
        if (response) {
            if (!response.isOk && response.code == 1) {
                return createNotification("El código ingresado ya existe en la base de datos", 2)
            }
            return createNotification("Se ha actualizado el producto con éxito", 1);
        }
    })
})