const booleanToString = b => b == true ? "true" : "false";


function booleanToString(b) {
   return b.toString();
}


function booleanToString(b) {
   return String(b);
}


function booleanToString(b) {
   return `${b}`
}


console.log(booleanToString(true), "true", 'When we pass in true, we want the string "true" as output');
console.log(booleanToString(false), "false", 'When we pass in false, we want the string "false" as output');