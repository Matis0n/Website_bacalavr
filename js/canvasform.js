var toggle = 0;
let timer;

function realtimer()
{
	let sens1 = sensors();


	let sensarr = [sens1,];
	let senstd = document.getElementsByClassName("sens");

	timer = setInterval(()=>{
		senstd[0].innerHTML = sens1.shak_generate_array(20,25,7);
		showb(sensarr[document.getElementById("parametr").selectedIndex]);

	}, 500);

}


realtimer();

function ToggleMod(g)
{
	if (g == 1)
	{
		toggle = 0;
		
		document.getElementById("ffdiv").style.display = "none";
		document.getElementById("pdiv").style.display = "block";

		document.getElementById("mod1").style.display = "none";
		document.getElementById("mod2").style.display = "block";
		realtimer();

	}else 
	{
		toggle = 1;
		clearInterval(timer);
		chart.data.datasets[0].data = [];
		chart.update();

		document.getElementById("ffdiv").style.display = "block";
		document.getElementById("pdiv").style.display = "none";

		document.getElementById("mod1").style.display = "block";
		document.getElementById("mod2").style.display = "none";
	};
}

function ChangeColor()
{
	let p = document.getElementById("parametr").selectedIndex;
	if (p == 0)chart.data.datasets[0].borderColor = 'rgb(255, 0, 0)';

	
}

function showb(sensor = 0)
{

	chart.destroy();
	init();
	let parametr = document.getElementById("parametr").options[document.getElementById("parametr").selectedIndex].value;
	chart.data.datasets[0].label = document.getElementById("parametr").options[document.getElementById("parametr").selectedIndex].innerHTML;
	ChangeColor();

	let najalo = document.getElementById("najalo").value;
	let end = document.getElementById("end").value;


	
	let body = "parametr=" + parametr;

	if (toggle == 1)
	{
		

		if (najalo != "" && end != "")
		{
			body += "&najalo=" + najalo + "&end=" +end;
		}

		
		var xhr = new XMLHttpRequest();
		xhr.open("POST", '../PHP/print.php', true);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

		xhr.send(body);

		let ans;
		let obj;
		xhr.onreadystatechange = function() { // Ждём ответа от сервера
			if (xhr.readyState == 4 && xhr.status == 200) { // Ответ пришёл
			
				ans = xhr.responseText;

				if (ans == "Нет данных")
				{
					alert("Нет данных");
					
					return;
				}
				
				obj = JSON.parse(ans);
				console.log(ans); // Выводим ответ сервера

				for(let i in obj)  { 
					chart.data.labels.push( obj[i]["dataz"] );
					chart.data.datasets[0].data.push(  obj[i]["znachenie"] ) ; 
					
				}

				chart.update();
				
			
			}
		};	   
	}else
	{
		for (let i = 0;i < sensor.data.length; i++)
		{
			chart.data.labels.push(i + 1);
			chart.data.datasets[0].data.push(sensor.data[i][1]) ;
		}

		chart.update();
	}

	
	  
	
}



function perehod()
{
	window.localStorage.setItem("p", document.getElementById("parametr").options[document.getElementById("parametr").selectedIndex].value);
	document.location.href='index.php?page=3;';

}

function dopfunct(but)
{

	var xhr = new XMLHttpRequest();
	xhr.open("POST", '../PHP/dobfunct.php', true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	let parametr = document.getElementById("parametr").options[document.getElementById("parametr").selectedIndex].value;
	let body = "parametr=" + parametr + "&d=";

	if (but.value == "Максимальное значение")
	{
		body += '1'; 
	}

	if (but.value == "Минимальное значение")
	{
		body += '2'; 
	}

	if (but.value == "Среднее значение")
	{
		body += '3'; 
	}

	xhr.send(body);

	xhr.onreadystatechange = function() { // Ждём ответа от сервера
		if (xhr.readyState == 4 && xhr.status == 200) { // Ответ пришёл
		  
			ans = xhr.responseText;
			console.log(ans);
	if (but.value == "Максимальное значение")
	{
	alert("Максимальное значение:" + [ans.replace(/[^0-9.]/g,"")])
	} 

	if (but.value == "Минимальное значение")
	{
	alert("Минимальное значение:" + [ans.replace(/[^0-9.]/g,"")])
	}

	if (but.value == "Среднее значение")
	{
	alert("Среднее значение:" + [ans.replace(/[^0-9.]/g,"")])
	}	  
		}
	  };

}


function printd()
{

	let najalo = new Date(document.getElementById("najalo").value);
	let end = new Date(document.getElementById("end").value);
	
	let parametr = window.localStorage.getItem("p");
	
	let dur = end.getDate() - najalo.getDate();

	if (dur <= 0)
	{
		alert("Не верный диапозон времени");
		return;
	}

	if (dur > 30)
	{
		alert("Слишком большой диапозон. Диапозон не должен превышать 30 дней");
		return;
	}

	if (dur == NaN)
	{
		alert("Диапозон не задан");
		return;
	}

	let senso = sensors();
	senso.generate_array(dur,25,7);
	myjson=JSON.stringify(senso);
	recovered_sensor =JSON.parse(myjson); 


	let timer = najalo;
	let body = "parametr=" + parametr;

	for(let i = 0;i < dur;i++)  { 

		body = body + "&lables[]=" + encodeURIComponent(timer.getFullYear() + "-" + timer.getMonth() + "-" + timer.getDate());
		body = body + "&Ddata[]=" + encodeURIComponent(recovered_sensor.data[i][1]);
		
		timer.setDate(timer.getDate() + 1);
		
	}


	var xhr = new XMLHttpRequest();
	xhr.open("POST", '../PHP/dobavit.php', true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	xhr.send(body);
	
	
	xhr.onreadystatechange = function() { // Ждём ответа от сервера
		if (xhr.readyState == 4 && xhr.status == 200) { // Ответ пришёл
		  
			ans = xhr.responseText;
			alert(ans);
			
		  
		}
	  };

}


function deleteb()
{
	let a = confirm("Вы действительно хотите удалить данные ?");
	let parametr = document.getElementById("parametr").options[document.getElementById("parametr").selectedIndex].value;
	let body = "parametr="+parametr;
	


	if (a == true)
	{
		var xhr = new XMLHttpRequest();
		xhr.open("POST", '../PHP/delete.php', true);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.send(body);

		xhr.onreadystatechange = function() { // Ждём ответа от сервера
			if (xhr.readyState == 4 && xhr.status == 200) { // Ответ пришёл
			  
				ans = xhr.responseText;
				alert(ans);
			  
			}
		  };
	}

	chart.destroy();
}

function sensors()
{
    return {
        name: "DHT22",
        object_id: 30,
        parameter:"Temperature",
        data: [],
        normal_rnd(mean,sigma)
        {
        return mean + sigma*Math.cos(2*Math.PI*Math.random())*Math.sqrt(
        -2*Math.log( Math.random() ) );
        },
        generate_array(quantity,mean,sigma)
        {
        for (let i = 0; i < quantity; i++) this.data[i] = [];
        for (let i=0; i<quantity; i++){
                    this.data[i][0]=i+1;
                    this.data[i][1]= this.normal_rnd(mean,sigma);
                }
        },
		shak_generate_array(quantity,mean,sigma)
		{
			let random = this.normal_rnd(mean,sigma);
				if (this.data.length != quantity)
				{
					this.data.push([this.data.length, random]);
				}

				if (this.data.length == quantity)
				{
					ibeg = this.data[0][0];
					this.data.shift();

					this.data.push([0,random]);
				}
			return random.toFixed(3);
		
		}
        };
}