<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
    <style type="text/css">
        p.error {
            margin-top: 1em;
            color: red;
        }
    </style>
</head>
<body>

<div style="text-align: center;">
<p>Select the image to upload and show</p>
<form action="readshowimage.php" method="post" enctype="multipart/form-data">
    <label for="filepath">Filename:</label>
    <input type="file" name="filepath" id="filepath" /> 
    <br/><br/>
    <div style="text-align: center;">
        <input type="submit" name="submit" value="Submit" id="submit" />
    </div>
</form>

{if isset($error_message)}
    <p class="error">Error: {$error_message}</p>
{/if}
</div>


</body>
</html>