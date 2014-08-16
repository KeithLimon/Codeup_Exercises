<?php
// $numbers = array(1, 2, 3, 4, 5);
// foreach ($numbers as $key => $value) {
//     echo ("\$value has a key of {$key} and a value of {$value}\n");
// }
// $student_details = array(
//     'name' => 'Jane Doe',
//     'age' => 29
// );

// foreach ($student_details as $key => $value) {
//     echo "Student's $key is $value\n";
// }




$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $title => $book) 
{
    if (book['published'] > 1950)
    {
    
    echo "$title\n";

    echo "\tAuthor:" . $book ['author']; . PHP_EOL;
    echo "\tPublish Date;" . $book ['published'] . PHP_EOL;
    echo "\tPages:" . $book ['pages'] . PHP_EOL
    
    echo "---------\n";
    }
}

    // foreach ($book as $key => $value) 
    // {
    //     echo "$book as $key is $value\n";
    //     echo "------------\n";
    // }
// }



?>