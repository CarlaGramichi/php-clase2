<?php
$proyectos = [
    uniqid() => [
        'title' => 'Proyecto 1',
        'description' => 'Descripción del proecto 1',
        'date' => '2021-08-23',
        'status' => 'completado',
        'author' => [
            'name' => 'Pepito',
            'user' => 'user pepito',
            'mail' => 'pepito@gmail.com',
            'photo' => [
                'name' => 'perfil 1',
                'src' => 'photos/perfil1.jpg'
            ],
        ],
    ],
    uniqid() => [
        'title' => 'Proyecto 2',
        'description' => 'Descripción del proecto 2',
        'date' => '2021-10-05',
        'status' => 'completado',
        'author' => [
            'name' => 'Juani',
            'user' => 'user juani',
            'mail' => 'juani@gmail.com',
            'photo' => [
                'name' => 'perfil 2',
                'src' => 'photos/perfil2.jpg'
            ],
        ],
    ],
    uniqid() => [
        'title' => 'Proyecto 3',
        'description' => 'Descripción del proecto 3',
        'date' => '2021-07-23',
        'status' => 'completado',
        'author' => [
            'name' => 'miñi',
            'user' => 'user mini',
            'mail' => 'mini@gmail.com',
            'photo' => [
                'name' => 'perfil 3',
                'src' => 'photos/perfil3.jpg'
            ],
        ],
    ],
    uniqid() => [
        'title' => 'Proyecto 4',
        'description' => 'Descripción del proecto 4',
        'date' => '2021-01-02',
        'status' => 'completado',
        'author' => [
            'name' => 'Brucer',
            'user' => 'user Brucer',
            'mail' => 'brucer@gmail.com',
            'photo' => [
                'name' => 'perfil 4',
                'src' => 'photos/perfil4.jpg'
            ],
        ],
    ],
    uniqid() => [
        'title' => 'Proyecto 5',
        'description' => 'Descripción del proecto 5',
        'date' => '2021-04-21',
        'status' => 'completado',
        'author' => [
            'name' => 'Alisha',
            'user' => 'user Alisha',
            'mail' => 'peque@gmail.com',
            'photo' => [
                'name' => 'perfil 5',
                'src' => 'photos/perfil5.jpg'
            ],
        ],
    ],
];
?>
<h2>Ejercicio 1</h2>
<table border="1">
    <thead>
    <tr>
        <th>Titulo</th>
        <th>Descripción</th>
        <th>Fecha de creación</th>
        <th>Autor</th>
        <th>E-mail</th>
        <th>Foto de perfil</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($proyectos as $proyecto): ?>
        <tr>
            <td>
                <?= $proyecto['title'] ?>
            </td>
            <td>
                <?= $proyecto['description'] ?>
            </td>
            <td>
                <?= (new \DateTime($proyecto['date']))->format('d/m/Y') ?>
            </td>
            <td>
                <?= $proyecto['author']['name'] ?>
            </td>
            <td>
                <?= $proyecto['author']['mail'] ?>
            </td>
            <td align="center">
                <img src="<?= $proyecto['author']['photo']['src'] ?>" width="50px">
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>

</table>
<h2>Ejercicio 2</h2>
<?php

$productos = [
    uniqid() => [
        'name' => 'chocolate',
        'description' => 'negro y amargo',
        'stock' => 2,
        'price' => '100',
        'img' => 'photos/perfil4.jpg'
    ],
    uniqid() => [
        'name' => 'tortitas black',
        'description' => 'las mejores gallestas del mundo',
        'stock' => 1,
        'price' => '150',
        'img' => 'photos/perfil1.jpg'
    ],
    uniqid() => [
        'name' => '3D',
        'description' => 'conitos ricos',
        'stock' => 5,
        'price' => '150',
        'img' => 'photos/perfil2.jpg'
    ]
];
//var_dump($productos['sku1']['stock'] + $productos['sku2']['stock'] + $productos['sku3']['stock']);
//MALLLLLLLLLLLLLLL $stockTotal = $productos['sku1']['stock'] + $productos['sku2']['stock'] + $productos['sku3']['stock'];
//MALLLLLLLLLLLLLLL $priceTotal = array_sum([$productos['sku1']['price'], $productos['sku2']['price'], $productos['sku3']['price']]);

$priceTotal = array_sum(array_column($productos, 'price'));
$stockTotal = array_sum(array_column($productos, 'stock'));

echo "Total de Productos Distintos: " . count($productos) . "<br>";
echo " Total de Stock general: " . $stockTotal . "<br>";
echo " Precio total: " . $priceTotal . "<br>";

?>


