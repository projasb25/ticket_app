<h1>Principal</h1>
<?php $data = array(
        array('Name', 'Color', 'Size'),
        array('Fred', 'Blue', 'Small'),
        array('Mary', 'Red', 'Large'),
        array('John', 'Green', 'Medium')
);

echo $this->table->generate($data); 

foreach($users as $user){
    echo $user->email;
}

?>