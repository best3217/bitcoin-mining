var progressstate = Number(localStorage.getItem("progressstate")) || 0
let value = Number(localStorage.getItem("value"))

let timer;
let timer2;
let first1 = Number(localStorage.getItem("first1"))
let unit1 = Number(localStorage.getItem("unit1"))
let first2 = Number(localStorage.getItem("first2"))
let unit2 = Number(localStorage.getItem("unit2"))
const bit = [
    {start:0.0050125, end: 5.015900-0.0050125},
    {start:0.050043, end: 49.765109-0.050043},
    {start:0, end: 49.765109-0.050043}
]
   const cash = [
        {start:100, end: 99000},
        {start:1000, end: 990000},
        {start:0, end: 990000}
    ]
function Stopming(){
    console.log("stop")
    clearInterval(timer);
    clearInterval(timer2);
    localStorage.setItem("progressstate", 0)
}

function Cash(item) {
    let first1 = Number(localStorage.getItem("first1"))
    let unit1 = Number(localStorage.getItem("unit1"))
    let first2 = Number(localStorage.getItem("first2"))
    let unit2 = Number(localStorage.getItem("unit2"))

    localStorage.setItem("first1", bit[item-1].start)
    localStorage.setItem("unit1", (bit[item-1].end)/unit2)
    localStorage.setItem("first2", cash[item-1].start)
    localStorage.setItem("unit2", cash[item-1].end)
    clearInterval(timer);
    clearInterval(timer2);
    localStorage.setItem("value", cash[item-1].start)
    localStorage.setItem("progressstate", 0)

}
function init(){
    let width = document.getElementById("progress").style.width
    let height = document.getElementById("progress").style.width
    if (width<height) {
        document.getElementById("progress").style.borderBottomLeftRadius = 20
        document.getElementById("progress").style. borderTopLeftRadius = 20
        document.getElementById("progress").style.borderBottomRightRadius = 20*width/height
        document.getElementById("progress").style.borderTopRightRadius = 20*width/height
    }
    let value = Number(localStorage.getItem("value"))||0
    let first1 = Number(localStorage.getItem("first1")) ||0
    let unit1 = Number(localStorage.getItem("unit1")) ||1
    let first2 = Number(localStorage.getItem("first2"))||0
    let unit2 = Number(localStorage.getItem("unit2")) ||99000
    console.log("valeee",value, first2)
   let progress = 100*(value-first2)/unit2
   let widthre = progress.toFixed(0)
   document.getElementById("cash").innerHTML = "$" + value
   document.getElementById("bitcoin").innerHTML = (first1 + unit1*(value-first2))+"BTC"
   document.getElementById("progress").style.width = `${progress}%`
   document.getElementById("text").innerHTML = widthre + "%"
   document.getElementById("text1").innerHTML = widthre + "%"
   let progressstate = localStorage.getItem("progressstate")
   if(progressstate == 1){
    timer = setInterval(increase,24*3600*1000/unit2)
   }

}
function increase(){
    let width = document.getElementById("progress").style.width
    let height = document.getElementById("progress").style.width
    if (width<height) {
        document.getElementById("progress").style. height = width
        document.getElementById("progress").style.borderBottomRightRadius = 20*width/height
        document.getElementById("progress").style.borderTopRightRadius = 20*width/height
    }
    let value = Number(localStorage.getItem("value"))
   if(value < first2+unit2 && Number(localStorage.getItem("progressstate")) == 1) {
    let progress = 100*(value-first2)/unit2
    let widthre = progress.toFixed(0)
        value=value+1;
        localStorage.setItem("value", value)
        console.log(value)
        document.getElementById("cash").innerHTML = "$" + value
        document.getElementById("bitcoin").innerHTML = (first1 + unit1*(value-first2))+"BTC"
        document.getElementById("progress").style.width = `${progress}%`
        document.getElementById("text").innerHTML = widthre + "%"
        document.getElementById("text1").innerHTML = widthre + "%"
    }
   else {
    clearInterval(timer);
    clearInterval(timer2);
    init()
   }
}
function mining(){
    localStorage.setItem("state", 1)
    let progressstate = Number(localStorage.getItem("progressstate"))
    let value = Number(localStorage.getItem("value"))||0
    console.log("progressstate",progressstate)
    let unit2 = Number(localStorage.getItem("unit2"))||99000
    console.log("term",unit2)
   let val = document.getElementById("code").value
   if (val == "word2022" ){
       if (progressstate == 0){
        if(value != 0){
            localStorage.setItem("progressstate",1)
             timer2 =  setInterval(increase,24*3600*1000/unit2)
        } else {
            alert("You can't on zero balance")
        }
       }
       else {
           alert("The process has already started")
       }

   }
   else  {
       alert("please enter correct code")
   }

}
function withraw() {
if(progressstate == 0 ) {
   alert("Contact Admin")
}
else(
   alert("The process has already started")
)
}
function admin() {
    let unit2 = Number(localStorage.getItem("unit2"))||99000
    setInterval(adminprogress, 24*3600*1000/unit2)
}
function adminprogress(){
    let width = document.getElementById("progress").style.width
    let height = document.getElementById("progress").style.width
    if (width<height) {
        document.getElementById("progress").style.borderBottomLeftRadius = 20
        document.getElementById("progress").style. borderTopLeftRadius = 20
        document.getElementById("progress").style.borderBottomRightRadius = 20*width/height
        document.getElementById("progress").style.borderTopRightRadius = 20*width/height
    }
    let value = Number(localStorage.getItem("value"))||0
    let first1 = Number(localStorage.getItem("first1")) ||0
    let unit1 = Number(localStorage.getItem("unit1")) ||0
    let first2 = Number(localStorage.getItem("first2")) ||0
    let unit2 = Number(localStorage.getItem("unit2")) ||99000
    let progress = 100*(value-first2)/unit2
    let widthre = progress.toFixed(0)
    document.getElementById("cash").innerHTML = "$" + value
    document.getElementById("bitcoin").innerHTML = (first1 + unit1*(value-first2))+"BTC"
    document.getElementById("progress").style.width = `${progress}%`
    document.getElementById("text").innerHTML = widthre + "%"
    document.getElementById("text1").innerHTML = widthre + "%"
    if (value == first2) {
        document.getElementById("width").style.display = "none"
    }
    else{
        document.getElementById("width").style.display = "block"
    }
}
