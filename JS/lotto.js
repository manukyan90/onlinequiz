
let btn = document.querySelector("button");
btn.addEventListener("click", () =>{
    btn.innerText= "Replay";
});


function generate() {
    var arrayNums = [];

    function getRandomNum(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min)
    }

    for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 1; j++) {
            let number = getRandomNum(1, 9);
            if (!arrayNums.includes(number)) {
                arrayNums.push(number);
                document.getElementById(String(i) + String(j)).innerHTML = number;
            } else {
                j--;
            }
        }
    }
    for (let i = 0; i < 3; i++) {
        for (let j = 1; j < 2; j++) {
            let number = getRandomNum(10, 19);
            if (!arrayNums.includes(number)) {
                arrayNums.push(number);
                document.getElementById(String(i) + String(j)).innerHTML = number;
            } else {
                j--;
            }
        }
    }
    for (let i = 0; i < 3; i++) {
        for (let j = 2; j < 3; j++) {
            let number = getRandomNum(20, 29);
            if (!arrayNums.includes(number)) {
                arrayNums.push(number);
                document.getElementById(String(i) + String(j)).innerHTML = number;
            } else {
                j--;
            }
        }
    }
    for (let i = 0; i < 3; i++) {
        for (let j = 3; j < 4; j++) {
            let number = getRandomNum(30, 39);
            if (!arrayNums.includes(number)) {
                arrayNums.push(number);
                document.getElementById(String(i) + String(j)).innerHTML = number;
            } else {
                j--;
            }
        }
    }
    for (let i = 0; i < 3; i++) {
        for (let j = 4; j < 5; j++) {
            let number = getRandomNum(40, 49);
            if (!arrayNums.includes(number)) {
                arrayNums.push(number);
                document.getElementById(String(i) + String(j)).innerHTML = number;
            } else {
                j--;
            }
        }
    }
    for (let i = 0; i < 3; i++) {
        for (let j = 5; j < 6; j++) {
            let number = getRandomNum(50, 59);
            if (!arrayNums.includes(number)) {
                arrayNums.push(number);
                document.getElementById(String(i) + String(j)).innerHTML = number;
            } else {
                j--;
            }
        }
    }
    for (let i = 0; i < 3; i++) {
        for (let j = 6; j < 7; j++) {
            let number = getRandomNum(60, 69);
            if (!arrayNums.includes(number)) {
                arrayNums.push(number);
                document.getElementById(String(i) + String(j)).innerHTML = number;
            } else {
                j--;
            }
        }
    }
    for (let i = 0; i < 3; i++) {
        for (let j = 7; j < 8; j++) {
            let number = getRandomNum(70, 79);
            if (!arrayNums.includes(number)) {
                arrayNums.push(number);
                document.getElementById(String(i) + String(j)).innerHTML = number;
            } else {
                j--;
            }
        }
    }
    for (let i = 0; i < 3; i++) {
        for (let j = 8; j < 9; j++) {
            let number = getRandomNum(80, 89);
            if (!arrayNums.includes(number)) {
                arrayNums.push(number);
                document.getElementById(String(i) + String(j)).innerHTML = number;
            } else {
                j--;
            }
        }
    }
    for (let i = 0; i < 3; i++) {
        for (let j = 9; j < 10; j++) {
            let number = getRandomNum(90, 99);
            if (!arrayNums.includes(number)) {
                arrayNums.push(number);
                document.getElementById(String(i) + String(j)).innerHTML = number;
            } else {
                j--;
            }
        }
    }
    // console.log(arrayNums);
}