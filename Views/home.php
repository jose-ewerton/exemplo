<label for="story">Tell us your story:</label>

<textarea id="story" name="story"
          rows="5" cols="33">
          <?php

for ($i=0; $i <count($dadosModel) ; $i++) { 
    echo $dadosModel[$i]['nome']." ";
    echo $dadosModel[$i]['sobrenome'];
}
?>
</textarea>



