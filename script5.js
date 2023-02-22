const storageInput = document.querySelector(".storage");
const text = document.querySelector(".storage")
const button = document.querySelector(".button");
const storedInput = localStorage.getItem("input")

if (storageInput) {
    text.textContent = storedInput
}

storageInput.addEventListener("input", letter => {
    text.textContent = letter.target.value
})

const saveLocaly = () => {
    localStorage.setItem("input", text.textContent);
}

button.addEventListener("click", saveLocaly)