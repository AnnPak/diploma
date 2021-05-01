<? require_once DIR_PATH_APP.'/views/header.php'?>
<? require_once DIR_PATH_APP.'/views/nav.php'?>
    <?  $project = $this->arResult["PROJECT"];?>
    <title>Проекты</title>
   
    <section class="workplace">

        <div class="decomp-subheader">
            <div class="decomp-name"><?=$project['name']?></div>
            <div class="decomp-icon icon-pencil"></div>
            <div class="decomp-icon icon-paperclip"></div>
            <div class="decomp-icon icon-comment"></div>
        </div>

        <div class="decomp-wrapper">
                  
            <div class="decomp-section" id="wrapper-waiting">
                <p class="decomp-section-name">Ожидают выполнения</p>
                <div></div>
            </div>

            <div class="decomp-section" id="wrapper-waiting">
                <p class="decomp-section-name">В процессе</p>
            </div>


            <div class="decomp-section  decomp-section__large" id="wrapper-waiting">
                <p class="decomp-section-name">Готово</p>
            </div>




        </div>
        


         
        <div class="left-menu">
            <div class="left-menu__icon icon-calendar"></div>
            
            
            <div class="left-menu__calendar"> 
                
                <div class="left-menu__close icon-times"></div>
                <table id="calendar2" class="left-menu__content">
                    <thead>
                      <tr ><td><div class="arrow icon-foward arrow_transform"></div><td class="month" colspan="5"><td><div class="arrow icon-foward">
                      <tr ><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
                    <tbody>
                </table>
                <div class="left-menu__tasks">
                
                    <p class="left-menu__title">Задачи на сегодня</p>
    
                    
                </div>

            </div>
          
            
          
        </div> 

    </section>
   

   


    


    <? require_once DIR_PATH_APP.'/views/footer.php'?>