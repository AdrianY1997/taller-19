const insertForm = document.querySelector("#insert-form");
const truncateBtn = document.querySelector("#truncate-products")
var request;

insertForm.addEventListener("submit", (e) => {
    e.preventDefault();
    e.stopPropagation();

    const idInput = document.querySelector("input[name='codigo-producto']").value;
    const naInput = document.querySelector("input[name='nombre-producto']").value;
    const dsInput = document.querySelector("textarea[name='descripcion-producto']").value;

    if (!idInput || !naInput || !dsInput) {
        return createNotification("Todos los campos deben estar llenos", 2);
    }

    if (!/^\d+$/.test(idInput)) {
        return createNotification("El código del producto debe ser solo números", 2);
    }

    if (!/^[a-zA-Z]/.test(naInput)) {
        return createNotification("El nombre del producto debe empezar con una letra", 2);
    }

    request = $.ajax({
        type: "post",
        url: "../tarea1/ajax/insert.php",
        data: {
            cod: idInput,
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
            insertForm.reset();
            return createNotification("Se ha registrado el producto con éxito", 1);
        }
    })
})

truncateBtn.addEventListener("click", () => {
    request = $.ajax({
        url: "../tarea1/ajax/truncate.php"
    })

    request.done((response) => {
        response = JSON.parse(response)
        console.log(response)
        if (!response.isTruncated) {
            return createNotification("No se ha podido eliminar la información", 2);
        }

        return createNotification("Se ha eliminado la información", 1);
    })
})