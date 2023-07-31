<div style="text-align:center;background-color:grey;border:2px orange solid;">
<span style="color:orange;background-color:pink;"> 
<h1>Welcome to index!!</h1>
</span>
<?php
if(!empty($posts)){
    echo '<h1>Posts List</h1>';
    foreach($posts as $posts_item){
        echo '
        <a href="/PostController/show/'.$posts_item['id'].'">'.$posts_item['title'].'</a><br>
        ';
    }
}
?>

</div>