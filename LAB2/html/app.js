
    var num = 10;
    let name = "Maaa"
    age = 250;
    
    fruit = ["apple","Mangkud","Lamyai"];
    ojb = {name:"Somchai",age:200, tel:"123-443"};

    data = {adress:["23","Yai","Buriram",3100],name:"Somporn"};


    console.log(fruit[1]);
    console.log(ojb.tel)
    console.log(data.adress[2]);

    document.getElementById("msg").innerHTML = data.adress[2];

    let longTxt = data.name+" : " + fruit[0]; 

    longTxt = `${data.name} :
              ${fruit[1]}`;
    $(function(){
        $("#msg").html(longTxt);
    }); //Jquery ready

