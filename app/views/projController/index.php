<? require_once DIR_PATH_APP.'/views/header.php'?>
<? require_once DIR_PATH_APP.'/views/nav.php'?>
    <title>Проекты</title>
  
    <section class="workplace">
        

        <div class="new-proj icon-plus" data-target="#new_project">Новый проект</div>

        <div class="wrapper-proj" id="wrapper-proj" >
            <?foreach ($this->arResult["ITEMS"] as $project):?>
                <div class="project" id="<?=$project['id']?>" >
                   
                    <div class="project__item">
                        <a class="project__link" href="/pahotina/diploma/decomp/get/<?=$project['id']?>">
                        <img class="project__img" src="<?=MAIN_PREFIX?>/app/img/icons/Proj.svg" alt="Proj">
                        </a>
                        <div class="project__icons">
                            <div onclick="projectDelete(<?=$project['id']?>,'<?=$project['name']?>')" class="trash icon-trash "></div>
                            <div class="pen icon-pencil" onclick="editProjName(<?=$project['id']?>,'<?=$project['name']?>')"></div>
                        </div>
                        
                    </div>
                    <a class="project__link" href="/pahotina/diploma/decomp/get/<?=$project['id']?>">
                        <p class="project__title"><?=$project["name"]?></p>
                        <hr>
                    </a>
                </div> 
            <?endforeach?>
             
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
   

    <form action="<?= MAIN_PREFIX ?>/proj/add/" class ="create-proj" id="create-proj" method="post">
        <div class="create-proj__title">Создать проект</div>
        <div class="create-proj__close icon-times"></div>

        <div class="create-proj__wrapper">

            <input class="create-proj__input" id = "name-proj" name="name-proj" placeholder="Название проекта" type="text" required >
            <div class="create-proj__icon icon-clock"></div>
            <div class="create-proj__icon icon-paperclip"></div>

            <textarea class="create-proj__comment" name="comment" placeholder="Добавить комментарий"></textarea>	
        </div>
        
        <button type="submit" class="button button_create-proj" id="button-create-proj" >Создать</button>

    </form>


    <!-- <form action="#" class ="create-proj" id="create-proj">
        <div class="create-proj__title">Создать проект</div>
        <div class="create-proj__close icon-times"></div>

        <div class="create-proj__wrapper">

            <input class="create-proj__input" id = "name-proj" name="name-proj" placeholder="Название проекта" type="text" required >
            <div class="create-proj__icon icon-clock"></div>
            <div class="create-proj__icon icon-paperclip"></div>

            <textarea class="create-proj__comment" placeholder="Добавить комментарий"></textarea>	
        </div>
        
        <input type="button" onclick="addNewProject(this)" class="button button_create-proj" id="button-create-proj" value="Создать" disabled>

    </form>  -->


    <? require_once DIR_PATH_APP.'/views/footer.php'?>