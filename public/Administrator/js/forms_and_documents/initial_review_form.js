
function checkOnlyOne(checkbox, name) {
    const checkboxes = document.querySelectorAll(`input[name="${name}"]`);
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false;
    });
}