function check(){
	var name =document.getElementById("names");
	var male =document.getElementById("male");
	var female =document.getElementById("female");
	var dd =document.getElementById("dd");
	var mm =document.getElementById("mm");
	var gg =document.getElementById("gg");
	var now = new Date();
	var result=true;
	var regularname =/^([A-Za-z]+)|([А-Яа-я]+)$/
	var regulardate =/^\d{1,2}$/;
	var regularyear=/^\d{4}$/;
	var year=now.getFullYear();
	var month = now.getMonth() + 1;
	var day = now.getDate();
	if(!(regularname.test(name.value))) {
		name.style.border = "1px solid red"; 
		return false;
	}
	else
	{
	 if(regulardate.test(dd.value)&&regulardate.test(mm.value)&&regularyear.test(gg.value))
     {
		dd= Number(dd.value);
        mm=Number(mm.value);
        gg=Number(gg.value);
        if(dd<32 && mm<13 && gg<year)
           {
             
             if((male.checked && (year-gg<=21))|| female.checked && (year-gg<=18))
            {
                if(month-mm<=0)
                {
                    if(day - dd<0)
                    {
                        document.getElementById("info").style="color:red;display:block;margin-top: 8px;"
                        document.getElementById("info").innerHTML="Вы слишком маленькие для баскетбола:(";
                        return false;
                    }
                }

            }
            else{

                if(male.checked==true)
                {
                    alert("Введенное имя: " + name.value + "\nПол: " + male.value + "\nДата рождения: " + dd +"." + mm +"." + gg);
                }
                else
                {
                    alert("Введенное имя: " + name.value + "\nПол: " + female.value + "\nДата рождения: " + dd +"." + mm +"." + gg);
                }
                return true;

                }
        }
	 }
	 else{
	 	// error.innerText="Ошибка";
         document.getElementById("error").style="color:red;display:block;margin-top: 8px;"
             document.getElementById("error").innerHTML="Дата введена некорректно";   
	 	dd.style.border = "2px solid red";
		mm.style.border = "2px solid red";
		gg.style.border = "2px solid red";
	 	return false;
	 }
	}
	 
}

