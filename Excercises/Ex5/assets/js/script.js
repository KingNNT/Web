function add() {
    let a = parseFloat(document.getElementById("txta").value);
    let b = parseFloat(document.getElementById("txtb").value);

    let c = a + b;
    document.getElementById("txtc").value = c;
}

function solve() {
    let a = parseInt(document.getElementById("txta").value);
    let b = parseInt(document.getElementById("txtb").value);
    let c = parseInt(document.getElementById("txtc").value);
    let result;
    if (a === 0) {
        if (b === 0) {
            if (c === 0) {
                result = "Vo So Nghiem";
            } else {
                result = "Vo Nghiem";
            }
        } else {
            result = -c / b;
        }
    } else {
        let delta = b * b - 4 * a * c;
        console.log("delta = " + delta);
        if (delta < 0) {
            result = "Vo Nghiem";
        } else {
            if (delta > 0) {
                let x1 = ((-b + Math.sqrt(delta)) / (2 * a)).toString();
                let x2 = ((-b - Math.sqrt(delta)) / (2 * a)).toString();
                result = x1 + " || " + x2;
            } else {
                result = (-b / 2 * a);
            }
        }
    }
    document.getElementById("txtrs").value = result;
}