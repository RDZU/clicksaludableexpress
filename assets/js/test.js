/*let lista1 = [1,2,3, [3,4],null];

lista1.flat().filter(Boolean).reduce((a,b) =>a+b);

console.log(lista1);*/

var arr3 = [1, 2, [3, 4, [5, 6]]];
console.log(arr3.flat(3).filter(Boolean).reduce((a,b)=>a+b));

