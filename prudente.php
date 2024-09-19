<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="angielo.css">
 
</head>

<body>


<div class="country">
<div class="countrys">
  <div class="flag-country">
  <img src="images/phi.gif" alt="" id="country-image">
   
  <h1 id="nation">PHILIPPINES</h1><br>
  <input type="text" placeholder="SEARCH COUNTRY" id="myinput"><br><br>
  </div>
   <br>
   <div class="text-country">
    
   <h4 id="CAPITAL">Capital:Manila</h4><br>
   <h4 id="CURRENCY">Currency:peso</h4><br>
   <h4 id="CODE">Code:PH</h4><br>


   </div>

   <div class="button-country">
    <button onclick="next()">NEXT</button>
    <button onclick="prev()">PREV</button>
   </div>

   </div>

    
   </div>

    






<script>

 let currentNumbe = 0;


 const countrys = [

   {
    images: "phi.gif",
    nation: " nation:PHILIPPINES",
    CAPITAL: "  CAPITAL: MANILA",
    CURRENCY: "    CURRENCY: PESO",
    CODE:    "    CODE: PH"

   },



   {
    images: "japan.gif",
    nation: "nation:JAPAN",
    CAPITAL: "CAPITAL:TOKYO",
    CURRENCY: "CURRENCY:JAPAN YEN",
    CODE:    "CODE:JP"




   },

   {

    images: "koreas.gif",
    nation: "nation:KOREA",
    CAPITAL: " CAPITAL:SEOUL",
    CURRENCY: "  CURRENCY:KOREA YEN",
    CODE:    " CODE: JP"
   },

   {

   images: "bang.gif",
   nation: " nation: BANGLADESH",
   CAPITAL: "  CAPITAL:DHAKA",
   CURRENCY: " CURRENCY:BANGLADESH TAKA",
   CODE:    " CODE: BDT"
  },
   


       {

   images: "north.gif",
   nation: "   nation: NORTH KOREA",
   CAPITAL: "   CAPITAL: PYONGYANG",
   CURRENCY: "   CURRENCY:NORTH KOREAN WON",
   CODE:    "   CODE: KPW"
  },
   
       {

   images: "russ.gif",
   nation: "   nation:RUSSIA",
   CAPITAL: "   CAPITAL: MOSCOW",
   CURRENCY: "   CURRENCY:RUSSIAN RUBLE",
   CODE:    "   CODE: RUB"
  },


     {

   images: "sing.gif",
   nation: "   nation: SINGAPORE",
   CAPITAL: "    CAPITAL:SINGAPORE",
   CURRENCY: "  CURRENCY:SINGAPORE DOLLAR",
   CODE:    "  CODE:  SGD"
  },
               
    {

   images: "spain.gif",
   nation: "    nation: SPAIN",
   CAPITAL: "   CAPITAL: MADRID",
   CURRENCY: " CURRENCY: EURO",
   CODE:    "CODE:    EUR"
  },

    {

   images: "viet.gif",
   nation: "   nation:  VIETNAM",
   CAPITAL: "   CAPITAL:HANOI",
   CURRENCY: " CURRENCY: VIETNAMESE DONG",
   CODE:    "  CODE:  VND"
  },

    {

   images: "aus.gif",
   nation: " nation:  AUSTRALIA",
   CAPITAL: "  CAPITAL: CANBERRA",
   CURRENCY: "CURRENCY: AUSTRALIAN DOLLAR",
   CODE:    " CODE:  AUD"
  },












 ]

  function updatecountry(){
 const country = countrys[currentNumbe];
 document.getElementById("country-image").src = `images/${country.images}`;
 document.getElementById("nation").textContent = country.nation;
 document.getElementById("CAPITAL").textContent = country.CAPITAL;
 document.getElementById("CURRENCY").textContent = country.CURRENCY;
 document.getElementById("CODE").textContent = country.CODE;

  }
  function next(){
   currentNumbe++;
   if(currentNumbe >= countrys.length){
     currentNumbe = 0;


   }
   updatecountry()


  }


  function prev(){
    currentNumbe--;
 if(currentNumbe <0 ){
  currentNumbe = countrys.length -1;








 }
 updatecountry()

}



function searchCar() {
    const searchValueS = document.getElementById("myinput").value.toLowerCase();
    const carIndex = countrys.findIndex(c => c.nation.toLowerCase().includes(searchValueS));
    
    if (carIndex !== -1) {
        currentNumbe = carIndex;
         updatecountry()
    }
}

document.getElementById("myinput").addEventListener("input", searchCar);

    







</script>


</body>
</html>

