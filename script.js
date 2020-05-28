var express = require('express');
var app = express();
var checkname;
var c,s,str,image;




//app.set('view engine', 'ejs');

app.get('/', function (req, res) {
    res.render("homepage.ejs");
});

app.get('/index2/:value', function (req, res) {
    checkname = req.params.value;
    const xlsx = require('xlsx');
   // var str;
    var wb = xlsx.readFile("price.xlsx");
    var ws = wb.Sheets["flipkart"];
    var ws2 = wb.Sheets["amazon"];
    var data = xlsx.utils.sheet_to_json(ws);
    var data2 = xlsx.utils.sheet_to_json(ws2);


    //console.log(data);
    //console.log(data2);
    var price1, price2,img,url1,url2;
    
    for (var i = 0; i < data.length; i++) {
        var obj = data[i];
        var name = obj.selection1_name;
        if (obj.selection1_name == checkname){

        
            price1 = obj.selection1_price;
            img = obj.selection1_image;
            url1 = obj.selection1_url;
        }  
       // else if(name.slice(0,10)==checkname.slice(0,10)){
            
        //} 
           // console.log(img);
    }
    for (var i = 0; i < data.length; i++) {
        var obj2 = data2[i];
        if (obj2.selection1_name == checkname)
            price2 = obj2.selection1_price;
            url2 = obj2.selection1_url;

    }
   
    
    //if (price1 < price2) {
       // str = price1;
        //console.log(str);
    //} else {
      //  str = price2;
        //console.log(str);
   // }
  
   //console.log( xlsx.utils.sheet_to_json(ws));
    image = img;
   str = price1;
   c = checkname;
   s = price2;
    res.render("homepage.ejs", { s:s, c:c, str,image:image,url1,url2});
});

var server = app.listen(4002, function () {
    console.log('listining to port 4002');
});