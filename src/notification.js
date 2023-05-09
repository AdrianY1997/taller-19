const createNotification = (text, code) => {
    let textHeader, textHeaderColor, textHeaderColorClass, bgHeader;

    switch (code) {
        case 1:
            textHeader = "Success"
            textHeaderColor = "white";
            textHeaderColorClass = "text-white"
            bgHeader = "bg-success"
            break;
        case 2:
            textHeader = "Error"
            textHeaderColor = "white";
            textHeaderColorClass = "text-white"
            bgHeader = "bg-danger"
            break;
    }

    const toastContainer = document.querySelector("#toast-container");

    const toast = document.createElement("div");
    toast.classList.add("toast")
    toast.setAttribute("role", "alert");
    toast.setAttribute("aria-live", "assertive");
    toast.setAttribute("aria-atomic", "true");
    toast.style.setProperty("transition", "1s");
    toast.style.setProperty("display", "block");


    const toastHeader = document.createElement("div");
    toastHeader.classList.add("toast-header", bgHeader, textHeaderColorClass)

    const thStr = document.createElement("strong");
    thStr.classList.add("me-auto");
    thStr.innerHTML = textHeader;

    const thBtn = document.createElement("button");
    thBtn.classList.add("btn", textHeaderColor);
    thBtn.setAttribute("type", "button");
    thBtn.setAttribute("aria-label", "Close")
    thBtn.style.setProperty("padding", "0");
    thBtn.style.setProperty("display", "flex");
    thBtn.style.setProperty("margin-left", "5px");
    thBtn.innerHTML = `<svg style="fill: ${textHeaderColor};width: 10px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>`

    toastHeader.appendChild(thStr);
    toastHeader.appendChild(thBtn);

    const toastBody = document.createElement("div");
    toastBody.classList.add("toast-body", "fs-5")
    toastBody.innerHTML = text

    toast.appendChild(toastHeader);
    toast.appendChild(toastBody);

    thBtn.addEventListener("click", () => {
        toast.style.setProperty("opacity", "0");
        setTimeout(() => {
            toast.remove();
        }, 1000)
    })

    toastContainer.appendChild(toast);

    setTimeout(() => { thBtn.click() }, 5000)
}