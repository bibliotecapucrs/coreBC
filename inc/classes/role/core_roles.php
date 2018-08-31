<?php
$result = add_role(
    'librarian',
    __( 'Bibliotecário' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);
/*
if ( null !== $result ) {
    echo 'Yay! New role created!';
}
else {
    echo 'Oh... the librarian role already exists.';
}
*/

?>
