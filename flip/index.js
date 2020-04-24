var affiliate = require('flipkart-affiliate-client');
var express = require('express');
var app = express();
var body;
// Creating CLient

var client = affiliate.createClient({
	FkAffId: 'shahrusha1',
	FkAffToken: '888b73480eb947719f34cb997246474b',
	responseType: 'json'
});

client.getCategoryFeed({
  trackingId: 'shahrusha1'
}, function(err, result){
    if(!err){
      body = JSON.parse(result);
    }else {
      console.log(err);
    }
});


app.get('/',function(req,res){
	res.send(body);
});

app.listen(3000,function(){
	console.log("Server listening at port 3000");
});