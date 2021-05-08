//pattern persegi

//hasil parameter 5

function persegi(panjang) {

    let hasil = '';
    for(let i = 0; i < panjang; i++) {

        for (let a = 0; a < panjang; a++) {
            if(a % 2 ) {
                hasil += ' = ';

            } else {
                hasil += ' * ';
            }
        }
        hasil += '\n';
        
    }
    return hasil;

}
console.log("hasil parameter draw image 5");
console.log(persegi(5)); 


console.log('\n');


//hasil parameter 7

function persegi2(panjangg) {

    let hasil = '';
    for(let i = 0; i < panjangg; i++) {

        for (let b = 0; b < panjangg; b++) {
            
            if(b % 0 ) {
                hasil += ' * ';
            } else if(b % 1) {
                hasil += ' = ';
            } else if(b % 3) {
                hasil += ' = '
            } 
            else {
                hasil += ' * ';
            }
        }
        hasil += '\n';
        
    }
    return hasil;

}
console.log("hasil parameter draw image 7");
console.log(persegi2(7)); 
