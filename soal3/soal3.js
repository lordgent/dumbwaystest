//pattern persegi

function persegi(panjang) {


    let hasil = ''
    for(let i = 0; i < panjang; i++) {

        for (let a = 0; a < panjang; a++) {
            hasil += '* ';
        }
        hasil += '\n';
    }
    return hasil;

}
console.log(persegi(11));