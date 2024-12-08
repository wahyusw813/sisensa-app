document.querySelectorAll('input[name="leave_type"]').forEach((radio) => {
    radio.addEventListener("change", function () {
        const fileUpload = document.getElementById("fileUpload");
        if (this.value === "sakit") {
            fileUpload.classList.remove("hidden");
        } else {
            fileUpload.classList.add("hidden");
        }
    });
});

function toggleEdit() {
    const inputs = document.querySelectorAll("input");
    const saveBtn = document.getElementById("saveBtn");

    inputs.forEach((input) => {
        input.disabled = !input.disabled;
    });

    saveBtn.classList.toggle("hidden");
}
