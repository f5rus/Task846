  var date = new Date();
  var year = date.getFullYear();
 


function daysInMonth(Year, month) {
        return 33 - new Date(Year, month, 33).getDate();
    };
    
function filldays(daysInMonth){
    $("#menu_date_day li").remove(); 
    for(i=1; i<=daysInMonth;i++){        
        $("#menu_date_day").append("<li role='presentation' class='liday'><span class='li_date'>"+i+"</span></li>");
    }
       
    $(".liday").on('click', function(){
        $("#day").text($(this).text());
     });
   
   if (parseInt($("#day").text())> parseInt(daysInMonth)){
       $("#day").text(daysInMonth);
   }
}    

function fillyears()
{
  
   for(i=year; i>1900;i--){
         $("#menu_date_yar").append("<li role='presentation' class='liyear'><span class='li_date'>"+i+"</span></li>");
    }   
   
}

function fillinputdate(){   
    $('#datarog').val($("#day").text()+" "+ $("#mes").text()+" "+$("#year").text());
}
function showtooltip(elem,mess){
      elem.tooltip({
                placement:'right',
                title:mess,
                trigger: 'manual'
                }).tooltip('show');
            
}

function displayError(elem,group,mess){
    group.addClass('error').removeClass('success');
    
    showtooltip(elem,mess);
}

function validate(form){
    var valid=true;
    
    //проверка что все поля не пусты
    var inputs = form.find('input');
    $.each(inputs, function(index,val){
       var input = $(val);
       var group = input.parents('.control-group');
       
       if(input.val().trim()==''){               
            displayError(input, group, "поле должно быть заполнено!");
        }
       else
       {
           group.addClass('success').removeClass('error');            
       };
        
    });
    
    
    
    //проверка фио
    var regFIO = /^[а-яА-Я]+$/;
    var fio =  $(".fio");  

    $.each(fio, function(index, value){
    
        var name = $(value);   
   
        var group = name.parents('.control-group');
        if((name.val().trim()!='') && (!regFIO.test(name.val()))){
            displayError(name, group, "поле должно содержать только буквы русского алфавита!");
        valid = false;    
        };
       });
    //проверка имени пользователя
    
    var regFIO = /^[a-zA-Z0-9]+$/;
    var username = $('#username');   
    var group = username.parents('.control-group');
        if((username.val().trim()!='') && (!regFIO.test(username.val()))){
       valid = false; 
        displayError(username, group, "поле должно содержать только латинские буквы и цифры!");
       
    };
    //проверка пароля
       
    var regPass = /^[A-Za-z0-9]+$/;
    var pass = $('#Password');   
    var group = pass.parents('.control-group');
    var rpass = $('#replayPassword');   
    var rgroup = rpass.parents('.control-group'); 
    
    if((pass.val().length<8) || (!regPass.test(pass.val()))){
        valid = false;  
        displayError(pass, group, "длина пароля должна быть не менее 8 допустимых символов!");
         rgroup.removeClass('success');   
    } 
    else if (pass.val()!== rpass.val()){
        
        valid = false;
        displayError(rpass, group, "пароли не совпадают!");
           };  
           
    //проверка о себе
    var about = $("#about");    
    var group = about.parents('.control-group');
    
    if(about.val().trim()=="")
    {
        
        valid = false;
        displayError(about, group, "поле не заполнено!");
    }
    else
    {
        group.addClass('success').removeClass('error');                
    };
   
    
    var y = parseInt($('#year').text())+18;
    var m = $("#dropdownMenu2").val();
    var d = $("#day").text();
    
    var dateb =  new Date(y, m, d); 
       
    var dropYear = $('#dropdownMenu3');
    var group = dropYear.parents('.control-group');
    if(dateb > date) {
        valid = false;
        displayError(dropYear, group, "ограничение по возрасту 18+!");
    }
    else
    {
      group.addClass('success').removeClass('error');    
    };
    
    $('#city').addClass('success');
    
    return valid;
}
$(document).ready(function(){
 
    filldays(daysInMonth(year,0));
    
    fillyears();
   
    fillinputdate();
    
    $(".liyear").on('click', function(){
        $("#year").text($(this).text());
        
         filldays(daysInMonth( $("#year").text(),$("#dropdownMenu2").val()));
        
    });
   
    $(".limes").on('click', function(){
        $("#mes").text($(this).text());
        $("#dropdownMenu2").val($(this).index());
       
        filldays(daysInMonth( $("#year").text(),$("#dropdownMenu2").val()));
        
    });
    
    $("form").on('submit', function(e){
        
        fillinputdate();
        
        e.preventDefault();
        
        res= validate($(this));
        
        if(!res)
        {
            return false;
        };
        
        var str = $(this).serialize();
        
        $.ajax({
           url: 'info.php',
           type: 'POST',
           data: str,
           success: function(msg){
                $('#result').html(msg);}
        });
        
    });
    
    $("form").on('keydown','input',function(e){
        $(this).parents('.control-group').removeClass('success').removeClass('error');
        $(this).tooltip('destroy');
    });
    
    $("form").on('keydown','textarea',function(e){
        $(this).parents('.control-group').removeClass('success').removeClass('error');
        $(this).tooltip('destroy');
    });
    
     $("form").on('click','.dropdown-toggle',function(e){
        $(this).parents('.control-group').removeClass('success').removeClass('error');
        $('#dropdownMenu3').tooltip('destroy');
    });
    
}       
);

