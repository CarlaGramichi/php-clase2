<?php
$proyectos = [
    '123a' => [
        'title' => 'Proyecto 1',
        'description' =>  'Descripción del proecto 1',
        'date' => '2021-08-23',
        'status' => 'completado',
        'author' => [
          'name' => 'Pepito',
          'user' => 'user pepito',
          'mail' => 'pepito@gmail.com',
          'photo' => [
              'name' => 'perfil 1',
              'src' => 'photos/perfil1.jpg'
          ] ,
        ],
    ],
    '123b' => [
        'title' => 'Proyecto 2',
        'description' =>  'Descripción del proecto 2',
        'date' => '2021-10-05',
        'status' => 'completado',
        'author' => [
            'name' => 'Juani',
            'user' => 'user juani',
            'mail' => 'juani@gmail.com',
            'photo' => [
                'name' => 'perfil 2',
                'src' => 'photos/perfil2.jpg'
            ] ,
        ],
    ],
    '123c' => [
        'title' => 'Proyecto 3',
        'description' =>  'Descripción del proecto 3',
        'date' => '2021-07-23',
        'status' => 'completado',
        'author' => [
            'name' => 'miñi',
            'user' => 'user mini',
            'mail' => 'mini@gmail.com',
            'photo' => [
                'name' => 'perfil 3',
                'src' => 'photos/perfil3.jpg'
            ] ,
        ],
    ],
    '123d' => [
        'title' => 'Proyecto 4',
        'description' =>  'Descripción del proecto 4',
        'date' => '2021-01-02',
        'status' => 'completado',
        'author' => [
            'name' => 'Brucer',
            'user' => 'user Brucer',
            'mail' => 'brucer@gmail.com',
            'photo' => [
                'name' => 'perfil 4',
                'src' => 'photos/perfil4.jpg'
            ] ,
        ],
    ],
    '123e' => [
        'title' => 'Proyecto 5',
        'description' =>  'Descripción del proecto 5',
        'date' => '2021-04-21',
        'status' => 'completado',
        'author' => [
            'name' => 'Alisha',
            'user' => 'user Alisha',
            'mail' => 'peque@gmail.com',
            'photo' => [
                'name' => 'perfil 5',
                'src' => 'photos/perfil5.jpg'
            ] ,
        ],
    ],
];
?>

<table border="1">
  <tr>
    <td>Titulo</td>
    <td>Descripción</td>
    <td>Fecha de creación</td>
    <td>Autor</td>
    <td>E-mail</td>
    <td>Foto de perfil</td>

  </tr>

    <tr>
        <?php foreach ($proyectos as $proyecto){ ?>
        <td>
            <?php echo $proyecto['title']; ?>
        </td>
        <td>
            <?php echo $proyecto['description']; ?>
        </td>
        <td>
            <?php echo $proyecto['date']; ?>
        </td>
        <td>
            <?php echo $proyecto['author']['name']; ?>
        </td>
        <td>
            <?php echo $proyecto['author']['mail']; ?>
        </td>
        <td>
            <img src="<?php  echo $proyecto['author']['photo']['src'] ?>" width="50px" >
        </td>
    </tr>
    <?php } ?>
</table>



