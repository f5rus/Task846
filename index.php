<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/myStyle.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container main">  
            <div id="reg_form">
            <form class="form-horizontal">
                <legend>Регистрация</legend>
                <div class="control-group" >
                    <label class="control-label">Фамилия</label>
                    <div class="controls">
                        <input name="surname" Class="fio" id ="surname" type="text" placeholder="Фамилия">
                    </div>
                </div>
                
                 <div class="control-group">
                    <label class="control-label">Имя</label>
                    <div class="controls">
                        <input name="name" Class="fio" id ="name" type="text" placeholder="Имя">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label">Отчество</label>
                    <div class="controls">
                        <input name="middlename" Class="fio" id="middlename" type="text" placeholder="Отчество">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" >Дата рождения</label>
                   
                    <div class="controls controls-row">

                        
                       <div class="dropdown span2 spas2_date_ch">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                <span id="day">1</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu menu_date" role="menu" aria-labelledby="dropdownMenu1" id="menu_date_day">
                               
                            </ul>
                       </div>        
                        
                        <div class="dropdown span2 spas2_date_mon">        
                            
                            <button class="btn btn-default dropdown-toggle" value="0" type="button" id="dropdownMenu2" data-toggle="dropdown">
                                <span id="mes">Январь</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu menu_date" role="menu" aria-labelledby="dropdownMenu2" id="menu_date">
                                <li role='presentation' class="limes" value="1"><span class='li_date'>Январь</span></li>
                                <li role='presentation' class="limes" value="2"><span class='li_date'>Февраль</span></li>
                                <li role='presentation' class="limes"><span class='li_date'>Март</span></li>
                                <li role='presentation' class="limes"><span class='li_date'>Апрель</span></li>
                                <li role='presentation' class="limes"><span class='li_date'>Май</span></li>
                                <li role='presentation' class="limes"><span class='li_date'>Июнь</span></li>
                                <li role='presentation' class="limes"><span class='li_date'>Июль</span></li>
                                <li role='presentation' class="limes"><span class='li_date'>Август</span></li>
                                <li role='presentation' class="limes"><span class='li_date'>Сентябрь</span></li>
                                <li role='presentation' class="limes"><span class='li_date'>Октябрь</span></li>
                                <li role='presentation' class="limes"><span class='li_date'>Ноябрь</span></li>
                                <li role='presentation' class="limes"><span class='li_date'>Декабрь</span></li>                                
                            </ul>
                        </div>
                        
                        
                        <div class="dropdown span2 spas2_date_year">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown">
                               <span id="year">2014</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu menu_date" role="menu" aria-labelledby="dropdownMenu1" id="menu_date_yar">
                               
                            </ul>
                       </div>  
                        
                    </div>
		</div>

                <input id = "datarog" name = "datarog"></input>
                
                 <div class="control-group">
			<label class="control-label">Пол</label>
			<div class="controls">
                        	<input type="radio" name="optionsRadios" id="optionsRadios1" value="мужской" checked>
				муж.
                   		<input type="radio" name="optionsRadios" id="optionsRadios2" value="женский">
                        	жен.
                   	</div>
		</div>    
                				
		<div class="control-group" id="city">
                    <label class="control-label">Город</label>
                    <div class="controls">
                        <select>
                            <option>Новосибирск</option>
                            <option>Омск</option>
                            <option>Томск</option>
			</select>
                    </div>
                </div>
				
		<div class="control-group">
                    <label class="control-label">Имя пользователя</label>
                    <div class="controls">
                        <input id="username" name="username" type="text" placeholder="Имя пользователя">
                    </div>
                </div>
				
		<div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                        <input name ="Email" type="Email" id="inputEmail" placeholder="Email">
                    </div>
                </div>
					
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Пароль</label>
                    <div class="controls">
                        <input name="Password" type="password" id="Password" placeholder="Пароль">
                    </div>
                </div>
				
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Повтор пароля</label>
                    <div class="controls">
                        <input name ="replayPassword" type="password" id="replayPassword" placeholder="Повтор пароля">
                    </div>
                </div>				
				
		<div class="control-group">
                    <label class="control-label">О себе</label>
                    <div class="controls">
		        <textarea name="about" id="about" rows="3"></textarea>
                    </div>
		</div>
				
						
                <div class="control-group">
                    <div class="controls">                      
                        <button type="submit" class="btn" id ="btn_send">Выполнить</button>
                    </div>
                </div>
                               
                
            </form>
            </div>
            
            <div id="result">
               
            </div>
            
        </div>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="Script.js"></script>
    </body>
</html>
