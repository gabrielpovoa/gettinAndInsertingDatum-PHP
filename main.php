<style>
    form {
        padding: 2rem 5%;
        font-family: Arial, Helvetica, sans-serif;
    }
    input {
        padding: 5px;
        border-radius: 4px;
        outline: none;
        border: none;
        background-color: orange;
        color: #FFF;
    }
    .box {
        background-color: #7159c1;
        color: #FFF;
    }
</style>

<form action="showData.php" method="POST">
    <label>
        <p>New Name</p>
        <input type="text" name="name" class="box">
    </label>
    <label>
        <input type="submit" value="Send" style="cursor:pointer
        ";>
    </label>
    <br>
</form>
<hr />
<p>NAME LIST</p>
<?php 
require('file.txt')
?>
