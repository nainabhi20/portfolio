var fs=require('fs');
fs.readFile('data.json',(err,dat)=>{
    var data=JSON.parse(dat);
    console.log(dat.toString());
});