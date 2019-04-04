var fs = require('fs');

function readFile(filename) {  
    return new Promise((resolve, reject) => {
        fs.readFile(filename, 'utf-8', (arr, data) => {
            (arr) ? reject(arr) : resolve(data);
        })
    })  
}

function writeFile(filename, data) {  
    return new Promise((resolve, reject) => {
        fs.writeFile(filename, data, (arr) => {
            (arr) ? reject(arr) : resolve(data);
        })
    })  
}

readFile('text.txt')
    .then((result) => {
        console.log(result);
        return writeFile('text.txt', 'A')})
    .then((result) => {
        console.log(result)})



