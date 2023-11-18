function init()
{
     //функция начальной инициализации графика
var ctx = document.getElementById('myChart').getContext('2d');
chart= new Chart(ctx, {
    type:"line",

    data:{
    datasets:[
    {
label:"Уровень загрязнения",
fill:false,
radius:6,
borderColor:'rgb(255, 0, 0)',
backgroundColor:'rgb(255, 0, 0)',
lineTension:0.0,
pointStyle: 'rect',
hoverBorderWidth:10}]
},
// Configuration options go here
options: {
scales: {
xAxes: [{
ticks: {
//
//
/*
maxTicksLimit:10,
maxRotation:90,
minRotation:90*/
}
}]
},
animation: {
duration: 0, // general animation time
},
hover: {
animationDuration: 0 // duration of animations when hovering an item
},
responsiveAnimationDuration: 0 // animation duration after a resize
}
});




}

//инициализируем график
init();

// разбираем данные







