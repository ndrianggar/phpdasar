// Buatlah algoritma
// 2, 4, 8, 16, 32, 64, 128

for (var i = 2; i < 128; i *= 2) {

    console.log(i);
}

// ===============

// Buatlah algoritma
// 7, 15, 31, 63, 127

console.log("\n");

var a = 7;

console.log(a);

for (var i = 2; i < 6; i++)
    console.log(a = (a * 2) + 1);


// ===============

// Buatlah algoritma
// 7, 15, 31, 63, 127


console.log("\n");

for (var i = 1; i <= 4; i++)
    for (var j = 1; j <= 4; j++)
        if (j == i || j == 4 - i + 1)
            console.log("*")
        else
            console.log(" ")
console.log("\n")


// ===============

// Buatlah algoritma
//

console.log("\n")


// ===============

// Buatlah algoritma
//

console.log("\n")

var a = ""
for (let i = 0; i < 5; i++)
    for (let i = 5; i >= 1; i = i - 2)
        a += "*"
for (let i = 3; i <= 5; i = i + 2)
    a += "*"

console.log(a)