//drinkデータの作成
let drink = [
    {src:'photo/icecoffee.png' ,alt : "アイスコーヒー 200円"},
    {src:'photo/icetea.png' ,alt : "アイスティー 230円"},
    {src:'photo/ice-cafe-ore.png' ,alt : "アイス・カフェラテ 270円"},
    {src:'photo/blended.png' ,alt : "ブレンドコーヒー 200円"},
    {src:'photo/american.png' ,alt : "アメリカンコーヒー 200円"},
    {src:'photo/hot-cafe-ore.png' ,alt : "ホットカフェオレ 270円"},
];
//drinkのメイン
let mainDrinkImage = document.createElement('img');
mainDrinkImage.setAttribute('src',drink[0].src);
mainDrinkImage.setAttribute('alt',drink[0].alt);

let mainDrinkMsg = document.createElement('p');
mainDrinkMsg.innerText = mainDrinkImage.alt;

let mainDrink = document.querySelector('#drink-menu  .drinkMain');
mainDrink.insertBefore(mainDrinkImage,null);
mainDrink.insertBefore(mainDrinkMsg,null);
//drinkのサブ
let thumDrink = document.querySelector('#drink-menu .drinkThumb');
for (let i = 0;i<drink.length;i++)  {
    let thumbDrinkImage = document.createElement('img');
    thumbDrinkImage.setAttribute('src',drink[i].src);
    thumbDrinkImage.setAttribute('alt',drink[i].alt);
    thumDrink.insertBefore(thumbDrinkImage,null);
}

//クリックしたら、mainの画像と入れ替わる
thumDrink.addEventListener('click',function(event) {
    if(event.target.src) {
        mainDrinkImage.src = event.target.src;
        mainDrinkMsg.innerText = event.target.alt;
    }
});

//foodデータの作成
let food = [
    {src:'photo/humberger.png' ,alt : " ハンバーガー 450円"},
    {src:'photo/pasuta.png' ,alt : " パスタ 470円"},
    {src:'photo/hotdog.png' ,alt : " ホットドック 250円"},
    {src:'photo/sandwitch.png' ,alt : " サンドイッチ 250円"},
    {src:'photo/bread.png' ,alt : " トースト 200円"},
    {src:'photo/salad.png' ,alt : " サラダ 150円"},
];

let mainFoodImage = document.createElement('img');
mainFoodImage.setAttribute('src',food[0].src);
mainFoodImage.setAttribute('alt',food[0].alt);

let mainFoodMsg = document.createElement('p');
mainFoodMsg.innerText = mainFoodImage.alt;

let mainFood = document.querySelector('#food-menu .foodMain');
mainFood.insertBefore(mainFoodImage,null);
mainFood.insertBefore(mainFoodMsg,null);

//foodのサブ
let thumbFood = document.querySelector('#food-menu .foodThumb');
for(let i = 0; i<food.length;i++) {
    let thumbFoodImg = document.createElement('img');
    thumbFoodImg.setAttribute('src',food[i].src);
    thumbFoodImg.setAttribute('alt',food[i].alt);
    thumbFood.insertBefore(thumbFoodImg,null);
    
}

//クリックしたら、mainの画像と入れ替わる
thumbFood.addEventListener('click',function(event) {
    if(event.target.src) {
        mainFoodImage.src = event.target.src;
        mainFoodMsg.innerText = event.target.alt;
    }
});

//desertのデータ
let desert = [
    {src:'photo/pancake.png',alt:'パンケーキ 600円'},
    {src:'photo/shortcake.png',alt:'ショートケーキ　450円'},
    {src:'photo/fruittaruto.png',alt:'フルーツタルト 500円'},
]

//desertのmain
let mainDesertImg = document.createElement('img');
mainDesertImg.setAttribute('src',desert[0].src);
mainDesertImg.setAttribute('alt',desert[0].alt);

let mainDesertMsg = document.createElement('p');
mainDesertMsg.innerText = mainDesertImg.alt;

let mainDesert = document.querySelector('#desert-menu .desertMain');
mainDesert.insertBefore(mainDesertImg,null);
mainDesert.insertBefore(mainDesertMsg,null);

//desertのthumb
let thumbDesert = document.querySelector('#desert-menu .desertThumb');

for(let i = 0;i<desert.length;i++) {
    let thumbDesertImg = document.createElement('img');
    thumbDesertImg.setAttribute('src',desert[i].src);
    thumbDesertImg.setAttribute('alt',desert[i].alt);
    thumbDesert.insertBefore(thumbDesertImg,null);
}

//クリックしたら、mainの画像と入れ替わる
thumbDesert.addEventListener('click',function(event) {
    if(event.target.src) {
        mainDesertImg.src = event.target.src;
        mainDesertMsg.innerText = event.target.alt;
    }
});