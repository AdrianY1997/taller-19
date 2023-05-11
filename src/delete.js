const deleteBtn = document.querySelectorAll(".delete-record");
const deleteRecordConfirm = document.querySelector("#delete-record-confirm")
const deleteRecordCancel = document.querySelector("#delete-record-cancel")

deleteBtn.forEach(db => {
    db.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();

        const id = db.getAttribute("data-record-id");
        deleteRecordConfirm.setAttribute("data-record-id", id);
    });
})

deleteRecordCancel.addEventListener("click", () => {
    deleteRecordConfirm.removeAttribute("data-record-id");
})

deleteRecordConfirm.addEventListener("click", () => {
    const floatingUser = document.querySelector("#floatingUser");
    const floatingPassword = document.querySelector("#floatingPassword");

    const id = deleteRecordConfirm.getAttribute("data-record-id");
    const user = floatingUser.value
    const pass = floatingPassword.value;

    if (!floatingUser || !floatingPassword) {
        return createNotification("Todos los campos deben estar llenos", 2);
    }

    request = $.ajax({
        type: "post",
        url: "../tarea1/ajax/delete.php",
        data: {
            id: id,
            user: user,
            pass: pass
        }
    });

    request.done((response) => {
        response = JSON.parse(response);
        if (response.error) {
            console.log(response)
            return createNotification("Ha ocurrido un error, contacte con administración", 2);
        }

        if (!response.isUser) {
            return createNotification("El usuario ingresado no existe en la base de datos", 2);
        }

        if (!response.passValid) {
            return createNotification("La contraseña ingresada es invalida", 2);
        }

        if (response.deleted) {
            const rowContainer = document.querySelector("#product-list>tbody")
            const row = document.querySelector(`.table-row[data-record-id='${id}']`);

            floatingUser.value = "";
            floatingPassword.value = "";
            deleteRecordCancel.click();

            row.remove();
            if (rowContainer.children.length == 0) {
                const tr = document.createElement("tr")
                tr.innerHTML = '<td colspan="5">No hay datos</td>';
                tr.classList.add("table-row")
                rowContainer.appendChild(tr)
            }

            return createNotification("Se ha eliminado el registro correctamente", 1);
        }
    })
})
