<div class="deptImages">
    <?php
    foreach($data as $record){
        ?>
        <img class="addbybackend" src="imgs/<?=$record['strCoverImage']?>" alt="<?=$record['strName']?>" style="width:15%" data-id="<?=$record['id']?>">
    <?php
    }	
    ?>	
</div>