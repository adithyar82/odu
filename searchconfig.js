
var index = elasticlunr(function () {
    this.addField('metadata');
    this.addField('body');
    this.setRef('id');
});

totalInfo.forEach(function(doc,i){
    console.log(doc)
    index.addDoc(doc);
})
//console.log(totalInfo);



// var doc1 = {
//     "id": 1,
//     "body": "Yestaday trauma Oracle has released its new database Oracle 12g, this would make more money for this company and lead to a nice profit report of annual year."
// }

// var doc2 = {
//     "id": 2,
//     "body": "As expected, Oracle released its profit report of 2015, during the good sales of database and hardware, Oracle's profit of 2015 reached 12.5 Billion."
// }

// search.addDoc(doc1);
// search.addDoc(doc2);


// search.search("Oracle database profit", {
//     fields: {
//         title: {boost: 2},
//         body: {boost: 1}
//     }
// });
