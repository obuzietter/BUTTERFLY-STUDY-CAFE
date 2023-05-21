

let timeSlot = document.getElementById("time-slot")
let pricing = document.getElementById("pricing")
let space = document.getElementById("space-type")
let price

function priceCalc() {
    switch (timeSlot.value) {
        case "morning":
            price = 400
            pricing.value = price
            break
        case "mid-morning":
            price = 300
            pricing.value = price
            break
        case "afternoon":
            price = 200
            pricing.value = price
            break
        case "evening":
            price = 300
            pricing.value = price
            break
    }
}

function spaceRate() {
    switch (space.value) {
        case "laptop-space":
            price = +100
            break
        case "group-space":
            price = +50
            break
        case "resting-area":
            price = +150
    }

}
timeSlot.onchange = priceCalc

const bkNowBtn = document.getElementById("bk-now-btn")
const containerForm = document.getElementById("container-form")
const containerTime = document.getElementById("container-time")

function slider() {
    containerForm.style.marginLeft = "200px"
    containerTime.style.marginLeft = "-140px"
    containerForm.style.zIndex = "1"
    containerForm.style.transform = "scale"
    containerForm.style.scale = "1.05"
}
bkNowBtn.onclick = slider;
