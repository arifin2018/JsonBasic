// let mahasiswa = {
//   Nama: "Nur Arifin",
//   Umur: 20,
//   nrp: "183112706450001",
// };
// // Object jadi JSON
// console.log(JSON.stringify(mahasiswa));

let test = new XMLHttpRequest();
test.onreadystatechange = function () {
  if ((test.readyState == 4) & (test.status == 200)) {
    let mahasiswa = JSON.parse(this.responseText);
    console.log(mahasiswa);
  }
};
test.open("GET", "Coba.JSON", true);
test.send();

// $.getJSON("Coba.json", function (data) {
//   console.log(data);
// });
